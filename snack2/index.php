<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$nameLength = strlen($name);
$isNumber = is_numeric($age);

$atCheck = strpos($email, '@');
$dotCheck = strpos($email, '.');

if ($nameLength > 3  && $isNumber && $atCheck && $dotCheck) {
  echo "Accesso Riuscito";
}else {
  echo "Accesso negato";
}

?>
