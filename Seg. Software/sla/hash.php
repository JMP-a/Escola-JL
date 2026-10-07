<?php
    $senha = "24051211";

    $cost = [
        'cost' => 12
    ];

    $hash = password_hash($senha, PASSWORD_BCRYPT, $cost);

    //echo "Hash gerado:" . $hash;

    $SenhaDigitada = "24051211";

    if (password_verify($SenhaDigitada, $hash)){
        echo "entrou";
    }
    else{
        echo "senha incorreta";
    }
?>