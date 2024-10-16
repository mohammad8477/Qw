<?php
namespace App\V\Creat account;
use app\M\User
class Backend extends User
{

    public function __construct()
    {
        if(isset($_POST['submit'])){
            if(htmlspecialchars($_POST['captcha-input'] , ENT_QUOTES  , 'UTF-8')== 1){
            $this->add(htmlspecialchars($_POST['repeat-input'] , ENT_QUOTES   , 'UTF-8')) ; 
            $this->add(htmlspecialchars($_POST['password-input'] , ENT_QUOTES , 'UTF-8')) ; 
            $this->add(htmlspecialchars($_POST['phone-input'] , ENT_QUOTES    , 'UTF-8')) ; 
            $this->add(htmlspecialchars($_POST['name-input'] , ENT_QUOTES     , 'UTF-8')) ; 
        }}
    }
}