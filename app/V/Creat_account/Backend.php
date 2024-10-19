<?php
namespace App\V;

use App\M\User; // اصلاح نام فضای نام
use App\C\Amniyat; // اصلاح نام فضای نام

class Backend extends User
{ 
    public function __construct()
    { 
        if (isset($_POST['submit'])) {
            // اعتبارسنجی ورودی‌ها
            $name = isset($_POST['name-input']) ? trim($_POST['name-input']) : '';
            $phone = isset($_POST['phone-input']) ? trim($_POST['phone-input']) : '';
            $password = isset($_POST['password-input']) ? trim($_POST['password-input']) : '';
            $repeatPassword = isset($_POST['repeat-input']) ? trim($_POST['repeat-input']) : '';

            // بررسی اینکه آیا فیلدها خالی نیستند
            if ($name === '' || $phone === '' || $password === '' || $repeatPassword === '') {
                echo "لطفا همه فیلدها را پر کنید.";
                return;
            }

            // بررسی مطابقت رمز عبور
            if ($password !== $repeatPassword) {
                echo "رمز عبور و تکرار آن مطابقت ندارد.";
                return;
            }
            $qw = new Amniyat ; 
            // استفاده از متد add
            $this->add($qw->qw($name), $qw->qw($repeatPassword), $qw->qw($phone), $qw->qw($password));

        }
    }
}

new Backend();