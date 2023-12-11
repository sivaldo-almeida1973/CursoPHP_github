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
    <h1>Conversor de moedas com valor fixo</h1>
    
    <?php 
    
      //cotação vindo da API do banco central
      $inicio = date("m-d-Y", strtotime("-7 days"));#data de hoje menos 7 dias
      $fim = date("m-d-y");#data de hoje
    
    
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $fim .'\'&@dataFinalCotacao=\''. $inicio .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
      $dados = json_decode(file_get_contents($url), true); 
      
      // fim cotação vindo da api do banco central------------
    
      $cotacao = $dados["value"][0]["cotacaoCompra"];
    
      
      //quanto dinheiro você tem
      $real = $_REQUEST["din"] ?? 0;
      
      //Equivalencia em dolar
      $dolar = $real / $cotacao;
      
      //mostrar resultado
      
      $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " .	numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD")."</strong/></p>";
      
    
    
    
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    


  </main>


</body>
</html>