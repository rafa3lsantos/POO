<div class="titulo">Primeira Classe</div>

<?php

    class Cliente {
        // atributos 
        public $nome = "Anonimo";
        public $idade = 18;

        // metodos
        public function apresentar(){
            return "Nome: {$this->nome} Idade: {$this->idade}";
        }
    } 

    $c1 = new Cliente();
    echo $c1->nome . "<br>";
    $c1->nome = "Rafael Bagua";
    echo $c1->nome . "<br>";
    $c1->idade = 42;
    
    $c2 = new Cliente;
    $c2->nome = "Gabriel";
    $c2->idade = 43;

    echo $c1->apresentar() . "<br>";
    echo $c2->apresentar();