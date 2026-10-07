<?php
    function senhaForte (string $senha): bool{
        if (strlen($senha)<8){
            return false;
        }
        else if (!preg_match('/[A-Z]/', $senha)){
            return false;
        }
        else if (!preg_match('/[a-z]/', $senha)){
            return false;
        }
        else if (!preg_match('/[0-9]/', $senha)){
            return false;
        }
        else if (!preg_match('/[^A-Za-z0-9]/', $senha)){
            return false;
        }
        retun true;
    }
    senhaForte("24J12p08;");

    while (true){
        $senha=readline("Digite uma senha: ");
        if(senhaForte($senha)){
            echo "senha cadastrada com sucesso.";
            break;
        }
        else "Semha fraca"
    }
?>