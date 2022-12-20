<?php

function iscpf($cpf)
{
	$cpf= preg_replace("/[^0-9]/","",$cpf);
	$digitoum=0;
	$digitodois=0;
	
	for($i=0,$x=10;$i<=8;$i++, $x--)
	{
		$digitoum+=$cpf[$i]*$x;
	}

		for($i=0,$x=11;$i<=9;$i++, $x--)
		{
			if(str_repeat($i,11)==$cpf)

			{
				return false;
			
			}
		
			$digitodois +=$cpf[$i]*$x;
		}
		$calculoum=(($digitoum%11)<2)?0:11-($digitoum%11);
		
		$calculodois=(($digitodois%11)<2)?0:11-($digitodois%11);
		
		if($calculoum<>$cpf[9]||$calculodois<>$cpf[10])

		{		
		return false;
		}
		return true;
	}
	
	if(iscpf($cpf))
		{
			$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');

$sql = "INSERT INTO usuario (nome,cpf,telefone,email,senha, Ativo)VALUES (".$nome.",".$cpf.",".$telefone.",".$email.",".$senha.",".$Ativo.")";
$sql = "INSERT INTO usuario VALUES";

$sql .= "('$cpf','$nome','$telefone','$email','$senha', '$Ativo')";

echo $sql;

/*$sql .= "('$cpf char 11','','$nome',  '$telefone','$email', '$senha')"; */

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro, CPF já Cadastrado!<br><a href='cadastro.php'>Clique aqui para tentar novamente</a><br>");

mysqli_close($strcon);
echo "Usuário cadastrado com SUCESSO!";
echo "<br><br><a href='cadastro.php'>Clique aqui para realizar um NOVO cadastro.</a><br>";
echo "<br><a href='index.php'>Clique aqui para ACESSAR o sistema!</a><br>";
		}
	else {
		echo'cpf inválido<br>';
	
	echo "<br><br><a href='cadastro.php'>confirme e tente novamente.</a><br>";
}

?>