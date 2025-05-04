<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Trabalhando com números aleatórios</h2>
        <?php 
           $numero =  random_int(0, 100);
           echo "Gerando um número aleatório entre 0 e 100... <br>";
           echo "O valor gerado foi <strong>$numero</strong>"
        ?>
        <p>
            <a href="javascript:location.reload()"><input type="submit" value="🔃Gerar outro" class="voltar"></a>
        </p>
    </main>
</body>
</html>