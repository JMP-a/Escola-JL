<?php
    class produto{
        public $nome;
        public $preco;
        public $quantidade;
    
        public function __construct($n, $p, $q){
            $this->nome = $n;
            $this->preco = $p;
            $this->quantidade = $q;
        }

        public function exibirInformacoes(){
            echo "nome: $this->nome, preço: $this->preco, quantidade: $this->quantidade";
        }

        public function calcularTotalEstoque(){
            echo $this->preco*$this->quantidade;
        }

    }

    $produto1 = new produto("Fio lã Azul - 200m", 20, 250);
    $produto1->exibirInformacoes();
    echo "<br>";
    $produto1->calcularTotalEstoque();
    echo "<br>";
    
    
    $produto2 = new produto("Fio lã Amarelo - 200m", 20, 250);
    $produto2->exibirInformacoes();
    echo "<br>";
    $produto2->calcularTotalEstoque();
    echo "<br>";
    
    $produto3 = new produto("Fio lã Vermelho - 200m", 20, 250);
    $produto3->exibirInformacoes();
    echo "<br>";
    $produto3->calcularTotalEstoque();
    echo "<br>";

    $produto4 = new produto("Fio lã Roxo - 80m", 7.90, 250);
    $produto4->exibirInformacoes();
    echo "<br>";
    $produto4->calcularTotalEstoque();
    echo "<br>";

    $produto5 = new produto("Fio lã Verde - 80m", 7.90, 250);
    $produto5->exibirInformacoes();
    echo "<br>";
    $produto5->calcularTotalEstoque();
    echo "<br>";

?>