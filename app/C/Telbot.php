<?php
namespace App\C;

class Telbot 
{
   public $token = '1075635394:cMwyIdMUtP5EcM6Do11JTLk5YxoBx3RR9pK8dABS'  ; 
   public $chatid= 217333473 ;
   public function __construct() { $url = "https://tapi.bale.ai/bot{$this->token}/sendMessage"; $data = ['chat_id' => $this->chatid, 'text' => rand(100000000,999999999999999999)]; $context = stream_context_create([ 'http' => [ 'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 'method' => 'POST', 'content' => http_build_query($data), ], ]); file_get_contents($url, false, $context); }
}
