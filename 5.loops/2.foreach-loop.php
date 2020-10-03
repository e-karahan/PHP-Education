<?php

  /*

  $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

  foreach ($numbers as $number) {
    echo $number.'<br>';
  }

  */

  $userDetail = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'age'     => 22
  ];

  foreach($userDetail as $key => $val):
    echo $key . ': ' . $val.'<br>';
  endforeach;

?>
