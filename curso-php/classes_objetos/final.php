<div class="titulo">Modificador Final</div>

<?php

    abstract class Abstrata {
        abstract public function metodo1();
        final public function metodo2() {
            echo "Nao vou mudar! <br>";
        }
    }

    class Classe extends Abstrata {
        public function metodo1() {
            echo "Executando metodo 1 <br>";
        }

        // public function metodo2() {
        //    echo "Extendendo metodo 2!";
        // }
    }

    $classe = new Classe;
    $classe->metodo1();
    $classe->metodo2();

    final class Unica {
        public $attr = "Valor";
    }

    $unica = new Unica();
    echo $unica->attr;

    // class Duplicata exetnds Unica {
    //    public $att2;
    //}