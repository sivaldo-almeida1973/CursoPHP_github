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
    <h1>Conversor de moedas</h1>
    
    <?php 
    
   
        $cotacao = 4.91;
        
        //quanto dinheiro você tem
        $real = $_REQUEST["din"] ?? 0;
        
        //Equivalencia em dolar
        $dolar = $real / $cotacao;
        
        //echo "Seus R\$".number_format($real, 2 ,",", ".") . " convertido em dolar valem US\$". //number_format($dolar,2, ",",".");
        
        //formatção de moedas com internacionalização
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " .	numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD")."</strong/</p>";
        
    
    
    
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    


  </main>


</body>
</html>