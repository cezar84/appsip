

<?php
session_start();
echo "Olá ". $_SESSION[’nome’];
echo "<br> Idade : " . $_SESSION[’idade’];
echo "<br> Data : " . date(’Y m d H:i:s’, $_SESSION[’data’]) ;
echo ’<br><a href="envia.php">envia.php</a>’;
?>
<?php
session_start();
$_SESSION[’usuario’] = "Luzia";
if(isset($_SESSION[’usuario’]))
session_destroy();
?>