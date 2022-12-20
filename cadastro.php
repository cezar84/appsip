<!DOCTYPE html>
<html>
<style rel="stylesheet" type="text/css">
<script type="text/javascript" src="funcoes_cpf.js"></script>
<script type="text/javascript" src="funcoes_cpf.js"></script>
<!--

<form name="form1">
        CPF: <input type="text" name="cpf" maxlength="11" onblur="return verificarCPF(this.value)"/>
    </form>


body {
	
	}
h3 {
	
	}
	label {	margin-left:12px; 
	}
p {
	margin-left:3px; 
	padding:0.2cm;
	}
-->
</style>
<div id="cabeçalho">
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

    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
   
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
<script type="text/javascript">
function validar (){
var n= document.formulario.pnome.value;
if(n==""){
alert ('O campo nome deve ser preenchido');
document.formulario.pnome.focus();}}</script>

    <meta charset="utf-8" />

    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
   <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />-->
   
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
	<br>
    <title>SIP-Sistema de luminação Pública</title>
	<br>
<link rel="stylesheet" href="Resources/SampleStyle.css" />
</head>

<table columns = "2"width="100%" align="center" border="0">
<tbody>
<tr>
<td align="left">
<p><img src="img/logob.png" width="100"height="100" ></p></td>
&nbsp;&nbsp;&nbsp;

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
</tr>
</tbody>


</table>
</div>
<div id="Body">
<body>

<!--<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>-->
	<br><hr>
<p id="documentMetadata">Preencha os campos para realizar seu cadastro e usar o sistema!</p>
<div id="form" align="left" class="formlogin" align="center"> 
  <form id="cadastro" autocomplete="on"action="inserir_dados_cadastro.php" method="post">
  <fieldset align="left">
 
 <legend align="center">Formulário</legend>
 <form name="formulario" action="logar.html" method="post" name="login" id="login">
	<div class="margem">
	

	<table columns = "2"width="80%" align="left" border="0">
	
	
		<div id="user_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 

		<tr>
		
		 <td  align="left"  width="20%"> <span id="user_div_span" class="dica">Nome :   </span> </td>
		 <td  align="left">
		  <input name="Nome" required type="text" size="40" maxlength="50" id="user" onMouseOver="this.focus()" class="cxtext">
		  </td>
		  </tr>
		</div>
		<br>
		
		<tr>
		<td  align="left">
		<div id="user_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 

		  <span id="user_div_span" class="dica">CPF :   </span> </td>
		  <td  align="left">
		  <input name="CPF" required type="text" placeholder="somente numeros" size="20" onblur="valida_cpf.php" maxlength="11"onblur="return validar_cpf.php(this.value)" id="user" onMouseOver="this.focus()" class="text">
		  
		  </td>
		  </tr>
		  <!--
		  
		  
		  <input name="CPF" required type="text" placeholder="xxx.xxx.xxx-xx" pattern="^\d{3}\.d{3}\.d{3}-\d{2}$"  size="20" maxlength="50" id="user" onMouseOver="this.focus()" class="cxtext">-->
		</div>
		<br>
		<tr>
		<td  align="left">
		<div id="user_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 

		  <span id="user_div_span" class="dica">Telefone :   </span> 
		  </td>
		  <td  align="left">
		  <input name="Telefone" required type="text">
		  </td>
		  </tr>
		  
		  <!--<input name="user_div_field" type="text" size="20" maxlength="50" id="user" onMouseOver="this.focus()" class="cxtext">-->
		  
		</div>
		<br>
		<tr>
		<td  align="left">
		<div id="user_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 

		  <span id="user_div_span" class="dica">E-mail :   </span> </td>
		  <td  align="left">
		  <input name="email" required type="email" pattern="^[a-zA-Z0-9_\.-]{2,}@([A-Za-zO-9]{2,}\.)+[AZa-Z]{2,4}$" size="20" maxlength="50" id="user" onMouseOver="this.focus()" class="cxtext">
		  </td>
		   </tr>
		</div>
		<br>
		<tr>
		<td  align="left">
		<div id="pwd_div" onMouseOver="ativarcampo(this)" onMouseOut="liberarcampo(this)"> 
		  <span id="pwd_div_span" class="dica">Senha :</span> 
		  </td>
		  <td  align="left">
		  <input name="senha" type="password" size="20" maxlength="20" id="pwd" onMouseOver="this.focus()" class="cxtext">
		</div>
		</td>
		</tr>

		<br>
		<tr>
		<td  align="left">
		
		 <td  align="left">	
		
		
		 
		 
		</div> </td>
		</tr>
		<br>
		<tr>
		<td  align="left">
		</td>
		<td>
		<input type="submit"value="Cadastrar"></button>
		  <input type="reset"value="Limpar"></button>
		  </td>
	</div>
	</tr>
	</table>
	</form>
	</fieldset>
  </form>
</div>
<br>

<? php

?>
</body>
</div>
<div id="rodape">

<br><br><br><br>

<footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>
</div>
</html>





