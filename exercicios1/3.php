<?php

    class Produto {
        public $nomeProduto;
        public $preco;
        public $qtdEmEstoque;

        public function __construct($nomeProduto, $preco, $qtdEmEstoque) {
            $this->nomeProduto = $nomeProduto;
            $this->preco = $preco;
            $this->qtdEmEstoque = $qtdEmEstoque;
        }

        public function atualizarEstoque($quantidade) {
            if ($quantidade <= $this->qtdEmEstoque) {
                $this->qtdEmEstoque -= $quantidade;
                return true;
            }
            return false;
        }
    }

    class ItemPedido {
        public $produto;
        public $quantidade;

        public function __construct($produto, $quantidade) {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        public function calcularTotalItem() {
            return $this->produto->preco * $this->quantidade;
        }

        public function verificarDisponibilidade() {
            return $this->produto->qtdEmEstoque >= $this->quantidade;
        }
    }

    class Pedido {
        public $itens = [];

        public function adicionarItem($item) {
            if ($item->verificarDisponibilidade()) {
                $this->itens[] = $item;
                $item->produto->atualizarEstoque($item->quantidade);
            } else {
                echo "Quantidade indisponível para o produto: {$item->produto->nomeProduto}\n";
            }
        }

        public function calcularTotal() {
            $total = 0;
            foreach($this->itens as $item) {
                $total += $item->calcularTotalItem();
            }
            return $total;
        }

        public function exibirPedido() {
            foreach ($this->itens as $item) {
                echo "{$item->produto->nomeProduto} - Quantidade: {$item->quantidade} - Total: R$" . $item->calcularTotalItem() . "\n";
            }
            echo "Valor total do pedido: R$" . $this->calcularTotal() . "\n";
        }
    
    }

    class Pagamento {
        public $pedido;
    
        public function __construct($pedido) {
            $this->pedido = $pedido;
        }
    
        public function processarPagamento($formaPagamento) {
            echo "Pagamento de R$" . $this->pedido->calcularTotal() . " realizado via $formaPagamento.\n";
        }
    }

    $produto1 = new Produto("Arroz", 10.00, 20);
    $produto2 = new Produto("Feijão", 8.50, 10);
    $produto3 = new Produto("Macarrão", 5.75, 15);

    $pedido = new Pedido();

    $item1 = new ItemPedido($produto1, 2);
    $item2 = new ItemPedido($produto2, 5);

    $pedido->adicionarItem($item1);
    $pedido->adicionarItem($item2);

    $pedido->exibirPedido();

    $pagamento = new Pagamento($pedido);
    $pagamento->processarPagamento("cartão");
    // $pagamento->processarPagamento("cheque");
    // $pagamento->processarPagamento("dinheiro");

?>
