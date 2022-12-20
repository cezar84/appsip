<?php
ini_set('default_charset','UTF-8');
session_start();

if((!isset ($_SESSION['cpf']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['nome']) == true))
{
	session_destroy();
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
	unset($_SESSION['nome']);

        }
 
$logado = $_SESSION['cpf'];




// radio buton
$defeito = $_POST['notidef'] = ( isset($_POST['notidef']) ) ? $_POST['notidef'] : null;;

$bairro = $_POST['bairro'];

$logradouro= $_POST['logradouro'];
$numposte= $_POST['numposte'];
$data_notf=date('Y-m-d');
//$usuario =$logado;

$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');
$strcon->query("SET NAMES utf8");
$sql = "INSERT INTO tbl_defeito (defeito, bairro, logradouro, numposte, data_notf, usuario)VALUES (".$defeito.",".$bairro.",".$logradouro.",".$numposte.",".$data_notf.",".$logado.")";
$sql = "INSERT INTO tbl_defeito  (defeito, bairro, logradouro, numposte, data_notf, usuario)VALUES";
$strcon->query("SET NAMES utf8");
//INSERT INTO `sip`.`tbl_defeito` (`defeito`, `bairro`, `logradouro`, `numposte`, `data_notf`, `usuario`) VALUES ('luz acesa dia', 'vila nova', 'avenida brasil', '1111', '2018-05-21', 'sistema');


$sql .= "('$defeito','$bairro','$logradouro','$numposte','$data_notf','$logado')";

//echo $sql;

/*$sql .= "('$cpf char 11','','$nome',  '$telefone','$email', '$senha')"; */

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro!");

$id = mysqli_insert_id($strcon);
mysqli_close($strcon);
echo "<label>Notificação cadastrada com sucesso!</label><br>";
echo "<label><br> Anote seu numero de protocolo :</label>";
echo $id;
echo "   <label> - Com ele será possível consultar seu protocolo posteriormente!</label><br>";
echo "<label><br><a href='notificar.php'>Clique</a> aqui para realizar uma nova notificação ou 
<a href='menu.php'>Clique</a> aqui para realizar uma consulta<br></label>";
echo "<label><br></label><br>";
?>

