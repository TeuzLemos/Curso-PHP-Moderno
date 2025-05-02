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
            $valor = $n / 5.65;
            $valorA = round($valor, 2);
            echo"<p>Seus R$ $n  equivalem a <strong>US$ $valorA </strong></p>";
            echo"<p><strong>Cotação fixa de R$5,65</strong> informada diretamente no código.</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)"><input type="submit" value="⬅️Voltar" class="voltar"></a>
        </p>
    </main>
</body>
</html>