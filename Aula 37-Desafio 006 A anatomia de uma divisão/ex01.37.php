<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio de PHP</title>
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
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>