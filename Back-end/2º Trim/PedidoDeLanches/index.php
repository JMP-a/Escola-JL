<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Lanches</title>
</head>
<style>
    .corpo {
        display:flex;
        align-items: center;
        justify-content: center;
        gap: 300px;
    }
</style>
<body>
    <div class="corpo">
        <div class="form">
        <h1>Lanchonete do Bairro</h1>
        <form method="POST">

            <label>Nome do Cliente:</label>
            <br>
            <input type="text" name="cliente" required>
            <br><br>

            <label>Lanche:</label>
            <br>
            <select name="lanche">
                <option value="Hamburguer">Hamburguer</option>
                <option value="Hot Dog">Hot Dog</option>
                <option value="Pizza">Pizza</option>
                <option value="Pastel">Pastel</option>
            </select>

            <br><br>

            <label>Quantidade:</label>
            <br>
            <input type="number" name="quantidade" min="1" required>

            <br><br>

            <button type="submit">Fazer Pedido</button>

        </form>
    </div>

    <div class="table">
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
            <tr>
                <td>Hamburguer</td>
                <td>R$ 15,00</td>
            </tr>
            <tr>
                <td>Hot-Dog</td>
                <td>R$ 10,00</td>
            </tr>
            <tr>
                <td>Pizza</td>
                <td>R$ 25,00</td>
            </tr>
            <tr>
                <td>Pastel</td>
                <td>R$ 8,00</td>
            </tr>
        </table>
    </div>
    </div>
    

    <hr>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["cliente"]) ||
        empty ($_POST["lanche"]) ||
        empty($_POST["quantidade"])
    
    ) {
        echo "preencha todos os campos";    
    }
    else {
        $cliente = $_POST["cliente"];
        $lanche = $_POST["lanche"];
        $quantidade = $_POST["quantidade"];

        $precos = [
            "Hamburguer" => 15.00,
            "Hot Dog" => 10.00,
            "Pizza" => 25.00,
            "Pastel" => 8.00
        ];


        function calcularTotal($preco, $quantidade)
        {
            return $preco * $quantidade;
        }
        function verificarFreteGratis($total)
        {
            if ($total >= 50) {
                return "Sim";
            }

            return "Não";
        }



        
        $precounitario = $precos[$lanche];
        $total = calcularTotal($precounitario, $quantidade);

        echo "cliente: $cliente" . "<br>";
        echo "lanche: $lanche" . "<br>";
        echo "preco do lanche: R$ $precounitario" . "<br>";
        echo "quantidade: $quantidade" . "<br>";
        echo "total da compra: R$ $total" . "<br>";
        echo "frete grátis " . verificarfreteGratis($total) . "<br>";
        
    }

}



?>