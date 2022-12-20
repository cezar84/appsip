<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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


<?php 




/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:http://localhost:3310/SIP/site.php');
    }
 
$logado = $_SESSION['login'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>
 
<body>
<table width="800" height="748" border="1">
  <tr>
    <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEM WEB TESTE
    <?php
    echo" Bem vindo $logado";
    ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
    <td width="546">CONTEUDO E ICONES AQUI</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>