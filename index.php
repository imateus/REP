<?php
include_once './dao/_conexao.php';
include_once './dao/usuario.php';


session_start();
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : null;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href= "suporte/estilo.css" rel="stylesheet" type="text/css" >
        <link href= "suporte/bootstrap.css" rel="stylesheet" type="text/css" >
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body id="myPage" data-spy="scroll" 
          data-target=".navbar" data-offset="60">
              <?php
              include_once './topo.php';
              if (isset($usuario)) {
                  include_once './usuarios.php';
              }
              ?>
        <script src="suporte/suportenavegacao.js" ></script>
    </body>
</html>
