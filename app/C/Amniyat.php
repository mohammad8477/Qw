<?php 
namespace App\C ; 
class Amniyat
{
    public function __construct($r) 
    {
        return htmlspecialchars($r) ; 
    }
}