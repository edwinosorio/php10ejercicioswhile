<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dos numeros.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <div class="container">
      <h2>Algoritmo que solicite dos numeros y muestre todos los numeros que van desde el primero hasta el segundo. Se debe controlar que los valores sean correctos.</h2>
      <?php
      $i=1;
      $i1=6;
      $cont=0;

      while ($i <= 6) {
        {
          echo "$i &nbsp";
          $i++;
        }
        $cont++;
      }

      echo "<h1>Del primer numero al segundo numero hay: $cont numeros</h1>";
      ?>
</div>
  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
