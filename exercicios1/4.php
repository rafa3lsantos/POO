<?php

class PessoasCadastradas {
    public $nome;
    public $endereco;
    public $email;
    public $telefone;

    public function __construct($nome, $endereco, $email, $telefone) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}

class LivrosEstoque {
    public $nome;
    public $autor;
    public $numPaginas;
    public $disponibilidadeAluguel;

    public function __construct($nome, $autor, $numPaginas, $disponibilidadeAluguel = true) {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->numPaginas = $numPaginas;
        $this->disponibilidadeAluguel = $disponibilidadeAluguel; 
    }

    public function alugarLivro() {
        if ($this->disponibilidadeAluguel) {
            $this->disponibilidadeAluguel = false; 
            echo "O livro '{$this->nome}' foi alugado \n";
        } else {
            echo "O livro '{$this->nome}' está alugado \n";
        }
    }

    public function devolverLivro() {
        if ($this->disponibilidadeAluguel) {
            $this->disponibilidadeAluguel = true;
            echo "O livro '{$this->nome}' foi devolvido \n";
        } else {
            echo "O livro '{$this->nome}' esta disponível \n";
        }
    }
}


class LivrosAndPessoas {
    public $pessoa;
    public $livro;

    public function __construct(PessoasCadastradas $pessoa, LivrosEstoque $livro) {
        $this->pessoa = $pessoa;
        $this->livro = $livro;   
    }

    public function alugarLivro() {
        echo "Pessoa: {$this->pessoa->nome}\n";
        $this->livro->alugarLivro();
    }

    public function devolverLivro() {
        echo "Pessoa: {$this->pessoa->nome}\n";
        $this->livro->devolverLivro();
    }
}

$pessoa = new PessoasCadastradas("Rafael Bagua", "Rua 123", "rafael@gmail.com", "(42)991430575");
$livro = new LivrosEstoque("Harry Potter", "JK Rowling", 1000);

$livroPessoa = new LivrosAndPessoas($pessoa, $livro);
$livroPessoa->alugarLivro(); 

$livroPessoa->alugarLivro(); 
$livroPessoa->devolverLivro();

$livroPessoa->devolverLivro(); 
