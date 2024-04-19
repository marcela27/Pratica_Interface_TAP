<?php
require 'vendor/autoload.php';
use App\Src\IMensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviar("Rosana");

$SMS = new SMS();
$SMS->enviar("(+55) 11 94000-8906");

$Email = new Email();
$Email->enviar("jose12@gmail.com");