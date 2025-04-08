<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Pedro";
        $Nome = "Maria";

        echo "<p>É verdade que seu nome é $nome ?</p>";
        echo "<p>É verdade que seu nome é $Nome ?</p>";
        echo "É verdade que seu nome é $NOME ?";

        $salário = 2500.75;

        echo "<p>Seu salário é de R$ $salário</p>";
    ?>
</body>
</html>