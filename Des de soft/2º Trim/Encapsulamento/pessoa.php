<?php
    class Pessoa{
        private $nome;

    public function setNome(string $n):void{
        $this ->nome = $n;
    }
    private function getNome(): string {
        return $this->nome;
    }

    public function mostrarinformacoes():String{
        return $this-> getNome();
    }
    
    }

     $pessoa = new Pessoa(); 
    //$pessoa ->nome = "Murilo";//definiu o valor
    //echo $pessoa ->nome;//obteve o valor
    $pessoa->setNome("Murilo");
    echo $pessoa->mostrarinformacoes();

?>