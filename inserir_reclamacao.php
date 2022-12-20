<?php
ini_set('default_charset','UTF-8');

header("Content-Type: text/html; charset=utf-8");
// radio buton

session_start();

if((!isset ($_SESSION['cpf']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['nome']) == true))
{
	session_destroy();
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
	unset($_SESSION['nome']);

        }
 
$logado = $_SESSION['cpf'];


$reclamacao= $_POST['reclamar'];
$data_notf=date('Y-m-d');
$usuario ='sistema';

$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');
$strcon->query("SET NAMES utf8");
$sql = "INSERT INTO tblreclamacao (DescReclamacao,IdUser, TimeReclamacao)VALUES (".$reclamacao.",".$logado.",".$data_notf.")";
$sql ="INSERT INTO tblreclamacao (DescReclamacao,IdUser, TimeReclamacao)VALUES";

//INSERT INTO `sip`.`tbl_defeito` (`defeito`, `bairro`, `logradouro`, `numposte`, `data_notf`, `usuario`) VALUES ('luz acesa dia', 'vila nova', 'avenida brasil', '1111', '2018-05-21', 'sistema');


$sql .= "('$reclamacao','$logado','$data_notf')";

//echo $sql;

/*$sql .= "('$cpf char 11','','$nome',  '$telefone','$email', '$senha')"; */

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro!");
mysqli_query($strcon,"SET NAMES 'utf8'");
mysqli_query($strcon,'SET character_set_connection=utf8');
mysqli_query($strcon,'SET character_set_client=utf8');
mysqli_query($strcon,'SET character_set_results=utf8');
$id = mysqli_insert_id($strcon);
mysqli_close($strcon);
echo "<label>Reclamação cadastrada com sucesso!</label>";
echo "<br> <label>Anote seu numero de protocolo : </label>";
echo $id;
echo "    - Com ele será possível consultar seu protocolo posteriormente!";
echo "<br><a href='reclamacao.php'>Clique aqui para enviar outra reclamação</a><br>";
echo "<a href='menu.php'>Clique aqui voltar ao menu</a><br>";
?>

