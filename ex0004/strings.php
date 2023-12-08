<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
  <?php 
     //*******4 tipos de strings **********/
     // aspas simpes(single quoted) 
     //aspas duplas(double quoted) existe interpretação do conteudo
     //concatenation operator(.)

    //  $nome = "sivaldo";
    //  $nome = 'sivaldo';

    //  echo'Olá $nome';
    //  echo '<br>';
    //  echo "Olá $nome"


    //  echo"PHP\u{1F418}";
    //  echo "<br>";
    //  echo'PHP\u{1F418}'; #não interpreta, somente escreve como esta
    $nome = "Sivaldo";
    $sobreNome = "Vieira";

    echo"$nome $sobreNome \u{1F596}";
    //echo'$nome $sobreNome \u{1F596}'; #errado


    echo "<br>";
    const ESTADO = "PA";
    echo"Moro no estado ".ESTADO;


    echo "<br>";
    const CANAL = "CURSO EM VIDEO \u{1F499}";
    echo "".CANAL;

    echo "<br>";
    echo "ESTAMOS NO ANO DE".DATE(" Y");
    echo "<br>";
    echo "ESTAMOS NO ANO DE".DATE(" y");

    echo "<br>";
    $nome = "Rodrigo";
    $sobreNome = "Nogueira";

    echo "$nome ","Minotauro "," $sobreNome";
    echo "<br>";
    echo "$nome \"Minotauro \"$sobreNome";

    echo "<br>";

    $nome = "sivaldo";
    $sobreNome = "vieira";
    $apelido = "flash";

    echo "$nome \"$apelido\" $sobreNome";
    echo "<br>";
    echo "$nome ".$apelido." $sobreNome";
    echo "<br>";
    echo "$nome\n\t \"$apelido\" \t\t $sobreNome";

   //sintaxe heredoc

    echo "<br>";
    $curso = "PHP";
    $ano = date("Y");
    echo <<< FRASE
        ESTOU ESTUDANDO
               $curso em $ano



      FRASE;

  
  
  ?>
  
</body>
</html>