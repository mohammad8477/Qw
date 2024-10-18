<?php 
namespace App\M; 
use App\M\Conect ; 
use PDO ; 
class User 
{
    public $conn ; 
    public function __construct()
    {
        $this->conn =  new Conect(); 
    }
    public function add($name , $password , $communication)
    {
   
        // اجرای استعلام INSERT
        $sql = "INSERT INTO user (username,password,communication) VALUES (:name, :password, :communication)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':communication', $communication);

        if ($stmt->execute()) {
            
        } else {
            
        }
    


    }
    public function dell()
    {
        
    // $tableName = "qw";
    // $idToDelete = 3; // شناسه رکوردی که می‌خواهید حذف شود


    // // اجرای استعلام DELETE
    // $sql = "DELETE FROM $tableName WHERE id = :id";
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(':id', $idToDelete);

    // if ($stmt->execute()) {
    //     echo "رکورد با موفقیت حذف شد.";
    // } else {
    //     echo "خطا در حذف رکورد: " . $stmt->errorInfo();
    // }

    }
    public function update()
    {}
    public function selekt ($name , $serche )
    {
        $sql = "SELECT COUNT(*) AS count FROM user WHERE $name = :x";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':x', $serche);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['count'] > 0) {
        return true  ; 
    } else {
        return false ; 
    }


    }
}