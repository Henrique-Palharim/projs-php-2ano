<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap');
        
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;  /* Centraliza horizontalmente */
            align-items: center;      /* Centraliza verticalmente */
            height: 100vh;
            margin: 0;
            background-color: white;
        }

        div {
            font-family: Playwrite IT Moderna;
            font-size: 3em;
            color: white;
            background-color: tomato;
            max-width: 664px;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
            box-shadow: 2px 2px 8px black;
            text-align: center;
        }

        img {
            width: 707px;
            height: auto;
            margin-top: 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    
    <div>
        <?php
            $cidade = "Bauru"; $dia = 06; $mes = "março"; $ano = 2025;
            echo "<strong>$cidade</strong>, $dia de $mes de $ano";
        ?>    
    </div>
    <img src="https://wallpaperaccess.com/full/5844499.jpg">

</body>
</html>