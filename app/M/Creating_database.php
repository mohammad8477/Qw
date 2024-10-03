<?php 
class index 
{
    public function __construct()
    {
// اطلاعات اتصال به سرور MySQL
 $servername = "localhost"; // نام سرور
$username = "root"; // نام کاربری
$password = ""; // رمز عبور
$name = 'qw'
// ایجاد اتصال
$conn = new mysqli( $servername, $username, $password);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}

// ایجاد پایگاه داده qw
$sql_create_db = 'CREATE DATABASE $name';
if ($conn->query($sql_create_db) === TRUE) {
    echo "پایگاه داده با موفقیت ایجاد شد<br>";
} else {
    echo "خطا در ایجاد پایگاه داده: " . $conn->error . "<br>";
}

// انتخاب پایگاه داده qw
$conn->select_db("qw");

// ایجاد جدول products با سه ستون
$sql_products = "CREATE TABLE products (
    product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($sql_products) === TRUE) {
    echo "جدول products با موفقیت ایجاد شد<br>";
} else {
    echo "خطا در ایجاد جدول products: " . $conn->error . "<br>";
}

// بستن اتصال
$conn->close();

    }
}