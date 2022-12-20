<!DOCTYPE html>

<html>

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
<img src="img/logob.png"  >
<!--<img src="img/logob.png" width="100"height="100" >--></td>
&nbsp;&nbsp;&nbsp;,

<td><!--<img src="img/titulo.png" width="100"height="100" ></td>-->
<h1 id="documentTitle">SIP - Sistema de Iluminação Pública</h1>
</td>
<td>
<!--<iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="120" height="170" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=4044&SKIN=padrao"></iframe>-->
</td>
</tr>
</tbody>


</table>
<br>
<p id="documentMetadata"> 
<p> Lista de usuários ativos!</p></p>
<div id="form" align="left" class="formlogin"> 
 <fieldset> 
 <form action="ope.php" method="post" name="login" id="login">
	
	<?php
// definições de host, database, usuário e senha
/*$host = "localhost";
$user = "admin";
$pass = "admin";*/
$db   = "sip";


//include conecta_banco.php;



// conecta ao banco de dados
$con = mysqli_connect('localhost','admin','admin','sip') or trigger_error(mysql_error(),E_USER_ERROR); 

// seleciona a base de dados em qu	e vamos trabalhar
mysqli_select_db($con,$db);
// cria a instrução SQL que vai selecionar os dadosWERE senha =''
$query = sprintf("SELECT cpf,nome,telefone,email,senha FROM usuario Where  Ativo ='1' ");
// executa a query

$dados = mysqli_query($con,$query ) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>



<html>
	<head>
	<title>Consulta de Usuários</title>
	<!--comando imoreimir aqui-->
	
</head>
<body>



<table  width="70%"border="0">
			<!--<p>-->
			
			<tr>
			<td  width="5%">
			<label><b><u>Desativar</u></b> </label>
			</td>
			<td  width="25%">
			<label><b><u>Nome</u></b> </label>
			</td>
			<td width="10%">
			<label><b><u>Telefone</u></b></label>
			</td> 
			<td width="10%"></label>
			<label><b><u>Cpf</u></b>
			</td>
			<td width="25%">
			<label><b><u>E-mail</u></b></label>
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
?>      <table  align="left" width="70%"border="0">
			<!--<p>-->
			
			<tr>
			<td  align="center" width="6%">
			<input type="checkbox" name="desativado" value="desativado"> 
			</td>
			<td  align="left" width="25%">
			<?=$linha['nome']?> 
			</td>
			<td align="left" width="10%">
			<?=$linha['telefone']?>
			</td> 
			<td align="left" width="10%">
			<?=$linha['cpf']?>
			</td>
			<td align="left" width="25%">
			<?=$linha['email']?>
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
</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?><br>
		 <br><br><br><br><br><br><br><br><br><br>
		 <br><br><br><br>
		 <input type="submit"value="Confirmar"></button>
		  <input type="reset"value="Limpar"></button>
		  <input type="button" value="Imprimir" onClick="self.print();" />
		</div>
	</div>
  </form>

</div>
<footer class="footer"> Desenvolvido de por Cezar Silvestre Machado</footer>
</body>
</html>