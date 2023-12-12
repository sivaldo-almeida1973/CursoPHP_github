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
    <h1>Analisador de Número Real</h1>
    <?php 
    $num = $_REQUEST['n'] ??0;

    echo"<p>Analisando o número <strong>".number_format($num, 3,",",".")."</strong> informado pelo usuário!</p>";

    $inteiro = (int)$num ;  #variavel inteiro vai receber a parte inteira
    $fracao = $num - $inteiro;   #variavel $fracao vai receber a parte fracionaria do numero
    
    echo "<ul><li>A parte inteira do número é <strong>".number_format($inteiro,0,",",".")." </strong> </li>";

    echo "<li>A parte fracionario do número é <strong>".number_format($fracao,3,",",".")." </strong> </li></ul>";
    
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>

  </main>
  
</body>
</html>