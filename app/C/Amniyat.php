<?php 
namespace App\C ; 
class Amniyat
{
    public function qw ($r) 
    {
        return htmlspecialchars($r , ENT_QUOTES , 'UTF-8'); ; 
    }
}