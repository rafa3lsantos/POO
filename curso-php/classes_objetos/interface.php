<div class="titulo">Interface</div>

<?php

    interface Animal {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Canino extends Animal, Mamifero {
        function latir(): string;
        function correr();
    }

    interface Felino {
        function correr();
    }

    class Cachorro implements Canino {
        function respirar() {
            return "Irei usar Oxigenio!";
        }

        function latir(): string {
            return "Au Au!";
        }

        function mamar() {
            return "Mamei!";
        }

        function correr() {
            return "Vrummmmm!";
        }
    }

    $animal1 = new Cachorro;
    echo $animal1->respirar(), "<br>";
    echo $animal1->latir(), "<br>";
    echo $animal1->mamar(), "<br>";
    echo $animal1->correr(), "<br>";

    echo "<br>";
    var_dump($animal1);
    
    echo "<br>";
    var_dump($animal1 instanceof Cachorro);
    
    echo "<br>";
    var_dump($animal1 instanceof Canino);

    echo "<br>";
    var_dump($animal1 instanceof Mamifero);

    echo "<br>";
    var_dump($animal1 instanceof Animal);

    echo "<br>";
    var_dump($animal1 instanceof Felino);