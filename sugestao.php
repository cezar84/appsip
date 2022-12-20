
<!DOCTYPE html>
<html>
<script type="text/javascript">
function Nova()
{
location.href=" menu.php"
}
</script>
<style rel="stylesheet" type="text/css">
<!--
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
<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
session_start();

if((!isset ($_SESSION['cpf']) == true) and (!isset ($_SESSION['senha']) == true))
{
	session_destroy();
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
	unset($_SESSION['nome']);

    //header('location:menu.php');
    }
 
$logado = $_SESSION['cpf'];
?>
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

    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
   
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
<style type="text/css">
</style>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>SIP-Sistema de luminação Pública</title>
	<hr>
<link rel="stylesheet" href="Resources/SampleStyle.css" />
</head>
<body class="fundo">

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

<form name="formulario" action="inserir_sugestao.php" method="post" name="inserir_sugestao" id="sugestao">
	<div class="margem">
		
		<br>
		<hr>
		<?php
$db   = "sip";
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 

// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);

$query = sprintf("SELECT nome FROM usuario WHERE cpf = '$logado' ");
$dados = mysqli_query($con,$query ) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);?>
<?php
	// se o número de resultados for maior que zero, mostra os dados
 if($total > 0)


		{
		// inicia o loop que vai mostrar todos os dados
		do {
?>      <?php echo "<label>Caro(a)</label>";?>
			<?=$linha['nome']?> 
			
			<?php
		// finaliza o loop que vai mostrar os dados
		}
				//real wile
		while($linha = mysqli_fetch_assoc($dados));
		
		//parte nova
		
	// fim do if 
	}
?>
<p><label>Estamos sempre em busca da melhoria e da excelência do atendimento e </label><br><br>
<label>Sua sugestão é fundamental para que à alcancemos! </label></p><br>

<div align="left"><legend><label>Descreva sua sugestão:</label></legend><br>



<table columns = "1"width=80%" align="left" border="0">
<tr>
<td></td><td><textarea name= "sugestao" cols:"80" rows"9"  onMouseOver="this.focus()" > </textarea></td></tr>
<br>
 <tr><td>
		   </td>
		  <td>
		  </td>
</tr>	
		  <tr><td>
		 </td>
		  <td>
		  </td>
</tr>	
<tr>
<td>
	
</td>
<td><input type="submit"value="Enviar"   onMouseOver="this.focus()"></button>
 <input type="reset"value="Limpar"onMouseOver="this.focus()"></button>  <input type="button" value="Voltar" onClick="Nova()"><br>
<br>
<br>



<br><br>
<br><br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer  class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>
</body>
</html>