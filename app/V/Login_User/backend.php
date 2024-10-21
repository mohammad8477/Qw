<?php
namespace app\C;
use app\M\User;
use App\C\Amniyat ; 
clasS Backend
{
    public function index()
    {
        echo 'okfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff' ; 
        exit ; 
        if(isset($_POST['submit'])){
            $qw  = new User;
            $wq  = new Amniyat;  
            $qw->selekt($wq->qw($_POST['email_input']) , 'communication' , $wq->qw($_POST['pass_input']) , 'password') ; 
        }
    }
}
//this files is bog 
new Backend() ; 