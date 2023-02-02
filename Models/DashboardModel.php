<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

function get_count(){
        //SQL for Counting rows in a query
        $sql = "SELECT COUNT(ID) as Count FROM users
        ";
    //Execute the query and assign the result to the $row variable
      $result = $this->db->query($sql);
       $row = $result->getRow();
   //Get the count from the $row variable and return the result to the caller
     return $count = $row->Count;   
 }
 function mail_Read(){
 
    $sql = "SELECT COUNT(ID) as Count FROM messages
    where read_mail= false";
  $result = $this->db->query($sql);
   $row = $result->getRow();
 return $count = $row->Count;   
}

function users_recent(){
 $builder = $this->db->table('users');
 $builder->select('Nom,Photo');
 $builder->orderBy("Create_at", "DESC");
 $builder->limit(5);
 $query = $builder->get();
 return $query;
}
function messages_recent(){
  /*$sql="SELECT Nom ,messages.Create_at,Body from messages,users 
  WHERE messages.FromA=users.ID
  ORDER BY messages.Create_at DESC LIMIT 5";*/
  $builder = $this->db->table('users');
  $builder->select('*');
  $builder->JOIN('messages',"messages.FromA=users.ID");
  $builder->orderBy("messages.Create_at", "DESC");
  $builder->limit(5);
  $query = $builder->get();
  return $query;
}
function video_recent(){
  $builder = $this->db->table('posts');
  $builder->select('*');
  $builder->orderBy("Created_at", "DESC");
  $builder->limit(5);
  $query = $builder->get();
  return $query;
 }

 function get_countVideo(){
    //SQL for Counting rows in a query
    $sql = "SELECT COUNT(ID) as Count FROM posts
    ";
//Execute the query and assign the result to the $row variable
  $result = $this->db->query($sql);
   $row = $result->getRow();
//Get the count from the $row variable and return the result to the caller
 return $count = $row->Count;   
}

public function Estime(){
$Year=date("Y");
$sql="SELECT MONTH(CURRENT_TIMESTAMP)";
$result = $this->db->query($sql);
$row = $result->getRow();

$tab = array(array(1,1,31) ,array(2,1,29),array(3,1,31),
       array(4,1,30),array(5,1,31),(array(6,1,30)),
       array(7,1,31) ,array(8,1,31),array(9,1,30),
       array(10,1,31),array(11,1,30),(array(12,1,31)));
       foreach($row  as $month){
       $tabstat=[];
       switch($month){

             case 1:
             $debut=$Year.'/01/0'.$tab[0][1] ; 
             $fin=$Year.'/01/'.$tab[0][2];
           
             break;
             case 2:
             $debut=$Year.'/02/0'.$tab[1][1]; 
             $fin=$Year.'/02/'.$tab[1][2];

             break;
             case 3:
             $debut=$Year.'/03/0'.$tab[2][1] ; 
             $fin=$Year.'/03/0'.$tab[2][2];

             break;
             case 4:
                $debut=$Year.'/04/0'.$tab[3][1] ; 
                $fin=$Year.'/04/'.$tab[3][2];
   
               
                break;
                case 5:
                $debut=$Year.'/05/0'.$tab[4][1] ; 
                $fin=$Year.'/05/'.$tab[4][2];

                break;
                case 6:
                $debut=$Year.'/06/0'.$tab[5][1] ; 
                $fin=$Year.'/06/'.$tab[5][2];
              
                break;
                case 7:
                    $debut=$Year.'/07/0'.$tab[6][1]; 
                    $fin=$Year.'/07/'.$tab[6][2];
                   
                    break;
                    case 8:
                    $debut=$Year.'/08/0'.$tab[7][1] ; 
                    $fin=$Year.'/08/'.$tab[7][2];

                    break;
                    case 9:
                    $debut=$Year.'/09/0'.$tab[8][1] ; 
                    $fin=$Year.'/09/'.$tab[8][2];

                    break;
                    case 10:
                       $debut=$Year.'/10/0'.$tab[9][1] ; 
                       $fin=$Year.'/10/'.$tab[9][2];
                      
                       break;
                       case 11:
                       $debut=$Year.'/11/0'.$tab[10][1] ; 
                       $fin=$Year.'/11/'.$tab[10][2];
                  
                       break;
                       case 12:
                       $debut=$Year.'/12/0'.$tab[11][1] ; 
                       $fin=$Year.'/12/'.$tab[11][2];
                    
                       break;
             default:
             echo "Your favorite color is neither red, blue, nor green!";
       }
     
       
     }

     $nombre  = "SELECT distinct (count(ID) ) from users  WHERE Create_at between '".$debut."' and   '".$fin."' ";
     $result = $this->db->query($nombre);
    $row = $result->getRow();
    return $row;
    }

    function chart_data(){
   
       $Year=date("Y"); 
      $sql="SELECT MONTH(CURRENT_TIMESTAMP)";
      $result = $this->db->query($sql);
      $row = $result->getRow();
      
      $tab = array(array(1,1,31) ,array(2,1,29),array(3,1,31),
             array(4,1,30),array(5,1,31),(array(6,1,30)),
             array(7,1,31) ,array(8,1,31),array(9,1,30),
             array(10,1,31),array(11,1,30),(array(12,1,31)));
             foreach($row  as $month){
             $tabstat=[];
             switch($month){
      
                   case 1:
                   $nomb=$tab[0][2];
                 
                   break;
                   case 2: 
                   $nomb=$tab[1][2];
                   break;
                   case 3:
                   $nomb=$tab[2][2];
                   break;
                   case 4:
                      $nomb=$tab[3][2];
                      break;
                      case 5:
                      $nomb=$tab[4][2];
                      break;
                      case 6:
                      $nomb=$tab[5][2];
                      break;
                      case 7:
                          $nomb=$tab[6][2];
                         
                          break;
                          case 8:
                          $nomb=$tab[7][2];
                           
                          break;
                          case 9:
                          $nomb=$tab[8][2];
                        
                          break;
                          case 10:
                             $nomb=$tab[9][2];
                             break;
                             case 11:
                             $nomb=$tab[10][2];
                             break;
                             case 12:
                             $nomb=$tab[11][2];
                             break;
                   default:
                   echo "Your favorite color is neither red, blue, nor green!";
             }
       }
       $datelimite=1;
       for($i=0;$i<=$nomb;$i++){

        if($datelimite<=$nomb){
          if($datelimite<10 && $month<10){
            $debut=$Year."/0".$month."/0".$datelimite." 00:00:00";
            $fin=$Year."/0".$month."/0".$datelimite." 23:59:59";
          }
         else if($datelimite<10){
            $debut=$Year."/0".$month."/0".$datelimite." 00:00:00";
            $fin=$Year."/0".$month."/0".$datelimite." 23:59:59";
          }
          elseif($month<10){
            $debut=$Year."/0".$month."/".$datelimite." 00:00:00";
            $fin=$Year."/0".$month."/".$datelimite." 23:59:59";
          }
  
          else{
          $debut=$Year."/".$month."/".$datelimite." 00:00:00";
          $fin=$Year."/".$month."/".$datelimite." 23:59:59";
          }

      $nombre= "SELECT COUNT(ID) AS count FROM users WHERE Create_at between '".$debut."'AND '".$fin."'";
      $result = $this->db->query($nombre);
      $row = $result->getRow();
    
     $tabstat[$i]=$row;
        
     
    }
        $datelimite++;
       }
       //$tabstat 
      return $tabstat;
   
   }
   
   function Estime_video(){
    $Year= date('Y');
    $sql="SELECT MONTH(CURRENT_TIMESTAMP)";
    $result = $this->db->query($sql);
    $row = $result->getRow();
    
    $tab = array(array(1,1,31) ,array(2,1,29),array(3,1,31),
           array(4,1,30),array(5,1,31),(array(6,1,30)),
           array(7,1,31) ,array(8,1,31),array(9,1,30),
           array(10,1,31),array(11,1,30),(array(12,1,31)));
           foreach($row  as $month){
           $tabstat=[];
           switch($month){
    
            case 1:
              $debut=$Year.'/01/0'.$tab[0][1] ; 
              $fin=$Year.'/01/'.$tab[0][2];
            
              break;
              case 2:
              $debut=$Year.'/02/0'.$tab[1][1]; 
              $fin=$Year.'/02/'.$tab[1][2];
 
              break;
              case 3:
              $debut=$Year.'/03/0'.$tab[2][1] ; 
              $fin=$Year.'/03/0'.$tab[2][2];
 
              break;
              case 4:
                 $debut=$Year.'/04/0'.$tab[3][1] ; 
                 $fin=$Year.'/04/'.$tab[3][2];
    
                
                 break;
                 case 5:
                 $debut=$Year.'/05/0'.$tab[4][1] ; 
                 $fin=$Year.'/05/'.$tab[4][2];
 
                 break;
                 case 6:
                 $debut=$Year.'/06/0'.$tab[5][1] ; 
                 $fin=$Year.'/06/'.$tab[5][2];
               
                 break;
                 case 7:
                     $debut=$Year.'/07/0'.$tab[6][1]; 
                     $fin=$Year.'/07/'.$tab[6][2];
                    
                     break;
                     case 8:
                     $debut=$Year.'/08/0'.$tab[7][1] ; 
                     $fin=$Year.'/08/'.$tab[7][2];
 
                     break;
                     case 9:
                     $debut=$Year.'/09/0'.$tab[8][1] ; 
                     $fin=$Year.'/09/'.$tab[8][2];
 
                     break;
                     case 10:
                        $debut=$Year.'/10/0'.$tab[9][1] ; 
                        $fin=$Year.'/10/'.$tab[9][2];
                       
                        break;
                        case 11:
                        $debut=$Year.'/11/0'.$tab[10][1] ; 
                        $fin=$Year.'/11/'.$tab[10][2];
                   
                        break;
                        case 12:
                        $debut=$Year.'/12/0'.$tab[11][1] ; 
                        $fin=$Year.'/12/'.$tab[11][2];
                        
                           break;
                 default:
                 echo "Your favorite color is neither red, blue, nor green!";
           }
      
         }
    
         $nombre  = "SELECT distinct (count(ID) ) from posts WHERE Created_at between '".$debut."' and   '".$fin."' ";
         $result = $this->db->query($nombre);
        $row = $result->getRow();
        return $row;
   

}


}

?>
