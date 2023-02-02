<?php
namespace App\Controllers;

use App\Models\PostModel;
use App\Models\DashboardModel;
use App\Models\UserModel;
use App\Models\UtilisateurModel;
use App\Models\MessageModel;
use App\Models\dashmodel;
use DateTime;

class Dashboard extends BaseController
{
  public $video;
  public $users;
  public $posts;
  public function __construct()
  {
    helper(['url', 'Form']);
    $this->video = new PostModel();
    $this->users = new DashboardModel();
    $this->posts= new dashmodel();
  }

  public function Accueil()
  {
    $user = new UtilisateurModel();
    $user_id=session()->get('loggedUser');
    $user_recent['admin']=$user->getUserInfo($user_id);
    $user_recent['video'] = $this->users->get_countVideo();
    $user_recent['users'] = $this->users->get_count();
    $user_recent['mail_not_read'] = $this->users->mail_Read();
    $user_recent['Estime_video'] = $this->users->Estime_video();
    $user_recent["Estime_users"] = $this->users->Estime();
    $user_recent['chart'] = $this->users->chart_data();
    $messag = $this->users->messages_recent();
    $user_recent['message'] = $messag->getResult();
    $use_rec = $this->users->users_recent();
    $user_recent['use'] = $use_rec->getResult();
    $video_recent = $this->users->video_recent();
    $user_recent['video_recent'] = $video_recent->getResult();
    return view('dash', $user_recent);
  }
  public function video()
  {
    $user = new UtilisateurModel();
    $con = \config\Database::connect();
    $user_id=session()->get('loggedUser');
    $rs['admin']=$user->getUserInfo($user_id);
    $post = $con->query("select * from posts order by id desc");
    $rs['video'] = $post->getResult();
    $premier = $con->query("select * from posts order by id desc limit 1");
    $rs['premier'] = $premier->getResult();
    echo view('video_dash', $rs);
  }
  public function play($id = null)
  {
    $user = new UtilisateurModel();
    $con = \config\Database::connect();
    $user_id=session()->get('loggedUser');
    $all['admin']=$user->getUserInfo($user_id);
    $post = $con->query("select * from posts order by id desc");
    $all['video'] = $post->getResult();
    $video = $con->query("select * from posts where ID=" . $id);
    $all['new'] = $video->getResult();
    echo view('playadmin', $all);
  }
  public function bloquer()
  {
    $id = $this->request->getPost('query');
    $postModel = new \App\Models\PostModel();
    $post = $postModel->find($id);
    if ($postModel->delete($post)) {
      $data = [
        'status' => 'Video deleted succefull',
      ];
    } else {
      $data = [
        'status' => 'Error of deleting',
      ];
    }
    return $this->response->setJSon($data);
  }

  public function masquer()
  {
    $id = $this->request->getPost('query');
    $con = \config\Database::connect();
    $query = $con->query("UPDATE `posts` SET `visible`='0' WHERE ID=" . $id);
    if ($query) {
      $data = [
        'status' => 'Le video n\'est pas visible par le public pour  le moment',
      ];
    } else {
      $data = [
        'status' => 'error of masquage',
      ];
    }
    return $this->response->setJSon($data);
  }

  //Not accessible to the public
  public function demasquer()
  {

    $id = $this->request->getPost('query');
    $con = \config\Database::connect();
    $query = $con->query("UPDATE `posts` SET `visible`='1' WHERE ID=" . $id);
    $data = [];
    if ($query) {
      $data = [
        'status' => 'Le video est  visible par le public pour  le moment',
      ];
    } else {
      $data = [
        'status' => 'error of demasquage',
      ];

    }
    return $this->response->setJSon($data);
  }
  //Send message to the user
  public function message()
  {
    $email = \Config\Services::email();
    $data = [
      'id' => $this->request->getPost('id'),
      'message' => $this->request->getPost('message'),
    ];
    $message = $data['message'];

    $con = \config\Database::connect();
    $user = $con->query("select * from utilisateur where ID=" . $data['id']);
    $user = $user->getResult();
    foreach ($user as $key => $user) {
      $user = $user->Mail;
    }

    $from = 'teramaflix@gmail.com';
    $to = $user;
    $message = $data['message'];
    $subject = 'avertissement';

    $email->setTo($to);
    $email->setFrom($from);
    $email->setSubject($subject);
    $email->setMessage($message);
    $data = [];
    if ($email->send()) {
      $data = [
        'status' => 'Message sent succefull',
      ];
    } else {
      $data = [
        'status' => 'Message not sent ',
      ];
    }

    return $this->response->setJSon($data);
  }

  public function users()
  {
    $user = new UtilisateurModel();
    $postView = new UserModel();
    $user_id=session()->get('loggedUser');
    $user_recent['admin']=$user->getUserInfo($user_id);
    $user_recent['users_list'] = $postView->findAll();
    if($this->request->getVar('user')){
      $id=$this->request->getVar('user');
    }else{
      $id=1;
    }
    $user_recent['row'] = $postView->find($id);
    return view('user', $user_recent);

  }
  public function desactivation()
  {
    $con = \config\Database::connect();
    $user  = $this->request->getPost('user');
    $etat  = $this->request->getPost('etat');
    $query = $con->query("UPDATE users set Actif=".$etat." where ID=". $user);
    $query = $con->query("select Actif from users where ID=".$user); 
    $status = $query->getResult();
    foreach ($status as $stat) {
      return $this->response->setJSON([
        'message' =>$etat,
        'etat'=>$stat->Actif
      ]);
    }
  }
  public function verifyActive()
  {
    $con = \config\Database::connect();
    $user  = $this->request->getPost('user');
    $query = $con->query("select Actif from users where ID=".$user); 
    $status = $query->getResult();
    foreach ($status as $stat) {
      return $this->response->setJSON([
        'etat'=>$stat->Actif
      ]);
    }
  }
  function Charte(){
  $user = new UtilisateurModel();
  $user_id=session()->get('loggedUser');
  $user_recent['admin']=$user->getUserInfo($user_id);
  $user_recent['Films']= $this->posts->get_countFilm();
  $user_recent['chart_film']= $this->posts->chart_film();
  $user_recent['chart_series']= $this->posts->chart_series();
  $user_recent['chart_Anime']= $this->posts->chart_Anime();
  $user_recent['chart_Demande']= $this->posts->chart_Demande();
  $user_recent['series']= $this->posts->Series();
  $user_recent['Animations']= $this->posts->Animations();
  $user_recent['Demande']=$this->posts->Demande();
   return view('categories',$user_recent);
  }
  public function sms()
  {
    $sms = new MessageModel();
    $user=new UtilisateurModel();
    $user_id=session()->get('loggedUser');
    $rs['admin']=$user->getUserInfo($user_id);
    $rs['users']=$user->getUsers();
    if($this->request->getVar('user')){
      $user_sms = $this->request->getVar('user');
      $rs['user']=$user->getUserInfo($user_sms);
      $rs['sms']=$sms->firstSms($user_id,$user_sms);
    }else{
      $rs['user'] = 1;
    }
    return view('sms',$rs);
  }
  public function sendSms()
  {
    $smsModel = new MessageModel();
    $userModel = new UtilisateurModel();
    $sms = $this->request->getPost('sms');
    $user = $this->request->getPost('user');
    $user_id=session()->get('loggedUser');
    $admin=$userModel->getUserInfo($user_id);
    $users=$userModel->getUserInfo($user);
    $data= [
      'Body'=>$sms,
      'FromA'=>$user_id,
      'ToB'=>$user,
      'read_mail'=>true
    ];
    $smsModel->insert($data);
    $res = $smsModel->firstSms($user_id, $user);
    $result='';
    foreach($res as $res){
      if($user_id == $res->FromA){
      $result .='
      <div class="sendUser flex justify-end mb-4 ">
      <div class="flex flex-col  space-y-2">
          <div class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white max-w-[500px]">                                   
          '.$res->Body.'
          </div>
          </div>';
        if($admin['Photo']){
          $result .='<img src="'.base_url().'/Thumbnails/'.$admin['Photo'].'" 
            class="object-cover h-8 w-8 rounded-full" alt="">';
        }else{
          $result .='<img
          src="'.base_url().'/img/logo.png"
          class="object-cover h-8 w-8 rounded-full"
          alt=""
        />';
        }
      $result .='</div>
      ';
    }
  else{
    $result .='<div class="respondUser flex  justify-start mb-4">';
        if($admin['Photo']){
          $result .= '<img src="'.base_url().'/Thumbnails/'.$users['Photo'].'" 
            class="object-cover h-8 w-8 rounded-full" alt="">';
        }else{
          $result .= '<img
          src="'.base_url().'/img/logo.png"
          class="object-cover h-8 w-8 rounded-full"
          alt=""
        />';
        }
        $result .='
        <div class="flex flex-col  space-y-2">
        <div class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white max-w-[500px]">
      '.$res->Body .'
      </div>
  </div>

</div>';
} 
}
    return $this->response->setJSON([
      'message'=>$result
    ]);
  }
  public function searchSms()
  {
    $userModel = new UtilisateurModel();
    $value= $this->request->getPost('query');
    $res = $userModel->searchUser($value);
    $result = '';
    foreach($res as $users){
      $result .='<div class="user1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
      <a href="<?= base_url()?>/message?user=<?= $users->ID?>">
        <div class="flex flex-row space-x-3">
            <div class=" w-10 h-10 xl:w-12 xl:h-12 rounded-full overflow-hidden">';
                if(!$users->Photo){
                  $result .='<img src="img/logo.png" class="" alt="profil">';
                }else{
                  $result .='<img src="'.base_url().'/Thumbnails/'.$users->Photo.'" class="" alt="profil">';
                }
           $result .=' </div>
            <div class="flex flex-col">
                <h1 class="font-semibold mt-3">'.$users->Nom.' '.$users->Prenom .'</h1>
            </div>
        </div>
      </a>
        
    </div>';
    }
    return $this->response->setJSON([
      'message'=>$result
    ]);
  }

}