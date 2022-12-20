<!DOCTYPE html>

<html   charset= 'utf-8'>
<script type="text/javascript">
function Nova()
{
location.href="index.php"
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
    <title>SIP-Sistema de luminação Pública</title>
<link rel="stylesheet" href="Resources/SampleStyle.css" />
			<!--  parte de deste de sessao começa aqui -->

<?php 

ini_set('default_charset','UTF-8');
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
session_start();

if((!isset ($_SESSION['cpf']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['nome']) == true))
{
	session_destroy();
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
	unset($_SESSION['nome']);

    header('location:menu.php');
    }
 
$logado = $_SESSION['cpf'];



?>
 

			
</head>
<body>

<table columns = "2"width="100%" align="center" border="0">
<tbody>
<tr>
<td align="left">
<p><img src="img/logob.png" width="100"height="100" ></p></td>
&nbsp;&nbsp;&nbsp;

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
<!-- retirar este php depois -->


</tbody>

<td>
</tr>
</table><hr>

<?php

    echo" <label>Bem vindo(a) </label>"; 

    ?>
<?php
$db   = "sip";
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 

// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);

$query = sprintf("SELECT nome FROM usuario WHERE cpf = '$logado' ");
$con->query("SET NAMES utf8");
$dados = mysqli_query($con,$query ) or die(mysql_error());
$con->query("SET NAMES utf8");
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
?>      
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
<?php

    echo" , "; 
	
    ?>
			<!--  finaliza aqui
			<label ><font >Escolha uma das opções:</font></label><br><br>
<label><a href="notificar.php"><b>Notificar defeito</b></a></label><br><br>
<label><a href="reclamacao.php"><b>Reclamação</b></a></label><br><br>
<label><a href="sugestao.php"><b>Sugestão</b></a></label><br><br><br>
<label> -->

	
<br><br><br><label ><font >Escolha uma das opções:</font></label><label><a href="notificar.php"><b>Notificar defeito</b></a></label>
<label><a href="reclamacao.php"><b>Reclamação</b></a></label><label><a href="sugestao.php"><b>Sugestão</b></a></label><br><br><br>


<form id="pesquisa" autocomplete="of"action="consulta_protocolo.php" method="post"><label> 
Pesquisar protocolos:
<input name="pesquisa" required type="text" size="40" maxlength="50" id="pesquisa" onMouseOver="this.focus()" class="cxtext">



  
  

  <input type="submit"value="Pesquisar"></button>
  <input type="button" value="Sair" onClick="Nova()">
  
  
</form></label>
<br><br>
<fieldset ><legend>Meus protocolos</legend>


<br>
<?php
$db   = "sip";


//include conecta_banco.php;



// conecta ao banco de dados
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 
ini_set('default_charset','UTF-8');
$con->query("SET NAMES utf8");
// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);
// cria a instrução SQL que vai selecionar os dadosWERE senha =''
$query = sprintf("SELECT protocolo,defeito,bairro,logradouro,numposte, data_notf,status FROM tbl_defeito Where  usuario ='$logado' ");
// executa a query

$dados = mysqli_query($con,$query ) or die(mysql_error());
// transforma os dados em um array
$con->query("SET NAMES utf8");
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);?>

<table  align="center"width="90%"border="0" bgcolor="White">
			<!--<p>-->
			
			<tr>
			<td  width="4%">
			<label><b><u>Protocolo</u></b> </label>
			</td>
			<td  width="17%" align='center'>
			<label><b><u>Defeito</u></b> </label>
			</td>
			<td width="15%"align='center'>
			<label><b><u>Bairro</u></b></label>
			</td> 
			<td width="20%"align='center'></label>
			<label><b><u>Logradouro</u></b>
			</td>
			<td width="3%">
			<label><b><u>N° poste</u></b></label>
			<!--</p>-->
			</td>
			<td width="7%">
			<label><b><u>Data </u></b></label>
			<!--</p>-->
			</td>
			
			<td width="25%"align='center'>
			<label><b><u>Status</u></b></label>
			<!--</p>-->
			</td>
			</tr>
			</table>

<?php
	// se o número de resultados for maior que zero, mostra os dados
 if($total > 0)


		{
		// inicia o loop que vai mostrar todos os dados
		do {
?>      <table  align="center" width="90%"border="1"bgcolor="White">
			<!--<p>-->
			
			<tr>
			<td  align="center" width="4%">
			<?=$linha['protocolo']?> 
			</td>
			<td align="left" width="17%">
			<?=$linha['defeito']?>
			</td> 
			<td align="left" width="15%">
			<?=$linha['bairro']?>
			</td>
			<td align="left" width="20%">
			<?=$linha['logradouro']?>
			<!--</p>-->
			</td>
			<td align="left" width="3%">
			<?=$linha['numposte']?>
			<!--</p>-->
			</td>
			<td align="left" width="7%">
			<?=$linha['data_notf']?>
			<!--</p>-->
			</td>
			
			<td align="left" width="25%">
			<?=$linha['status']?>
			<!--</p>-->
			</td>
			</tr>
			</table>
			<?php
		// finaliza o loop que vai mostrar os dados
		}
		//parte nova aqui
		/*do {
		 echo "<table><tr><th>Nome</th><th>Telefone</th>   <th>Cpf</th>  <th>email</th>   </tr>";
		}// fim parte nova do "do"*/
		
		//real wile
		while($linha = mysqli_fetch_assoc($dados));
		
		//parte nova
		
	// fim do if 
	}
?>

</fieldset><input type="button" value="Imprimir" onClick="self.print();" />
	<br><br>
	<br><br><br>
	<br>
	<br>
<footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>
</body>
</html>