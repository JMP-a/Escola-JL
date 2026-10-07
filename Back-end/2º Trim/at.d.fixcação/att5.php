<?php

    function mostraridade(int $idd){
        if ($idd >= 18){
            echo "voce é de maior";
        }

        else{
        echo "voce é de menor";
        }
    }
    mostraridade(14);


?>