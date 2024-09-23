<div class="titulo">Traits #01</div>

<?php

    trait validacao {
        public $a = "Valor A";

        public function validarString($str) {
            return isset($str) && $str !== ' ';
        }
    }

    trait validacaoMelhor {
        public $b = "Valor B";
        public $c = "Valor C (Privado) ";

        public function validarStringMelhor($str) {
            return isset($str) and trim($str);
        }
    }

    class User {
        use validacao, validacaoMelhor;

        public function imprimirC() {
            echo "<br>", $this->c;
        }
    }

    // var_dump(validacao->validarString(""));

    $usuario = new User;
    var_dump($usuario->validarString(' '));
    echo "<br>";
    var_dump($usuario->validarStringMelhor(' '));
    echo "<br>";
    echo $usuario->a . "<br>" . $usuario->b;
    echo $usuario->imprimirC();