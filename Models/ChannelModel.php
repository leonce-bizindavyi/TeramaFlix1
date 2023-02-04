<?php

namespace App\Models;

use CodeIgniter\Model;

class ChannelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pages';
    protected $primaryKey       = 'Id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id','PageName','Description','Photo','Categorie'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'Created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getId($id){
        $build=$this->db->table('pages');
        $build->select('Id');
        $build->where('user_id',$id);
        $result=$build->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }
        else{
            return false;
        }
    }
    public function getChannelInfo($id){
        $con = \config\Database::connect();
        $sql=$con->query('select * from pages,users where pages.user_id=users.id');
        $result=$sql->getResultArray();
        if(count($result)==1){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getImageName($id){
        $build=$this->db->table('pages');
        $build->select('Photo');
        $build->where('Id',$id);
        $result=$build->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }
        else{
            return false;
        }
    }
}
