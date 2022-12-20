
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
</style><?php
// radio buton

$sugestao= $_POST['sugestao'];
$data_notf=date('Y-m-d');
$usuario ='sistema';

$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');

$sql = "INSERT INTO tblsugestao (descSugestao,IdUser, TimeSugestao)VALUES (".$sugestao.",".$usuario.",".$data_notf.")";
$sql ="INSERT INTO tblsugestao (descSugestao,IdUser, TimeSugestao)VALUES";

//INSERT INTO `sip`.`tbl_defeito` (`defeito`, `bairro`, `logradouro`, `numposte`, `data_notf`, `usuario`) VALUES ('luz acesa dia', 'vila nova', 'avenida brasil', '1111', '2018-05-21', 'sistema');


$sql .= "('$sugestao','$usuario','$data_notf')";

//echo $sql;

/*$sql .= "('$cpf char 11','','$nome',  '$telefone','$email', '$senha')"; */

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro!");
$id = mysqli_insert_id($strcon);
mysqli_close($strcon);
echo "Reclamação cadastrada com sucesso!";
echo "<br> Anote seu numero de protocolo :";
echo $id;
echo "    - Com ele será possível consultar seu protocolo posteriormente!";
echo "<br><a href='sugestao.php'>Clique aqui para realizar uma sugestao</a><br>";
echo "<a href='menu.php'>Clique aqui voltar ao menu</a><br>";
?>

