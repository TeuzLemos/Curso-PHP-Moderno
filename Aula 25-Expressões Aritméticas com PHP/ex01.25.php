<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $res = 5 + 2 / 2;
        echo "O resultado é $res <br>"; //6

        $res2 = 50 / 2 + 3 ** 2;
        echo "O resultado é $res2 <br>"; //34

        $res3 = 50 / (2 + 3) ** 2;
        echo "O resultado é $res3 <br>"; //2
    ?>
</body>
</html>