<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model{
    public function videosProfile($id)
    {
        $sql= 'select * from video where User='.$id;
        $res = $this->db->query($sql);
        $res = $res->getResult();
        return $res;
    }
}