<div class="titulo">Traits #02</div>

<?php

    trait validacao {
        public function validarString($str) {
            return isset($str) and $str !== "";
        }
    }

    trait validacaoMelhor {
        public function validarString($str) {
            return isset($str) and trim($str);
        }
    }

    class User {
        use validacao, validacaoMelhor {
            validacaoMelhor::validarString insteadOf validacao;
            // validacao::validarString inteadOf validacaoMelhor;

            validacao::validarString as validarSimples;
        }
    }

    $usuario = new User;
    var_dump($usuario->validarString(" "));
    echo "<br>";
    var_dump($usuario->validarSimples(" "));
