<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    //INSERT INTO `post`(`ID`, `Lastname`, `Firstname`, `Photo`, `Categorie`, `Joined`, `Status`) 
    protected $table      = 'post';
    protected $primaryKey = 'ID';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['Lastname','Firstname','Categorie','Joined','Status'];
    //protected $useTimestamps = true;
    protected $createdField  = 'Create_at';
    //protected $updatedField  = 'updated_at';
    

        
}
?>