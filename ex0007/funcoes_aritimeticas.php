<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Aritiméticas</title>
</head>
<body>
 <?php 
        // abs() valor absoluto de um num
    // $num = abs(1000);
    // print("A resposta é $num");

    // echo"<br>";
    // $num = abs(-1000);
    // print("A resposta é $num");

    // $num = abs(-3500);
    // print("A resposta é $num")

    //base_convert() converte numeros de uma base para outra
    // $num =254;
    // $res = base_convert($num,10,8);
    // echo $res ," octogonal";

    // echo"<br>";

    // $num =254;
    // $res = base_convert($num,10,16); #hexadecimal
    // echo $res ," hexadecimal";

    // echo"<br>";
    // $num =254;
    // $res = base_convert($num,10,2); #binario
    // echo $res,' binario';

    //ceil(arredonda pra cima), floor(pra baixo), round(normal)


    //hypot(hipotenusa)

    //intdiv() traz a parte unteira da divisão
    $num = 5;
    $res = intdiv($num,2);
    echo($res);

    echo "<br>";
    //min() , max()--------------------------
    $res = min(10,2,5,6,8,9,12,1,0);
    echo($res), 'min';

     //min() , max()--------------------------
    echo "<br>";
    $res = max(10,2,100,300,200);
    echo($res),'max';
  
    echo "<br>";
    //valor de PI()

    $valor_pi = pi();
    echo($valor_pi), 'valor de PI';

    echo "<br> ";
    //const de PI()  M_PI
    $valor_pi = M_PI;
    echo($valor_pi), 'contante de PI';

    //criar a potencia pow()
    echo "<br> ";
    $num = 5**2;
    echo($num);

     //criar a potencia pow() , perde a ordem de precedencia
     echo "<br> ";
     $num = pow(5,2);
     echo($num);
 
     // sin() seno, cos() coseno, tang() tangente

      //criar a potencia pow()
    echo "<br> ";

     // raiz quadrada sqrt()
     $num = sqrt(81);
     echo($num), ' raiz quadrada de 81';
      
     echo "<br> ";
     //outra maneira de calcular raiz quadrada
     $num = 81**(1/2);
     echo($num), ' raiz quadrada de 81';

     echo "<br> ";
      //outra maneira de calcular raiz cubica
      $num = 81**(1/3);
      echo($num), ' raiz cubica de 81';
 
     


 ?>


  
</body>
</html>