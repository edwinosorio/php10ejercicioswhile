<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Numeros pares</title>
  </head>
  <body>
    <?php
$numero=1;

while ($numero<=100) {
      if( ( $numero % 2 ) ==0 ){
            echo $numero;
      }

      if ($numero<=100){
          echo "-";
      }

      $numero++;
}
?>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
