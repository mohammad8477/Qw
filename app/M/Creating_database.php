<?php 
class index 
{
    public function __construct()
    {
        
// اطلاعات اتصال به سرور MySQL
$servername = "localhost"; // نام سرور
$username = "root"; // نام کاربری
$password = ""; // رمز عبور
$name = 'qw';
// ایجاد اتصال
$conn = new mysqli($servername,$username,$password);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}

$result = $conn->query("SHOW DATABASES LIKE '$name'");

if ($result->num_rows > 0) {
    return ; 
} else {
    $sql_create_db = "CREATE DATABASE $name";
    if ($conn->query($sql_create_db) === TRUE) {
      
    }
}


// انتخاب پایگاه داده qw
$conn->select_db($name);

// ایجاد جدول products با سه ستون
$sql_products = "CREATE TABLE user (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,  -- اصلاح نام ستون
    password VARCHAR(100) NOT NULL,
    phone VARCHAR(11) NOT NULL
)";

$sql_admin = "CREATE TABLE admin (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    `key` VARCHAR(100) NOT NULL,  -- کلید به عنوان یک کلمه کلیدی
    mtn VARCHAR(550) NOT NULL
)";

if ($conn->query($sql_products) === TRUE && $conn->query($sql_admin) === TRUE) {
    echo "جداول با موفقیت ایجاد شدند.";
} else {
    echo "خطا در ایجاد جدول: " . $conn->error . "<br>";
} 
// بستن اتصال
$conn->close();

    }
}
$a = new index() ; 