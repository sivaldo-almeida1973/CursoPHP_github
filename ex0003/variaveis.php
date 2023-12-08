<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Variaveis tipos primitivos</h1>

  <?php 
     //tipos primitivos escalares---------------
     //float,double ou real
     //
     /*
     $nome = "sivaldo"; #string
     $idade = 25; #int ou integer
     $peso = 85.9; #float
     $casado = true; #boolean ou bool
     */

     $num = 300;
    $num = 0x1A; #26 exadecimal(0x)
    $num = 0b1011; #11  binario(0b)
     $num = 010;  # 8   (010)octal

     echo"O valor da variavel é $num";

     echo '<br>';
    //var_damp (mostra o tipo) da variavel------------------------
    $v = 300;
    $vv = 300.011;
    $vvv = 3e2;  # 3*10²

    var_dump($v); #mostra o tipo
    echo '<br>';
    var_dump($vv); #mostra o tipo
    echo '<br>';
    var_dump($vvv); #mostra o tipo

    echo '<br>';
    $num = '950';
    var_dump($num);

    echo '<br>';
    $num = (int)'950';
    var_dump($num);


    echo '<br>';
    $num = (float)'950';
    var_dump($num);

    echo '<br>';
    $casado = true; # 1  false= vazio
    var_dump($casado);  
    echo"O valor para casado é $casado";

    echo '<br>';
    //Tipos compostos  array, object
     echo "<h1>tipos</h1>";
     $vetor = [10,20,30,40,50,60];
     var_dump($vetor);


     echo '<br>';
    //Tipos compostos  array, object
     echo "<h1>tipos</h1>";
     $vetor = ['Maria',20.455,3,false,50,60];
     var_dump($vetor);

    echo '<br>';
    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa();
    var_dump($p);


    //tipos especiais null, resource, callabe, mixed





  
  ?>
  
</body>
</html>