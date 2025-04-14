<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de constantes com aspas duplas</title>
</head>
<body>
    <?php 
        const CANAL = "Curso em Vídeo";
        echo "<p>Eu adoro o CANAL</p>";
        echo '<p>Eu adoro o CANAL</p>';
        echo "Eu adoro o " . CANAL;
        echo "Estamos no ano de " . date('Y'); 
    ?>
</body>
</html>