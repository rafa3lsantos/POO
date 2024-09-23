<?php

    class Car {
        public $rodas = 4;
        private $vidro = "Sem pelicula";
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula) {
            $this->vidro = $pelicula;
        }

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }
    }

    class Mecanico {
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $rafael = new Mecanico;

    $rafael->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    // Nao pode alterar pq é privado
    // $rafael->colocarPelicula($carro, "G20");

    // echo $carro->peliculaDeFabrica . "<br>";

    echo $carro->getVidro() . "<br>";

    // $carro->vidro = "teste";

    echo $carro->getPortas() . "<br>";
