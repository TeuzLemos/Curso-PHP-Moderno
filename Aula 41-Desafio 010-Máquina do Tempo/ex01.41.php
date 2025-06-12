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
        $ano = date("Y");
        $anoNascimento = $_GET['anoNascimento'] ?? '2000';
        $anoFuturo = $_GET['anoFuturo'] ?? $ano;
    ?>
    <header>
    </header>
    <section>
         <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="anoNascimento">Em que ano você nasceu ?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" min="1" max="<?=$ano?>" value="<?=$anoNascimento?>">

            <label for="anoFuturo">Quer saber sua idade em que ano ? (atualmente estamos em <?php echo"$ano";?>)</label>
            <input type="number" name="anoFuturo" id="anoFuturo" value="<?=$anoFuturo?>">

            <input type="submit" value="Qual será minha idade ?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?php 
          $idade = (int)$anoFuturo - (int)$anoNascimento;
          echo "<p>Quem nasceu em $anoNascimento vai ter <strong>$idade anos</strong> em $anoFuturo</p>";
        ?>
    </section>
</body>
</html>