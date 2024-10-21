<?php
namespace app\C;
use app\M\User;
use App\C\Amniyat ; 
clasS Backend
{
    public function __construct()
    {
           if(isset($_POST['submit'])){
            $qw  = new User;
            $wq  = new Amniyat;  
             
            $t = $qw->selekt($wq->qw($_POST['email_input']) , 'communication' , $wq->qw($_POST['pass_input']) , 'password') ; 
            if($t== true) 
            {
                echo 'اطلعات درست است ' ;
            echo '<script>window.location.href = "index";</script>'; 


            }
            else {
    
            }
        }else {echo 'ok' ; }
    }
}
//this files is bog 
new Backend() ; 