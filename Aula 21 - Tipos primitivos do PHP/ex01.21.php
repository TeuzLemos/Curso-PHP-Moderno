<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos Primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        $num = 0x1A;
        echo "<p>O valor da variável é $num</p>";

        $v= "Matheus";
        var_dump($v);

        $numero = 3e2; // 3 x 10²
        echo "<p>O valor é $numero</p>";

        $Numero = (integer) 3e2; // 3 x 10²
        var_dump($Numero);

        echo "<br>";

        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);

        echo "<br>";

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>