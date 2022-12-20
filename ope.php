<?php 
// session_start inicia a sessão
//session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$sql =("SELECT * FROM usuario WHERE cpf = '$cpf' AND senha= '$senha'");
//$sql_nome =("SELECT nome FROM usuario WHERE cpf = '$cpf'");
//$result = mysqli_query("SELECT * FROM usuario WHERE cpf = '$cpf' AND senha= '$senha'");
//$nome=mysqli_query($strcon, $sql_nome) or die (" erro na seleção da tabela");
$result = mysqli_query($strcon, $sql) or die (" erro na seleção da tabela");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */



if(mysqli_num_rows ($result) > 0 )
{
	session_start();
	$_SESSION['cpf'] = $cpf;
	$_SESSION['senha'] = $senha;
	$query = sprintf("SELECT tipouser FROM usuario Where  cpf ='$cpf' ");
// executa a query

$tipouser = mysqli_query($strcon,$query ) or die(mysql_error());
		

	 if($senha=='master')
	  {
		header('location:telaadmin.php');
		}
		else 
		
{header('location:menu.php');}

	//
}
else{
	// session_destroy(); criada em teste 
	session_destroy();
    //unset ($_SESSION['cpf']);
    //unset ($_SESSION['senha']);
	//unset ($_SESSION['nome']);
    header('location:falha.php');
     
    }
 
?>