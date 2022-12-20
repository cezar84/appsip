<?php
//session_start();


?>
<!DOCTYPE html>

<html>

<head>

 <!--codigo favicon-->
  <link  rel = "ícone de toque de maçã"  tamanhos = "57x57"  href = "/favicon/apple-icon-57x57.png" > 
<link  rel = "ícone de toque da maçã"  tamanhos = "60x60"  href = "/favicon/ apple -icon-60x60.png " > 
<link  rel = " ícone de toque de maçã "  tamanhos = " 72x72 "  href = "/favicon /apple-icon-72x72.png " > 
<link  rel = " ícone de toque da maçã "  tamanhos = "76x76"  href = "/favicon/apple-icon-76x76.png" > 
<link  rel = "apple-touch-icon "  tamanhos = " 114x114 "  href = " /favicon/apple-icon-114x114.png "> 
<link  rel = "ícone do toque da maçã"  tamanhos = "120x120"  href = "/favicon/apple-icon-120x120.png" > 
<link  rel = "ícone do toque da maçã"  tamanhos = "144x144"  href = "/favicon/ apple-icon-144x144.png " > 
<link  rel = " ícone de toque da maçã "  tamanhos = " 152x152 "  href = " /apple-icon-152x152.png " > 
<link  rel = " maçã-toque-ícone "  tamanhos = "180x180"  href = "/favicon/apple-icon-180x180.png" > 
<link  rel = "ícone"  type = "image / png"  sizes = "192x192"  href = "/favicon/android-icon-192x192.png" > 
<link  rel = "ícone"  type = "imagem / png"  tamanhos = "32x32"  href = "/favicon/favicon-32x32.png" > 
<link  rel = "ícone"  type = "image / png"  tamanhos = "96x96"  href = "/favicon/favicon-96x96.png" > 
<link  rel = "ícone"  type = "imagem / png"  tamanhos = "16x16"  href = "/favicon/ favicon-16x16. png " > 
<link  rel = " manifest " href = "/manifest.json" > 
<meta  name =msapplication-TileColor "  content = " #ffffff " > 
<meta  name = " msapplication-TileImage "  conteúdo = " /ms-icon-144x144.png " > 
<meta  name = " tema-cor "  content = " #ffffff " >
  <!--fim favicon-->

    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <!--<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />-->
   
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Login</title>
		
		 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
		
<link rel="stylesheet" type="text/css" href="css\rodape.css" />
</head>
<body>
<table columns = "3"width="100%" align="center" border="0">
<tbody>
<tr>
<td align="left">
<img src="img/logob.png"  >
<!--<img src="img/logob.png" width="100"height="100" >--></td>
&nbsp;&nbsp;&nbsp;

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
<td>
<iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="120" height="170" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=4044&SKIN=padrao"></iframe>
</td>
</tr>
</tbody>


</table>
<br>
<p id="documentMetadata"> Olá , obrigado por nos ajudar a cuidar de nossa cidade!</p>
<div id="form" align="left" class="formlogin"> 
 <fieldset> 
<form method="post" action="ope.php" id="formlogin" name="formlogin" >
	<div class="margem">
		<fieldset id="fie">

<legend>LOGIN</legend><br /> 





</form>

		<table border ="1">
			<tr>
				<td>

					<label>CPF : </label><

				</td>
				<td>
				<div id="user_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 
				</span> <input type="text" name="cpf" id="cpf"  /><br />
				</td>
				</tr>
				<tr>
				<td>
						<div id="pwd_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 
							<label>SENHA :</label>
				</td>
				<td>
					<input type="password" name="senha" id="senha" /><br />
				</td>

			</tr>

</table><input type="submit" value="LOGAR    "  />
</fieldset>		 
		  
		</div>
		<br>
		
		  
		</div>
		<div id="enter_img_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 
		<br>
				   <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
		
		  <br>
		  <br>
		 
		 <br>
		 <br>
	

		</fieldset>
		 <p></p><a href="cadastro.php">ou Cadastre-se aqui!</a></p>
		</div>
	</div>
  </form>
<form id="informativo">
<fieldset>
<output> 
<label>

Exemplo de campanha
<br>
<br>
<b>Campanho do agasalho</b>
<br>
Com o inverno chegando, lembre-se que você tem a oportuniade de ajudar alguém. Dõe
</label>
</output></fieldset>
</form>
</div>
<footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>
</body>
</html>