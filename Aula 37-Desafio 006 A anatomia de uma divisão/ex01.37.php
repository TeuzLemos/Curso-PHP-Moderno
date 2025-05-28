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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="dividendo">dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">

            <label for="divisor">divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">

            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
            echo "<p>O dividendo é <strong>$dividendo</strong></p>";
            echo "<p>O divisor é <strong>$divisor</strong></p>";
            echo "<p>O resultado é " . number_format($resultado, 2);
            echo "<p>O resto é $resto </p>";
        ?>
    </section>
</body>
</html>