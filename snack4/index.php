<!-- Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

$rndNum = [];


while (count($rndNum) < 15) {
  $num = rand(1,100);
  if (!in_array($num,$rndNum)) {
    $rndNum[] = $num;
  }
}
var_dump($rndNum);
?>
