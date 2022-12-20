<!DOCTYPE html>

<html>
<script type="text/javascript">
function index()
{
location.href="index.php"
}
function telaadmin()
{
location.href="telaadmin.php"
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
// variaveis a para select
//$defeito = $_POST['defeito'];
$bairro = $_POST['bairro'];



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

<style rel="stylesheet" type="text/css">
<!--
body {
	
	}
h3 {
	
	}
p {
	margin-left:5px; 
	padding:0.6cm;
	}
--></style>

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
    <title>SIP-Sistema de luminação Pública</title>
		
<link rel="stylesheet" type="text/css" href="css\rodape.css" />
</head>
<body>
<table columns = "3"width="100%" align="center" border="0">
<tbody>
<tr>
<td align="left">
<p><img src="img/logob.png"  ></p>
<!--<img src="img/logob.png" width="100"height="100" >--></td>
&nbsp;&nbsp;&nbsp;

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
<td>

</td>
</tr>
</tbody>


</table><hr>
<p><label>Administrador 
</label><?php
$db   = "sip";
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 

// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);

$query = sprintf("SELECT nome FROM usuario WHERE cpf = '$logado' ");
$con->query("SET NAMES utf8");
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
?><?php

    echo" , "; 
	
    ?>
	<form action="consulta_defeito_filtrado.php" action ="set_defeito_bairro.php"method="post" >
	
		
    <label>Bairro..:<label><select name="bairro"id="bairro">
	<option value="Boa Vista">Boa Vista</option>
        <option value="Bom Jesus dos Campos"> Bom Jesus dos Campos </option>
   <option value="Cachoeira da Lage"> Cachoeira da Lage</option>
       <option value="Centro"> Centro  </option>
   <option value="Enseata da Barra">Enseata da Barra</option>
       <option value="Furnas"> Furnas </option>
	     <option value="Mata">Mata</option>
	   
		  <option value="Nossa Senhora de Fática - Can-can">Nossa Senhora de Fática - Can-can</option>
		    <option value="Shangrilá">Shangrilá</option>
			
			   
			   
    </select>

 
<input type="submit" value="Filtrar"/>

</form>
<form action="set_defeito_bairro.php" method="post" > 
 <label>Responder Protocolo..:<label>
  <select name="bairro" id="bairro">
      <option value="Boa Vista">Boa Vista</option>
        <option value="Bom Jesus dos Campos"> Bom Jesus dos Campos </option>
   <option value="Cachoeira da Lage"> Cachoeira da Lage</option>
       <option value="Centro"> Centro  </option>
   <option value="Enseata da Barra">Enseata da Barra</option>
       <option value="Furnas"> Furnas </option>
	     <option value="Mata">Mata</option>
	   
		  <option value="Nossa Senhora de Fática - Can-can">Nossa Senhora de Fática - Can-can</option>
		    <option value="Shangrilá">Shangrilá</option>
			
    </select>
<input name="set_status" id="set_status" required type="text">
<input type="submit" value="Alterar"/>
</form>
<div id="form" align="left" class="formlogin"> 
 <fieldset>   <legend align="center">Tabela de defeitos notificados</legend>
 
 <?php 
if(isset($_GET['filtroSelect'])){
    echo $_GET['filtroSelect'];
}
if(isset($_GET['filtro'])){
    echo $_GET['filtro'];
}
?> 
		 <?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "sip";

// <?php
$db   = "sip";


//include conecta_banco.php;



// conecta ao banco de dados
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 

// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);
// cria a instrução SQL que vai selecionar os dadosWERE senha =''
$query = sprintf("SELECT protocolo,defeito,bairro,logradouro,numposte, data_notf,usuario,status FROM tbl_defeito WHERE bairro = '$bairro' ORDER BY numposte DESC");
// executa a query
$con->query("SET NAMES utf8");
$dados = mysqli_query($con,$query ) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);?>

<p><table  align="center"width="90%"border="0" bgcolor="White">
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
			<td width="7%"align='center'>
			<label><b><u>Usuário</u></b></label>
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
			<td align="left" width="7%">
			<?=$linha['usuario']?>
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
?></p>
</fieldset>
<input type="button" value="Voltar" onClick="telaadmin()">
<input type="button" value="Sair" onClick="index()">


<input type="button" value="Imprimir" onClick="self.print();" /></p>

	<br><br>
	<br><br><br>
	<br>
	<br>
	<br><br>
	<br><br><br>
	<br>
	<br>
<!--<footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>-->
</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?><br>