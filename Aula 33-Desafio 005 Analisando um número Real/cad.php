<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $n = $_GET["numero"];

        $ValorAbsoluto = (int) $n;

        $ValorFracionado = $n - $ValorAbsoluto;

        $ValorF = round($ValorFracionado, 3);

        echo "<p>Analisando o número <strong>$n</strong> informado pelo usuário</p>";

        echo "<ul> 
                <li>A parte inteira do número é <strong>$ValorAbsoluto</strong></li>
                <li>A parte fracionada do número é <strong>$ValorF</strong></li>
            </ul>";
        ?>
        <p>
            <a href="javascript:history.go(-1)"><input type="submit" value="⬅️Voltar" class="voltar"></a>
        </p>
    </main>
</body>

</html>