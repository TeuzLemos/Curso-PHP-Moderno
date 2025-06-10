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
        $minimo = 1518.00;
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="Salario">Salário</label>
            <input type="number" name="salario" id="idsalario" value="<?=$salario?>" step="0.01">

            <p>Considerando o sálario mínimo de <strong><?=number_format($minimo, 2, ",", ".")?></strong></p>

            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $quantidadeSalario = intdiv($salario, $minimo);
            $restoSalario = $salario % $minimo;

            echo "<p>Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha $quantidadeSalario salários mínimos + R\$ " . number_format($restoSalario, 2, ",", ".") . ".</p>";
        ?>
    </section>
</body>
</html>