<?php
namespace App\Src;
class Assasino implements Personagem{
    public function atacar($habilidade, $mana){
        $classe = 'Assasino';
        $nome = 'Kai';
        $regiao = 'Kwangya';

        echo "
        \n Classe: $classe
        \n Nome do Campeão: $nome
        \n Região: $regiao
        \n Habilidade: $habilidade
        \n Mana: $mana
        ";
    }
}