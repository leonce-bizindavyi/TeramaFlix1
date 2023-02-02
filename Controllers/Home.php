<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;
use App\Libraries\hash;
use App\Models\ChannelModel;

class Home extends BaseController
{
  public function __construct()
  {
    helper(['url', 'Form']);
  }
  public function index()
  {
    return view('login');
  }
  public function Registration()
  {
    return view('register');
  }
  public function log()
  {
    $con = \config\Database::connect();
    $querys = $con->query("select * from video order by rand() limit 5");
    $rs['mVideo'] = $querys->getResult();
    $query = $con->query("select * from video order by rand()");
    $rs['video'] = $query->getResult();
    return view('index', $rs);
  }

  public function Login()
  {
    // $usermod = new UtilisateurModel();
    $validation = $this->validate([
      'mail' => [
        'rules' => 'required|valid_email|is_not_unique[users.mail]',
        'errors' => [
          'required' => 'Email is required',
          'valid_email' => 'Enter a valid Email address',
          'is_not_unique' => 'This Email is not registered on our service',
        ]
      ],
      'password' => [
        'rules' => 'required|min_length[4]|max_length[7]',
        'errors' => [
          'required' => 'password is required',
          'min_length' => 'password at least 5 character in length',
          'max_length' => 'password must not have more than 7 character in length',
        ]
      ],
    ]);

    if (!$validation) {
      return view('login', ['validation' => $this->validator]);
    } else {
      $login = new UtilisateurModel();
      $mail = $this->request->getPost('mail');
      $pass = $this->request->getPost('password');
      $user = $login->verifyEmail($mail);
      $phone_number = $login->verifyPhone($mail);
      if ($user) {
        if (password_verify($pass, $user['Password'])) {
          $id = $login->getIdm($mail)['ID'];
          $role = $login->getIdm($mail)['Admin'];
           session()->set('isAdmin', $role);
          session()->set('loggedUser', $id); 
          return redirect()->to('/');
        } else {
          return redirect()->back()->with('fail', 'Incorrect password');
        }
      } elseif ($phone_number) {
        if (password_verify($pass, $phone_number['Password'])) {
          $id = $login->getIdp($mail)['ID'];
          $role = $login->getIdp($mail)['Admin'];
          session()->set('isAdmin', $role);
          session()->set('loggedUser', $id);
          return redirect()->to('/');
        }
      }
    }
  }

  //aja request register new user
  public function Register()
  {
    $validation = $this->validate([

      'nom' => [
        'rules' => 'required',
        'errors' => ['required' => 'full name please']
      ],
      'prenom' => [
        'rules' => 'required',
        'errors' => ['required' => 'full name please']
      ],
      'datenaissance' => [
        'rules' => 'required|valid_date',
        'errors' => [
          'required' => 'put date please',
          'valid_date' => 'put the correct format of date please'
        ]
      ],
      'phone' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'phone required please',
          'numeric' => 'Incorrect Phone'
        ]
      ],
      'gender' => [
        'rules' => 'required|alpha',
        'errors' => [
          'required' => 'Gender required please',
          'alpha' => ' gender must be alpha'
        ]
      ],
      'mail' => [
        'rules' => 'required|valid_email|is_unique[users.Mail]',
        'errors' => [
          'required' => 'Email is required',
          'valid_email' => 'you must enter a valid email',
          'is_unique' => 'Email already taken'
        ]
      ],
      'password' => [
        'rules' => 'required|min_length[4]|max_length[7]',
        'errors' => [
          'required' => 'password is required',
          'min_length' => 'password at least 5 character in length',
          'max_length' => 'password must not have more than 7 character in length',
        ]
      ],
      'cpassword' => [
        'rules' => 'required|min_length[4]|max_length[7]|matches[password]',
        'errors' => [
          'required' => 'confirm password is required',
          'min_length' => 'confirm password at least 4 character in length',
          'max_length' => 'confirm password must not havemore than 7 character in length',
          'matches' => 'confirm password not matches to password'
        ]
      ],
    ]);
    if (!$validation) {
      return view('register', ['validation' => $this->validator]);
    } else {
      $user = new UtilisateurModel();
      $sexe = $this->request->getPost('gender');
      if ($sexe == "M")
        $sexe = "M";
      else if ($sexe == "F")
        $sexe = "F";
      $values = [
        'ID' => "us10",
        'Nom' => $this->request->getPost('nom'),
        'Prenom' => $this->request->getPost('prenom'),
        'Mail' => $this->request->getPost('mail'),
        'Password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        'Phone' => $this->request->getPost('phone'),
        'Naissance' => $this->request->getPost('datenaissance'),
        'Genre' => $sexe,
      ];
      //$mail = $this->request->getPost('mail');
      $query = $user->insert($values);
      if (!$query) {
        return redirect()->back()->with('fail', 'something went wrong');
      } else {
        $id = $user->insertID();
        session()->set('loggedUser', $id);
        return redirect()->to('/');
      }
    }
  }
  //dashboard function
  public function dashboard()
  {
    $con = \config\Database::connect();
    $querys = $con->query("select * from video order by rand() limit 5");
    $rs['mVideo'] = $querys->getResult();
    $query = $con->query("select * from video order by rand()");
    $rs['video'] = $query->getResult();
    $user_id = session()->get('loggedUser');
    $user = new UtilisateurModel();
    $channelMod=new ChannelModel();
    $rs['user'] = $user->getUserInfo($user_id);
    $rs['channel']=$channelMod->getChannelInfo($user_id);
    return view("index", $rs);
  }
  public function Logout()
  {
    if (session()->has('loggedUser')) {
      session()->remove('loggedUser');
      return redirect()->to('/')->with('fail', 'you are logged out!!');
    }
  }
  public function createChannel(){
    return view('createChannel');
  }
  public function createPage(){
    $valid=\config\Services::Validation();
       $valid->setRules([
        'Photo'=>'uploaded[file]|max_size[file,1024]|Is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png,image/gif,image/webP,image/jfif,image/svg]',
      ]);
    $validation = $this->validate([
      'NomPage' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'full name please'
        ],
      ],
      
      'Description' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Description required please',
        ],
      ],
      'Categorie' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Categorie required please',
        ]
      ],
    ]);
    if (!$validation) {
      return view('createChannel', ['validation' => $this->validator]);
    }
    elseif(!$valid->withRequest($this->request)->run()){
      return view('createChannel', ['validation' => $valid->getErrors()]);
    }
    else {
      $loggedInUserId=session()->get('loggedUser');
      $config['upload_path']=getcwd().'\channelImage';
      $imageName=$this->request->getFile('Photo')->getName();
      $image=$this->request->getFile('Photo');
      if(!$image->hasMoved() && $loggedInUserId){
        $image->move($config['upload_path'],$imageName);
      }
      $values=[
   'user_id'=>$loggedInUserId,
   'PageName'=>$this->request->getPost('NomPage'),
   'Description'=>$this->request->getPost('Description'),
   'Photo'=>$imageName,
   'Categorie'=>$this->request->getPost('Categorie')
      ];
      $channelMod=new \App\Models\ChannelModel();
      $channelMod->insert($values);
      $data=[
        'pageInfo'=>$values
      ];
      return view('editpage',$data);
    }
  }
  public function editPage(){
    $channelmod=new \App\Models\ChannelModel();
    $loggedInUserId=session()->get('loggedUser');
    $res=$channelmod->where('user_id',$loggedInUserId)->first();
    $data=[
        'pageInfo'=>$res,
    ];
    return view('editpage',$data);
  }
  public function editPagePost(){
    $channelmod=new \App\Models\ChannelModel();
    $valid=\config\Services::Validation();
    $valid->setRules([
     'photo'=>'uploaded[file]|max_size[file,1024]|Is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png,image/gif,image/webP,image/jfif,image/svg]',
   ]);
    $validation = $this->validate([
      'NomPage' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'full name please'
        ],
      ],
      'categorie' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Categorie required please',
        ]
      ],
      'description' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Description required please',
        ],
      ],
    ]);
    if (!$validation) {
      return view('editpage', ['validation' => $this->validator]);
    }
    elseif(!$valid->withRequest($this->request)->run()){
      return view('editpage', ['validation' => $valid->getErrors()]);
    }
    else{
      $loggedInUserId=session()->get('loggedUser');
      $config['upload_path']=getcwd().'\channelImage';
      $imageName=$this->request->getFile('photo')->getName();
      $image=$this->request->getFile('photo');
      if($imageName!=''){
        if($this->request->getPost('old_image')!=''){
          unlink('C:/wamp64/www/'.$this->request->getPost('old_image'));
          if(!$image->hasMoved() && $loggedInUserId){
            $image->move($config['upload_path'],$imageName);
          }
        }
      }
     else{
      $id=$channelmod->getId($loggedInUserId);
      $imageName=$channelmod->getImageName($id);
     }
      $id=$channelmod->getId($loggedInUserId);
      $data=[
        'user_id'=>$loggedInUserId,
        'PageName'=>$this->request->getPost('NomPage'),
        'Description'=>$this->request->getPost('description'),
        'Photo'=>$imageName,
        'Categorie'=>$this->request->getPost('categorie')
      ];
      $channelmod->update($id,$data);
      return redirect()->back()->with('success','Your Information has updated successfully');
    }
   
  }
}