<?php

    class Car {
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar() {
            echo "Vrummmm <br>";
        }
    }

    $ferrari = new Car;

    echo $ferrari -> rodas = 4 . "<br>";
    echo $ferrari -> aro . "<br>";
    echo $ferrari -> rodas ;

    $ferrari -> cor = "Azul <br>";

    echo $ferrari -> cor;
    echo $ferrari -> ligar();