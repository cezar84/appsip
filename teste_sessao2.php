<html>
<body>

<?php
session_start();
$_SESSION[’nome’] = ’Lorena’;
$_SESSION[’idade’] = 20;
$_SESSION[’data’] = time();
// Funciona se o cookie de sessão foi aceito
echo ’<br><a href="recebe.php">recebe.php</a>’;
// Ou passando o ID da sessão se necessário
//echo ’<br><a href="recebe.php?’. SID . ’"> recebe.php </a>’;
?></body>
</html>