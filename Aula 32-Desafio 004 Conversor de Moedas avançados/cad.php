<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
        // Cotação vinda da API do Banco Central
        $início = date("m-d-Y", strtotime("-7 days"));

        $fim = date("m-d-Y");
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $início . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"];

        // Quantos $$ você tem ?
        $real = $_REQUEST["numero"];

        //Equivalência em dólar
        $dólar = $real / $cotação;

        //Mostra o resultado
        //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".");

        //Formatação de moedas com internacionalização!
        //Biblioteca intl (Internallization PHP)

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong> </p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>
<!--
    $n = $_GET["numero"];
    $valor = $n / 5.65;
    $valorA = round($valor, 2);
    echo"<p>Seus R$ $n  equivalem a <strong>US$ $valorA </strong></p>";
    echo"<p><strong>Cotação fixa de R$5,65</strong> informada diretamente no código.</p>"; 
-->