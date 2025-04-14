<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings em PHP</title>
</head>
<body>
    <?php 
        $nome = "Matheus";
        $sobrenome = "Lemos";
        echo "<p>$nome $sobrenome 🖖</p>";

        $nome2 = 'Hellen';
        $sobrenome2 = 'Pret \u{1F596}';
        echo "$nome2 $sobrenome2"
    ?>
</body>
</html>