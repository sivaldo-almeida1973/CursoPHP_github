<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    //Capiturando os dados do Formulario Retroalimentado
    $minimo = 1_421.00;
    $salario = $_GET['sal'] ?? $minimo;

   
    ?>
  <main>
    <h1>Informe seu salário</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
        <p>Considerando o salário mínimo de<strong>  R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
  
  
    </form>
   
  </main>

  <section id="resultado">
    

    <h2>Resultado Final</h2>

    <?php 
    //faz o calulo de quantos salarios minimos recebe 
       $tot = intdiv($salario, $minimo);
       $dif = $salario % $minimo;

       echo"<p>Você ganha R\$".number_format($salario, 2, ",",".").' Reais',"($tot salarios minimos + R\$ ".number_format($dif, 2, ",", ".") ." reais).</p>";
      
    ?>

   
  </section>

  
</body>
</html>