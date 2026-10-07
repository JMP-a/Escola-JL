<?php
    class Produto{
        private $nome = [""];
        private $preco= [""];

        public function __contruct($n, $p){
            $this->nome = $n;
            $this->preco = $p;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setPreco($p){
            $this->preco = $p;
        }
    }

    $produto1 = new Produto ("Fio lã preto - 200m", 20);
    $produto1->setNome ("Fio lã preto - 80m", 7.90);
?>