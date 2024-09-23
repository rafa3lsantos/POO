<?php

    class Humano {
        public $idade = 29;

        public function falar() {
            echo "Ola mundo! <br>";
        }

        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarBaixo() {
            echo "lalala <br>";
        }

        public function acessaFalarBaixo() {
            $this->falarBaixo();
        }
    }

    class Programador extends Humano {
        public function acessaFalarBaixoProgramador() {
            $this->falarBaixo();
        }
    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixo();

    $rafael = new Programador;

    echo $rafael->idade . "<br>";

    $rafael->falar();
    $rafael->acessaGritar();
    $rafael->acessaFalarBaixo();
    $rafael->acessaFalarBaixoProgramador();