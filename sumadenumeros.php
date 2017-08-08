<!DOCTYPE HTML PUBLIC
<html>
<head>

<title>Estructura while</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <h2>Algoritmo que muestre la suma de todos los numeros del 1 al 100</h2>
<h1>La suma de los  100 números es:
<?php
$i=1;
$suma=0;
while($i<=100) {
    $suma+=$i;
    $i++;
}
echo "$suma</h1>";
?>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
