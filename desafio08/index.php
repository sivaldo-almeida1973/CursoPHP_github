<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafios PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
     //Area de declaração ,recebe o numero do usuario
     $numero = $_GET['num'] ?? 1;
  
  ?>

    <main>
      <h1>Informe um número</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" value="<?= $numero?>">
        <input type="submit" value="Calcular Raiz">
      </form>
    </main>

    <section>
      <h2>Resultado final</h2>
      <?php 
        
        $raiz = $numero ** (1/2);
        $raizCubica = $numero ** (1/3);

        echo "<p>Analisando o <strong>número $numero</strong>, temos</p>";
        echo "<ul><li>Raiz quadrada é <strong>:" . number_format( $raiz,3, ",",".") ."</strong></li>";
        echo "<br>";
        echo"<li>Raiz cubíca é:<strong>". number_format($raizCubica,3,",", ".")."</strong></li></ul>";
      
      ?>
    </section>

  
</body>
</html>