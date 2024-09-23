<?php

    class Universidade {
        public $nomeUniversidade;
        
        public function __construct($nomeUniversidade) {
            $this->nomeUniversidade = $nomeUniversidade;
        }

    }

    class Pessoa extends Universidade {
        public $nome;

        public function __construct($nomeUniversidade, $nome) {
            parent::__construct($nomeUniversidade);
            $this->nome = $nome;
        }

        public function dizerNome() {
            return "{$this->nome}, trabalha na {$this->nomeUniversidade} \n";
        }
    }

    $pessoa1= new Pessoa("Campo Real", "Rafaela Severo");
    $pessoa2 = new Pessoa("Unicentro", "Zeca Urubu");
    echo $pessoa1->dizerNome();
    echo $pessoa2->dizerNome();


    