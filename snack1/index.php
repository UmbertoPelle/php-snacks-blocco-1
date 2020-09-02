<!-- Creiamo un array contenente le partite di basket di
un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
  $arrDayOne = [
    'firstTurn' =>[
      'home'=>'Olimpia Milano',
      'away'=>'Cantù',
      'scoreHome'=>'55',
      'scoreAway'=>'60'
    ],
    'secondTurn' =>[
      'home'=>'Miami Heat',
      'away'=>'Chicago Bulls',
      'scoreHome'=>'100',
      'scoreAway'=>'90'
    ]
  ];

  foreach ($arrDayOne as $turn) {
    echo $turn['home'].' - ' .$turn['away']. ' / ' . $turn['scoreHome'].' - ' .$turn['scoreAway'] . '<br>';
  }
 ?>
