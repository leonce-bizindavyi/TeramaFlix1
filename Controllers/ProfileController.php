<?php
namespace App\Controllers;
use App\Models\UtilisateurModel;
use App\Models\ProfileModel;
class ProfileController extends BaseController
{
    public $profileModel;
    public $userModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->userModel = new UtilisateurModel();
    }
    public function Profile()
    {
        $user_id=session()->get('loggedUser');
        if($this->request->getVar('channel')){
            $channel = $this->request->getVar('channel');
            $rs['user']=$this->userModel->getUserInfo($user_id);
            $rs['channel']=$this->userModel->getUserInfo($channel);
            $rs['video'] = $this->profileModel->videosProfile($channel);
        }else{
            $rs['user']=$this->userModel->getUserInfo($user_id);
            $rs['channel']=$this->userModel->getUserInfo($user_id);
            $rs['video'] = $this->profileModel->videosProfile($user_id);
        }
        return view('Profile',$rs);
    }
}