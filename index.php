<?php
//session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<style rel="stylesheet" type="text/css">
<!--
body {
	
	}
h3 {
	
	}
	label {	margin-left:12px; 
	}
p {
	margin-left:5px; 
	padding:0.6cm;
	}
-->
</style>
  <head>
  <!--codigo favicon-->
  <link  rel = "ícone de toque de maçã"  tamanhos = "57x57"  href = "favicon/apple-icon-57x57.png" > 
<link  rel = "ícone de toque da maçã"  tamanhos = "60x60"  href = "favicon/ apple -icon-60x60.png " > 
<link  rel = " ícone de toque de maçã "  tamanhos = " 72x72 "  href = "favicon /apple-icon-72x72.png " > 
<link  rel = " ícone de toque da maçã "  tamanhos = "76x76"  href = "favicon/apple-icon-76x76.png" > 
<link  rel = "apple-touch-icon "  tamanhos = " 114x114 "  href = " favicon/apple-icon-114x114.png "> 
<link  rel = "ícone do toque da maçã"  tamanhos = "120x120"  href = "favicon/apple-icon-120x120.png" > 
<link  rel = "ícone do toque da maçã"  tamanhos = "144x144"  href = "favicon/ apple-icon-144x144.png " > 
<link  rel = " ícone de toque da maçã "  tamanhos = " 152x152 "  href = "favicon/apple-icon-152x152.png " > 
<link  rel = " maçã-toque-ícone "  tamanhos = "180x180"  href = "favicon/apple-icon-180x180.png" > 
<link  rel = "ícone"  type = "image / png"  sizes = "192x192"  href = "favicon/android-icon-192x192.png" > 
<link  rel = "ícone"  type = "imagem / png"  tamanhos = "32x32"  href = "favicon/favicon-32x32.png" > 
<link  rel = "ícone"  type = "image / png"  tamanhos = "96x96"  href = "favicon/favicon-96x96.png" > 
<link  rel = "ícone"  type = "imagem / png"  tamanhos = "16x16"  href = "favicon/ favicon-16x16. png " > 
<link  rel = " manifest " href = "/manifest.json" > 
<meta  name =msapplication-TileColor "  content = " #ffffff " > 
<meta  name = " msapplication-TileImage "  conteúdo = " /ms-icon-144x144.png " > 
<meta  name = " tema-cor "  content = " #ffffff " >
   <link rel="icon" href="favicon/favicon.ico"><!--fim favicon-->
 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Login">
    <meta name="author" content="cesar">
	<!-- icon no title-->
   

    <title class="title" >Login</title>

 
	
    <!-- *******	mundando aquiBootstrap core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" type="text/css" href="css/index.css" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>

   
  </head>

  <body>

    <div class="container">
	<!--começa a parte teste aqui/* na primeira linha usaremos o “action=ope.php” para que o formulário repasse as informações para a pagina ope.php */-->
<table columns = "3"width="100%" align="center" border="0">
<tbody>
<tr>
<td align="left">
<p><img src="img/logob.png"  ></p>
<!--<img src="img/logob.png" width="100"height="100" >--></td>
&nbsp;&nbsp;&nbsp;

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 class="h1" id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
<td>
<iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="120" height="170" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=4044&SKIN=padrao"></iframe>
</td>
</tr>
</tbody>


</table><hr>
	<p id="documentMetadata"> <label>Seja bem vindo!</labe><br><br>
	<label> Notifique a prefeitura a sobre falhas na iluminação pública ou consulte protocolos! </label>
<br><br>
	<form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie" align="center style="width: 30%; align:"center";>
<table border ="0" align="center">
<tr><td> </label><a href="cadastro.php"><b>Clique aqui para Cadastradar</b></a></td><label> </tr>
<tr><td align= "center" ></td></tr><br><tr><td align= "center" >ou </td></tr>


</table>
<table border ="0" align="center">

<legend align="center">LOGIN</legend><br />

<td>
<label>CPF : </label>
</td>

<td>
<input required type="text" name="cpf" id="cpf" maxlength="14" />

</td></tr>
<br />
<tr>
<td>
<label>SENHA :</label>
</td>
<td>
<input required type="password" name="senha" id="senha" /><br />

</td>
</tr>
<tr>
<td>

</td>
<td>
<input type="submit" value="Login    "  />

</fieldset>


</form>

</table><br>
<br><br><br>
<p><footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer></p>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>