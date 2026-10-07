<?php

//Crie uma classe Aluno.

//Atributos privados:
   // nome
  //  nota
//Regras:
  //  a nota deve ser entre 0 e 10
//Métodos:
    //setters e getters

//Depois:
  //  cadastre um aluno
    //exiba os dados do aluno
    //altere os dados e depois mostre novamente

    class aluno{
        private $nome;
        private $nota;

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $n): void{
        $this->nome = $n;
    }

    public function getNota(): float|null{
        retrun $this->nota;
    }

    public function setNota(float $p):void{
        if($p > 10 || $p < 0){
            echo "erro";
        }
        else{
            $this->nota = $p;
        }
    }

    



    }





    ?.