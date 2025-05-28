<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Interação com Formulários</title>
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="Salario">Salário</label>
            <input type="number" name="salario" id="idsalario" value="<?=$salario?>">

            <p>Considerando o sálario mínimo de <strong>1.514,00</strong></p>

            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $quantidadeSalario = $salario / 1514.00;
            $restoSalario = $salario - round($quantidadeSalario) * 1514;
            echo "Quem recebe um sálario de R$" . $salario . " ganha " . round($quantidadeSalario) . " salários mínimos + $restoSalario";
        ?>
    </section>
</body>
</html>