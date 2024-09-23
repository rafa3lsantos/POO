<?php

class Funcionario {
    public $id;
    public $nome;
    public $cargo;
    public $salario;

    public function __construct($id, $nome, $cargo, $salario) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function calculaSalario() {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public $quantidadeDeColaboradores;

    public function __construct($id, $nome, $cargo, $salario, $quantidadeDeColaboradores) {
        parent::__construct($id, $nome, $cargo, $salario);
        $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
    }

    public function calculaSalario() {
        return $this->salario + ($this->quantidadeDeColaboradores * 100); 
    }
}

// Exemplo de uso
$funcionario = new Funcionario(1, "João", "Desenvolvedor", 3000);
$gerente = new Gerente(2, "Maria", "Gerente", 5000, 5);

echo $funcionario->nome . " - Cargo: " . $funcionario->cargo . " - Salário: R$ " . $funcionario->calculaSalario() . "\n";
echo $gerente->nome . " - Cargo: " . $gerente->cargo . " - Salário: R$ " . $gerente->calculaSalario() . "\n";

?>
