<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <?php 
        $valorAbsoluto = abs(-2000);
        print("A respota é $valorAbsoluto <br>");

        $BaseConvert = base_convert(254, 10, 16);
        print("A respota é $BaseConvert <br>");

        $intdiv = intdiv(5, 2);
        print("A respota é $intdiv <br>");

        $max = max(5, 2, 7, 5, 1, 9, 7, 6);
        print("A respota é $max <br>");

        $min = min(5, 2, 7, 5, 1, 9, 7, 6);
        print("A respota é $min <br>");

        $pi = pi();
        print("A respota é $pi <br>");

        $pow = pow(5, 2);
        print("A respota é $pow <br>");

        $sqrt = sqrt(81);
        print("A resposta é $sqrt <br>");

    ?>
</body>
</html>