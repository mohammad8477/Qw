<?php
namespace app\V\Login_user;
use app\M\User;
class Backend
{
    public function index()
    {
        if(isset($_POST['submit'])){
            $qw  = new User(); 
            $qw->selekt() ; 
        }
    }
}
//this files is bog 