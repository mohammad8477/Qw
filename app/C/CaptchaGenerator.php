<?php 
namespace App\C;
use Gregwar\Captcha\CaptchaBuilder;

class CaptchaGenerator {
    public $builder;

    public function __construct() {
        $this->builder = new CaptchaBuilder();
    }

    public function generateCaptcha() {
        $this->builder->build();
    }

    public function saveCaptcha($filename) {
        $this->builder->save($filename);
    }

    public function outputCaptcha() {
        header('Content-type: image/jpeg');
        $this->builder->output();
    }

    public function getInlineImage() {
        return '<img src="data:image/jpeg;base64,' . base64_encode($this->builder->getImage()) . '"/>';
    }
}

$captcha = new CaptchaGenerator();
$captcha->generateCaptcha();
$captcha->saveCaptcha('out.jpg');
$captcha->outputCaptcha();

// نمایش تصویر به صورت inline
echo $captcha->getInlineImage();
