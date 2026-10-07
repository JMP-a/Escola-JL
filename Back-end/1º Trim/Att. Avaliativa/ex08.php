<?php
    $valor = 153;

    if ($valor >= 100){
        $desconto = ($valor * 10) / 100;
        $ValorFinal = $valor - $desconto;

        echo $ValorFinal;
    }
    else{
        echo $valor;
    }
?>