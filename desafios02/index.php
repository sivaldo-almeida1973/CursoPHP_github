<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP 02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php 
         $min = 0;
         $max = 100;
         $num = mt_rand($min, $max);

         echo"<p>Gerando um numero aleatorio entre: $min e $max </p>";
         echo"O numero gerado foi: $num";
    
    
    ?>

    <!--garar um botao com comando javascript-->
    <button onclick="javascript:document.location.reload()">&#x1f504; Gerar Número</button>

  </main>
  
  
</body>
</html>