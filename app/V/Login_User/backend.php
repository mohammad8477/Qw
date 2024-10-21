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
            $qw->selekt($wq->qw($_POST['email_input']) , 'communication' , $wq->qw($_POST['pass_input']) , 'password') ; 
            echo 'اطلعات درست است ' ; 
        }else {echo 'ok' ; }
    }
}
//this files is bog 
new Backend() ; 