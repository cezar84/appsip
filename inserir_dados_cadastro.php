<?php
/*
include "conecta_banco.php";
mysqli_query("INSERT INTO usersip ( NomeUser,Cpf,Telefone, email, Senha) Values('','$_POST[Nome]', '$_POST[CPF]','$_POST[Telefone]','$_POST[email]','$_POST[senha]')") or die ("Não inseriu ! ");
echo "Dados inseridos com sucesso!";*/
$nome = $_POST['Nome'];
$cpf = $_POST['CPF'];
$telefone= $_POST['Telefone'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$Ativo='1';

include 'valida_cpf.php';






// para aqui 
//$strcon = mysqli_connect('localhost','admin','admin','sip') or die('Erro ao conectar ao banco de dados');

//$sql = "INSERT INTO usuario (nome,cpf,telefone,email,senha, Ativo)VALUES (".$nome.",".$cpf.",".$telefone.",".$email.",".$senha.",".$Ativo.")";
//$sql = "INSERT INTO usuario VALUES";

//$sql .= "('$cpf','$nome','$telefone','$email','$senha', '$Ativo')";

//echo $sql;

/*$sql .= "('$cpf char 11','','$nome',  '$telefone','$email', '$senha')"; */

//mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registroCPF já Cadastrado!<br><a href='cadastro.php'>Clique aqui para tentar novamente</a><br>");

//mysqli_close($strcon);
//echo "Usuário cadastrado com SUCESSO!";
//echo "<br><br><a href='cadastro.php'>Clique aqui para realizar um NOVO cadastro.</a><br>";
//echo "<br><a href='index.php'>Clique aqui para ACESSAR o sistema!</a><br>";
?>