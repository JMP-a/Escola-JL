<?php
    interface Veiculo{
        public function ligar();
        public function acelerar(int $vel)
        public function frear(int $vel)
    }

    class Carro implements Veiculo{
        public $marca;
        public $modelo;
        public $velocidade;
        public $ligado = false;

        public function ligar(): void{
            this->ligado = true
        }
    }
?>