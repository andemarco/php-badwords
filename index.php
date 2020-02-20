<?php
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$_GET["badword"];
strlen($text);
$modtext = str_replace ($_GET, '***', $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio PHP BADWORDS</title>
  </head>
  <body>
    <h1>TESTO PRINCIPALE</h1>
    <p><?php echo $text ?></p>
    <p>LUNGHEZZA DEL PARAGRAFO: <?php echo strlen($text) ?></p>
    <h1>TESTO MODIFICATO</h1>
    <p><?php echo $modtext ?></p>
    <p>LUNGHEZZA DEL PARAGFRAFO: <?php echo strlen($modtext) ?></p>
  </body>
</html>
