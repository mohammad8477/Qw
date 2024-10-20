<?php 
namespace App\M; 

use PDO; 
use PDOException;


class User 
{
    private $conn; 

    public function __construct()
    {
        
    }

    public function add($name, $password, $communication)
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=qw", 'root', ''); // اگر رمز عبور دارید، آن را وارد کنید
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "خطا در اتصال به پایگاه داده: " . $e->getMessage(); // نمایش پیام خطا
            $this->conn = null; // اطمینان از اینکه در صورت بروز خطا، $conn null باشد
        }

        // بررسی اتصال
        if ($this->conn === null) {
            echo "اتصال به پایگاه داده برقرار نیست.";
            return false;
        }

        $hashedPassword = ($password);
        // اجرای استعلام INSERT
        $sql = "INSERT INTO user (username, password, communication) VALUES (:name, :password, :communication)";
        $stmt = $this->conn->prepare($sql); 
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $hashedPassword); // استفاده از رمز عبور هش شده
        $stmt->bindParam(':communication', $communication);

        if ($stmt->execute()) {
            echo 'با موفقیت اضافه شد';
            echo '<script>window.location.href = "index";</script>'; // تغییر URL
            exit ;
            return true; // موفقیت
        } else {
            echo "خطا در اضافه کردن کاربر: " . implode(", ", $stmt->errorInfo()); // پیام خطا
            return false; // عدم موفقیت
        }
    }

    public function dell($idToDelete)
    {
        // بررسی اتصال
        if ($this->conn === null) {
            echo "اتصال به پایگاه داده برقرار نیست.";
            return false;
        }

        // اجرای استعلام DELETE
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $idToDelete);

        if ($stmt->execute()) {
            echo "رکورد با موفقیت حذف شد.";
        } else {
            echo "خطا در حذف رکورد: " . implode(", ", $stmt->errorInfo());
        }
    }

    public function update($id, $name, $password, $communication)
    {
        // بررسی اتصال
        if ($this->conn === null) {
            echo "اتصال به پایگاه داده برقرار نیست.";
            return false;
        }

        // پیاده‌سازی متد update
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET username = :name, password = :password, communication = :communication WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':communication', $communication);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "رکورد با موفقیت به‌روزرسانی شد.";
        } else {
            echo "خطا در به‌روزرسانی رکورد: " . implode(", ", $stmt->errorInfo());
        }
    }

    public function selekt($name, $serche)
    {
        // بررسی اتصال
        if ($this->conn === null) {
            echo "اتصال به پایگاه داده برقرار نیست.";
            return false;
        }

        $sql = "SELECT COUNT(*) AS count FROM user WHERE $name = :x";
        $stmt = $this->conn->prepare($sql); 
        $stmt->bindParam(':x', $serche);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['count'] > 0; 
    }
}