<?php
namespace App\C;

class Telbot 
{
    private $token;
    private $chatId;

    public function __construct($token, $chatId) 
    {
        $this->token = $token;
        $this->chatId = $chatId;
        $this->sendMessage("پیام شما به چت آیدی $chatId ارسال شد!");
    }

    private function sendMessage($message) 
    {
        $url = "https://tapi.bale.ai/bot{$this->token}/sendMessage";
        $data = [
            'chat_id' => $this->chatId,
            'text' => 'opvsjdvpoidsjvdsoivdsjvodsivsd',
        ];

        // ارسال درخواست به TAPI
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // بررسی نتیجه
        if ($result === FALSE) {
            die('Error occurred while sending message.');
        }
    }
}

// استفاده از کلاس Telbot
