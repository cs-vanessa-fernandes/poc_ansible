<?php
$texto = "<span>Hello</span> Poc Ansible ";

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <!-- FAVICON - Imagem na guia do navegador -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Definindo a largura da pagina para seguir a largura da tela do dispositivo que abrir o site. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    <title> Poc Ansible </title>

    <style>

     .footer{color:#fff;position:fixed;bottom:1%;width:100%;  background-color: #bbb; float:left;}.container-fluid{text-align:center; height: 100%;} .version{color: #fff; font-size: 16px;}
      .footer{color:#fff;position:fixed;bottom:1%;width:100%; background-color: #bbb; float:left;}.container-fluid{text-align:center; height: 100%;}
      span{color:#7968ab;}.col-md-12{font-size:60px;}h3{text-align:center;}
      .version{color: #fff; font-size: 16px;}
    </style>
  </head>

  <body>

    <!-- Container de largura total abrangendo toda a largura da viewport -->
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <?php
            echo $texto . gethostname();
          ?>
        </div>
      </div>

        <div class="row">
	<div class="col-md-12 footer">
          <h3>Desenvolvido por <a href="http://www.concretesolutions.com.br" target="_blank"><img src="img/cs.png" width="200px"></a>
          <br /><span class="version"> Version 1.1 </span></h3>

        </div>
	</div>
    </div>

  </body>


</html>
