<div class="titulo">Visibilidade</div>

<?php

    class A {
        public $publico = "Publico";
        protected $protegido = "Protegido";
        private $privado = "Privado";

        public function mostrarA() {
            echo "Class A) Publico = {$this->publico} <br>";
            echo "Class A) Protegido = {$this->protegido} <br>";
            echo "Class A) Privado = {$this->privado} <br>";
        }

        protected function vaiPorHeranca() {
            echo "Serei transmitido por heranca! <br>";
        }

        private function naoMostrar() {
            echo "Nao vou imprimir <br>";        }
    }

    $a = new A;
    $a->mostrarA();
    // $a->naoMostrar();

    echo "Fim!";

    class B extends A {
        public function mostrarB() {
            echo "Class B) Publico = {$this->publico} <br>";
            echo "Class B) Protegido = {$this->protegido} <br>";
            echo "Class B) Privado = {$this->privado} <br>";

            parent::vaiPorHeranca();
        }
    }
    echo "<hr>";
    $b = new B();
    $b->mostrarB();