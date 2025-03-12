<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crediária</title>
    <style>
        div {
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
            border: 2px solid black;
            border-radius: 10px;
            margin: 0 auto;
            font-size: 1.1em;
            padding: 20px;
            width: 400px;
            height: 400px;
            background-color: lightblue;
            box-shadow: 1px 1px 10px lightgray;
        }
    </style>
</head>
<body>
    
    <div>
        <?php
            $proprietario = "Henrique"; $locador = "ZapImoveis"; $valor = 2500.00; $porcent_reajuste = 2;
            $novo_valor = $valor * ($porcent_reajuste / 100 + 1);

            echo "<h1>Proprietário: <br><mark>$proprietario</mark></h1>";
            echo "<h1>Locador: <br><mark>$locador</mark></h1><br>";
            echo "Valor Inicial: <strong>R$ " . number_format( $valor,2) . "</strong><br><br>";
            echo "Porcentagem de Reajuste de Valor: <strong>$porcent_reajuste% ao mês</strong><br><br>";
            echo "Valor Reajustado: <strong>R$ " . number_format( $novo_valor,2) . "</strong><br>";
        ?>
    </div>

</body>
</html>