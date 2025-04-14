<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Heredoc</title>
</head>
<body>
    <?php 
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< Teste
        <pre>
            Olá galera do $canal!
                    Tudo bem com vocês ?
                Como está sendo esse ano de $ano ?
            Abraços!
        </pre>
        Teste;

        echo <<< 'Teste'
        <pre>
            Olá galera do $canal!
                    Tudo bem com vocês ?
                Como está sendo esse ano de $ano ?
            Abraços!
        </pre>
        Teste;
    ?>
</body>
</html>