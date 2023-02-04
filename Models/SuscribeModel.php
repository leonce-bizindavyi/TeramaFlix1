<?php

namespace App\Models;

use CodeIgniter\Model;

class SuscribeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'subscribes';
    protected $primaryKey       = 'ID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['User','Subscriber'];
    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = '';
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
    
    public function isAbonne($user, $subscribe)
    {
        $sql= 'select * from subscribes where User='.$user .' and Subscriber='.$subscribe;
        $res = $this->db->query($sql);
        $res = $res->getResult();
        foreach($res as $res){
            $res=$res;
        }
        return $res;
    }
}
