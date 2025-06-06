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
        $anoNascimento = $_GET['anoNascimento'] ?? 0;
        $anoFuturo = $_GET['anoFuturo'] ?? 0;
        $ano = date("Y");
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="anoNascimento">Em que ano você nasceu ?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>">

            <label for="anoFuturo">Quer saber sua idade em que ano ? (atualmente estamos em <?php echo"$ano";?>)</label>
            <input type="number" name="anoFuturo" id="anoFuturo" value="<?=$anoFuturo?>">

            <input type="submit" value="Qual será minha idade ?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?php 
          $idade = (int)$anoFuturo - (int)$anoNascimento;
          echo "Quem nasceu em $anoNascimento vai ter <strong>$idade anos</strong> em $anoFuturo";
        ?>
    </section>
</body>
</html>