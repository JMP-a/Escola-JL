<?php
    $host='localhost';
    $dbName='alocacao_veiculos';
    $user='root';
    $password='1234';

    try{
        $pdo = new PDO(
            "mysql:host=$host;dbname=$name;charset=utf8mb4"
        )
    }
?>