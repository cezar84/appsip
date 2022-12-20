<?php
session_start();
$_SESSION[’usuario’] = "Lorena";
?>
<?php
session_start();
if(isset($_SESSION[’NumerosVisitas’])){
$_SESSION[’NumerosVisitas’] =$_SESSION[’NumerosVisitas’]+1;
}else
$_SESSION[’NumerosVisitas’] = 1;
echo "Número de visitas : " . $_SESSION[’NumerosVisitas’];
?>
<html>
<body>
<?php
echo "Olá ". $_SESSION[’usuario’];
?>

<select name="bairro" size="" multiple>
<option value="1">Bom Jesus dos Campos</option>
<option value="2">Mata</option>
</select> 
</body>
</html>
