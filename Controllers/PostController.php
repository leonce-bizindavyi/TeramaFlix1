<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\UtilisateurModel;
use App\Models\GenreModel;
use App\Models\CategorieModel;
use App\Models\SuscribeModel;
use App\Libraries\hash;
use CodeIgniter\HTTP\Request;

class PostController extends BaseController
{
    // public $categorieModel;
    // public $category;
    // public $genreModel;
    // public $gender;
    // public $user;
    // public $userModel;
    public function __construct(){
        // $this->genreModel=new GenreModel();
        // $this->categorieModel=new CategorieModel();
        // $this->userModel=new UtilisateurModel();
        //$user_id=session()->get('loggedUser');
        // $this->user =$this->userModel->getUserInfo($user_id)['ID'];
    }
    public function index()
    {
        return view("index");
    }
    public function post()
    {
        return view("Upload");
    }
    
    //handle new post add jax request
    public function add(){
        $genreModel=new GenreModel();
        $categorieModel=new CategorieModel();
        $userModel=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user =$userModel->getUserInfo($user_id)['ID'];
        $genre = $this->request->getPost('Genre');
        $gender=$genreModel->GenreName($genre);
        $categorie = $this->request->getPost('Categorie');
        $category = $categorieModel->CategorieName($categorie)->ID;
        $userResult = $user;
        $categorieResult=$category;
        $genreResult=$gender;
        $file = $this->request->getFile('myfile');
        $imge = $this->request->getFile('file');
        $filename = $file->getRandomName();
        $imagename = $imge->getRandomName();
         $data = [
            'Title' => $this->request->getPost('title'),
            'Image' => $imagename,
            'Video' => $filename,
            'Categorie' => $categorieResult,
            'Body' => $this->request->getPost('body'),
            'User'=> $userResult,
            'Genre'=> $genreResult,
            'Visible'=> true
        ];
        $postModel = new PostModel();
        $postModel->insert($data); 
        $file->move('Videos', $filename);
        $imge->move('Thumbnails',$imagename); 
        return $this->response->setJSON([
            'error'=>false,
            'message'=>'Success',
        ]); 
    }
    //handle fecth all post ajax request
    public function fetch(){
        $con = \config\Database::connect();
        $userModel=new UtilisateurModel();
        $user_id=session()->get('loggedUser');
        $user =$userModel->getUserInfo($user_id)['ID'];
        $userResult = $user;
        $post = $con->query("select * from video where User=".$userResult);
        $post = $post->getResult();
        $data = '';
        if($post){
        foreach($post as $posts){
                $data .= '<div class="col-md-4">
                        <div class="card shadow-sm">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detail_post_modal" id="'.$posts->ID.'" class="post_detail_btn"><img src="Thumbnails/'.$posts->Image.'" width="100%" height="300" /></a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title fs-5 fw-bold">'.$posts->Title.'</div>
                                    <div class="badge bg-dark">'.$posts->Categorie.'</div>
                                </div>
                                <p>
                                '. substr($posts->Body, 0, 80) .'...
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <div class="fst-italic">'. date('d F Y', strtotime($posts->Created_at)) .'</div>
                                <div>
                                    <a href="#" id="'.$posts->ID.'" class="btn btn-success btn-sm post_edit_btn" data-bs-toggle="modal" data-bs-target="#edit_post_modal">Edit</a>
                                    <a href="#" id="'.$posts->ID.'" class="btn btn-danger btn-sm post_delete_btn">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            return $this->response->setJSON([
                'error'=>false,
                'message'=>$data
            ]);
        }else{
            return $this->response->setJSON([
                'error'=>true,
                'message'=>'<div class="text-center text-secondary fw-bold my-5">No post found in database</div>'
            ]);
        }
        
    }
    
    //handle edit post ajax request
    public function edit($id=null){
        $postModel = new \App\Models\PostModel();
        $post= $postModel->find($id);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$post
        ]);
    }
    //hundle update post ajax request
    public function update(){    
        $genreModel=new GenreModel();
        $categorieModel=new CategorieModel();
        $id = $this->request->getPost('id');
        $genre = $this->request->getPost('Genre');
        $genre = $genreModel->GenreName($genre)->ID;
        $categorie = $this->request->getPost('Categorie');
        $categorie = $categorieModel->CategorieName($categorie)->ID;
        $old_thumb = $this->request->getPost('old_image');
        $file = $this->request->getFile('file');
        $fileName = $file->getFilename();
        if($fileName != ''){
            $fileName= $file->getRandomName();
            $file->move('Thumbnails/', $fileName);
            if($old_thumb != ''){
                unlink('Thumbnails/'.$old_thumb);
            }
        }else{
            $fileName = $old_thumb;
        }
        $data = [
            'Title' => $this->request->getPost('title'),
            'Categorie' => $categorie,
            'Genre'=> $genre,
            'Image' => $fileName,
            'Body' => $this->request->getPost('body'),
            'Created_at' =>date('Y-m-d H:i:s')
        ];
        $postModel = new \App\Models\PostModel();
        $postModel->update($id, $data);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>"Successfully updated post"
        ]);
    }
    //hundle delete post ajax request
    public function delete($id = null)
    {
        $postModel = new \App\Models\PostModel();
        $post = $postModel->find($id);
        $postModel->delete($id);
        unlink('Thumbnails/'.$post['image']);
        unlink('Videos/'.$post['video']);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>"Successfully deleted post"
        ]);
    }
    //handle fetch post detail ajax request 
    public function detail($id = null)
    {
        $con = \config\Database::connect();
        $post = $con->query("select * from video where ID='".$id."'");
        $post = $post->getResult();
        foreach($post as $post){
            $post = $post;
        }
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$post
        ]);
    }
    public function abonne()
    {
        $aboneModel = new SuscribeModel();
        $user = $this->request->getPost('user');
        $user_id=session()->get('loggedUser');
        if($aboneModel->isAbonne($user,$user_id)){
            $id = $aboneModel->isAbonne($user,$user_id)->ID;
            $aboneModel->delete($id);
            $resul = 0;
        }else{
            $data = [
                'User'=>$user,
                'Subscriber'=>$user_id
            ];
            $aboneModel->insert($data);
            $resul = 1;
        }
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$resul
        ]);
    }
    public function abonneCheck()
    {
        $aboneModel = new SuscribeModel();
        $user = $this->request->getPost('user');
        $user_id=session()->get('loggedUser');
        if($aboneModel->isAbonne($user,$user_id)){
            $resul = 1;
        }else{
            $resul = 0;
        }
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$resul
        ]);
    }
}
