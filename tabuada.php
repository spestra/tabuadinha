<?php  include('library/carregar.php'); ?><!DOCTYPE HTML>
<html>
<head>
<title>Tabuada</title>
<link rel="stylesheet" type="text/css" href="tabuada.css" />
</head>
<body>
<header>
<img src="images/tabuadinha_logotipo_png24.png" alt="Tabuadinha logotipo"><br><br>
</header>
<content>
<?php
$caraca = new Tabuada(); 
$caraca->tabuada_num = isset($_GET['tb']) ? $_GET['tb'] : false;
$caraca->tabuada_ate = isset($_GET['ta']) ? $_GET['ta'] : false;

$caraca->setTabuada();

?>
</content>
<body>
</html>