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
        $anoAtual = $_GET['anoAtual'] ?? 0;
        $ano = date("Y");
    ?>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="anoNascimento">Em que ano você nasceu ?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>">

            <label for="anoAtual">Quer saber sua idade em que ano ?(atualmente estamos em <?php echo"$ano";?>)</label>
            <input type="number" name="anoAtual" id="anoAtual" value="<?=$anoAtual?>">

            <input type="submit" value="Qual será minha idade ?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?php 
           $idade = $ano;
           echo "$idade";
        ?>
    </section>
</body>
</html>