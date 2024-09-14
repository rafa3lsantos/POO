<?php

    class Humano {
        public function falar() {
            echo "Ola";
        }
    }

    $rafael = new Humano;
    $teste = 10;

    if(is_object($rafael)) {
        echo "E um objeto <br>";
    } else {
        echo "Nao e um objeto <br>";
    }

    if(is_object($teste)) {
        echo "E um objeto <br>";
    } else {
        echo "Nao e um objeto <br>";
    }

    echo get_class($rafael) . "<br>";

    if(method_exists($rafael, "falar")) {
        echo "Metodo existe";
    } else {
        echo "Metodo nao existe";
    }

    if(method_exists($rafael, "andar")) {
        echo "Metodo existe";
    } else {
        echo "Metodo nao existe";
    }