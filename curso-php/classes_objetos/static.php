<div class="titulo">Membros Estaticos</div>

<?php

    class A {
        public $naoStatic = "Variavel de instancia";
        public static $static = "Variavel de classe (estatica)";

         public function mostrarA() {
            echo "Nao estatica = {$this->naoStatic} <br>";
            // Try 1

            // echo "Estatica = {$this->static} <br>";
            // Try 2

            // echo "Estatica = {self::$static} <br>";
            // Try 3 

            echo "Estatica = " . self::$static . "<br>";
        }

        public static function mostrarStaticA() {
            // echo "Nao estatica = {$this->naoStatic} <br>";
            // echo "estatica = {$static} <br>";
            echo "Estatica = " . self::$static . "<br>";
        }
    }

// $objetoA = new A();
// $objetoA->mostrarA();
// $objetoA->mostrarStaticA(); // nao e a forma ideal

echo A::$static, "<br>"; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = "Alterando membro de classe"; // acessar diretamente pela classe
echo A::$static, "<br>"; // acessar diretamente pela classe