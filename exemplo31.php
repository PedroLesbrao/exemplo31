<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "ESTRUTURA DE REPETIÇÃO no PHP - FOR<br><br>";
                            //para acresentar de 3 em 3 no for colocar $x+=3
        for($x = 0;$x <= 10;$x++){//condição precisa ser verdadeira para repetir
            echo "A variável X = $x<br>";
        }

    ?>
    </div>
</body>
</html>