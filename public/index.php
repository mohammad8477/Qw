<?php 
require_once __DIR__ . '/../botstrap.php' ; 

use App\M\User;
use App\C\Telbot; 
$token = 'eUjP7W1dFOGX8VoWPu3wlqYjAprodUo445U3Vchp'; // توکن ربات خود را اینجا وارد کنید
$chatId = 1075635394; // چت آیدی هدف
$bot = new Telbot($token, $chatId);

$qw = new User();