<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>

  <main>
    <?php 
    //variavel super global ($_GET) depende do methodo de envio
    //variavel super global ($_POST) depende do methodo de envio
    //variavel super global ($_REQUEST) qualquer metodo funciona
    //($_REQUEST) # junção de $_GET, $_POST, $_COOKIES
        //var_dump($_GET);

        $var_nome = $_GET["nome"] ?? "sem nome";#nome vem input nome
        $var_sobrenome = $_GET["sobrenome"] ?? "desconhecido"; #vem do input sobrenome
        echo "<p> É um prazer te conhecer, <strong>$var_nome $var_sobrenome </strong>! Este é o meu site!"
    
    ?>

    <p><a href="javascript:history.go(-1)">Voltar a pagina anterior!</a></p>

    


  </main>
    
  
</body>
</html>