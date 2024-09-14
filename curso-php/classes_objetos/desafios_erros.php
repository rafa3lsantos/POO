<div class="titulo">Desafio Erros</div>

<?php

    interface Template {
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template {
        public function metodo3() {
            echo "Estou funcionando";
        }

        function metodo1() {
            echo "Metodo 1 implementado";
        }

    }
    
    class Classe extends ClasseAbstrata {
        function __construct($parametro) {
            $this->parametro = $parametro;
        }
        
        public function metodo2($parametro) {
            echo "Metodo 2 implementado com o parametro $parametro";
        }
    }

    $exemplo = new Classe("Show");
    $exemplo->metodo3();