<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;
    $turca = new Animal;

    if($marcos instanceof Humano) {
        echo "Marcos é um humano <br>";
    } else {
        echo "O Marcos nao é um humano <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca é um humano <br>";
    } else {
        echo "A Turca nao é um humano <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Professor) {
        echo "Pedro é um Professor <br>";
    } else {
        echo "Pedro nao é um Professor <br>";
    }

    if($pedro instanceof Humano) {
        echo "Pedro é um humano <br>";
    } else {
        echo "Pedro nao é um humano <br>";
    }

    if($turca instanceof Professor) {
        echo "Turca é um Profeessor <br>";
    } else {
        echo "A Turca nao é um Professor <br>";
    }