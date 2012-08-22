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

$tabuada_arrei = $caraca->getTabuada();

echo '<pre>';
print_r($tabuada_arrei);
//echo($tabuada_arrei);
echo '</pre>';

?>
</content>
<body>
</html>