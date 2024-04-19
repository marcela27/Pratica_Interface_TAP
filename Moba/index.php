<?php
require 'vendor/autoload.php';
use App\Src\Personagem;
use App\Src\Guerreiro;
use App\Src\Mago;
use App\Src\Arqueiro;


$Guerreiro = new Guerreiro();
$Guerreiro->Atacar("Espada dourada", "70");

$Mago = new Mago ();
$Mago->Atacar("Chuva de prata", "100");

$Arqueiro = new Arqueiro();
$Arqueiro->Atacar("Flecha mortal", "80");
