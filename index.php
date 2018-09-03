<?php
  $stepsNumber = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
    <?php
      while ($stepsNumber <= 15) {
        echo ' | ' .$stepsNumber. ' On y arrive presque.';
        $stepsNumber++;
      }
     ?>
   </p>
  </body>
</html>
