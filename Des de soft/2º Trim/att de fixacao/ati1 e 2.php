<?php

    
    class Produto{
        private $preco;
        private $nome;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setNome(string $n): void{
        $this->nome = $n;
    }

    public function getPreco(): float{
        return $this->preco;
    }
    
    
    public funtion setNome(float $v): void{
        $this->preco = $v;
    }

    $produto1 = new produto();
    $produt1-> setNome("celulahh");
    $produt1-> setPreco(10.5);
    echo $produt1->getNome();
    echo "<br>";
    


?>