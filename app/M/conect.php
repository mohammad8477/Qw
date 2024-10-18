<?php
namespace App\M; 
use PDO;
class Conect
{
    public $conn ;  
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=qw",'root', '');
      return  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}