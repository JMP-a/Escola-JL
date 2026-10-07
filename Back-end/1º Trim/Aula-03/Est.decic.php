<?php
    $idade = 105;
    $TemCarteira = false;

    if ($idade >= 18 && $TemCarteira == true){
        echo "Pode dirigir";
    }
    else {
        echo "Não pode dirigir";
    }
    echo "<br>";

    $dia = "sabado";
    
    if ($dia == "sabado" || $dia == "domingo") {
        echo "final de semana";
    }
    else{
        echo "Dia de semana";
    }
    Echo "<br>";

    $nota = 8;

    if ($nota >= 7) {
        echo "passou";
    }
    elseif ($nota >= 5) {
        echo "recuperação";
    }
    else{
        echo "nao passou";
    }
    echo "<br>";

    #operador ternário

    $idade1 = 15;
    $mensagem = ($idade1 >= 18) ? "Maior de idade" : "Menor de idade";

    echo $mensagem;
?>