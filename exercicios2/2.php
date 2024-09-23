<?php
class Objeto {
    public $largura;
    public $altura;      

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
}

class Triangulo extends Objeto {
    public $tipo;

    public function __construct($largura, $altura, $tipo) {
        parent::__construct($largura, $altura);
        $this->tipo = $tipo;
    }

    public function calcularArea() {
        return $this->largura * $this->altura / 2;
    }
}

class Retangulo extends Objeto {
    public function __construct($largura, $altura) {
        parent::__construct($largura, $altura);
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function verificarQuadrado() {
        return $this->largura === $this->altura;
    }
}

$triangulo = new Triangulo(10, 20, "Isosceles");
$retangulo = new Retangulo(8, 8);

echo "Área do triângulo: " . $triangulo->calcularArea() . "\n";
echo "Tipo do triângulo: " . $triangulo->tipo . "\n";

echo "Área do retângulo: " . $retangulo->calcularArea() . "\n";
echo "O retângulo é quadrado? " . ($retangulo->verificarQuadrado() ? "Sim" : "Não") . "\n";
?>
