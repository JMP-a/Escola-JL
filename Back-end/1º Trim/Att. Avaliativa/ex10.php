<?php
    $x = 4;
    $y = 2;
    $operador = "+";

    if ($operador == "+"){
        $calc = $x + $y;
        echo $calc;
    }
    elseif ($operador == "-"){
        $calc = $x - $y;
        echo $calc;
    }
    elseif ($operador == "*"){
        $calc = $x * $y;
        echo $calc;
    }
    elseif ($operador == "/"){
        $calc = $x / $y;
        echo $calc;
    }
    else{
        echo "Calculo indip."
    }
?>