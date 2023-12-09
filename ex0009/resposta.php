<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafios PHP </title>
</head>
<body>
  <main>
    <h1>Resultado final</h1>
    <p>
      <?php
         $num = $_REQUEST["num"] ?? 0;
         $ant = $num - 1;
         $suc = $num + 1;
         echo"O numero escolhido foi <strong>$num</strong>";
         
         echo "<br>O seu <em>antecessor</em> é<strong> $ant</strong>";
         
         echo "<br>O seu sucessor é <strong>$suc</strong>";
    
      ?>

    </p>

    
      <!--voltar a pagia anterior

      <button onclick="javascript:window.location.href='index.html'">&#x2b05Voltar</button>

      -->

      <!--voltar a pagia anterior-->

      <button onclick="javascript:history.go(-1)">&#x2b05Voltar</button>
  </main>
 
  
</body>
</html>