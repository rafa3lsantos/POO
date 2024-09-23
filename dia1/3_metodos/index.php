<?php

    class Pessoa {
        function falar() {
            echo "Ola, eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $rafael = new Pessoa;
    $joao = new Pessoa;

    $rafael -> falar();
    $joao -> falar();

    $rafael -> somar(2, 2);
    $joao -> somar(10, 12);

