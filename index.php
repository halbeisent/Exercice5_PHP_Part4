<?php
$ageVar = 24;
$nameVar = 'Thibault ';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5 Partie 4 PHP</title>
  </head>
  <body>
    <p>
      <?php
        function idConcat($ageVar, $nameVar)
          {
            return $nameVar . $ageVar;
          }
          echo idConcat($ageVar, $nameVar);
      ?>
    </p>
  </body>
</html>
