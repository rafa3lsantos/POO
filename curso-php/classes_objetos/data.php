<div class="titulo">Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentarData() {
        return "{$this->dia}/{$this->mes}/{$this->ano} <br>";
    }
}

$aniversario = new Data;
$aniversario->dia = 01;
$aniversario->mes = 04;
$aniversario->ano = 2007;

$diaImportante = new Data;
$diaImportante->dia = 03;
$diaImportante->mes = 11;
$diaImportante->ano = 2021;


echo $aniversario->apresentarData();
echo $diaImportante->apresentarData();