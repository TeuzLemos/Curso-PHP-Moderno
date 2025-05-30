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
        $numero = $_GET['numero'] ?? 0;
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="Número">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </section>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo"<p> Analisando o <strong>número $numero</strong> temos: </p>";
            echo"<on>
                    <li>A sua raiz quadrada é
                    <li>A sua raiz cúbica é
                </on>";
        ?>
    </section>
</body>
</html>