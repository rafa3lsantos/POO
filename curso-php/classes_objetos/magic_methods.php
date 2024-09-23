<div class="titulo">Metodos Magicos</div>

<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo "Construtor invocado! <br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "Morreu";
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos";
        }

        public function apresentar() {
            echo $this . "<br>";
        }

        public function __get($atrib) {
            echo "Lendo atributo nao declarado: {$atrib} <br>";
        }

        public function __set($atrib, $valor) {
            echo "Alterando atributo nao declarado: {$atrib}/{$valor}";
        }

        public function __call($metodo, $params) {
            echo "Tentando exeutar metodo '${metodo}'";
            echo ", com os parametros: ";
            print_r($params);
        }
    }

    $pessoa = new Pessoa("Ricardo", 29);
    $pessoa->apresentar(); // chamando o __toString
    echo $pessoa . "<br>"; // chamando o __toString
    $pessoa->nome = "Rafael";
    $pessoa->apresentar(); // chamando o __toString

    echo $pessoa->nomeCompleto = "Muito Legal!!!";
    // echo $pessoa->nomeCompleto;
    // echo $pessoa->nome;

    $pessoa->exec(1, 'teste', true, [1, 2, 3]);