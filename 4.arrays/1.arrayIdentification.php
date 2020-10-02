<?php

  $name    = 'Ceyhun Bahadır';
  $surname = 'Çelik';
  $job     = 'Student';
  $age     = 22;

  /*
    // Array Identification
      - array()
      - []
  */

  /*
  $id = array(
    'name'    => 'Ceyhun Bahadır',
    'surname' => 'Çelik',
    'job'     => 'Student',
    'age'     => 22
  ); */

  $id = [
    'name'    => 'Ceyhun Bahadır',
    'surname' => 'Çelik',
    'job'     => 'Student',
    'age'     => 22
  ];

  //echo $id; // Array

  /*
    Access to the elements of the array
      - print_r()
  */

  //echo $id[1]; // Çelik

  //echo print_r($id); // Array ( [name] => Ceyhun Bahadır [surname] => Çelik [job] => Student [age] => 22 ) 1
  echo $id['job']; // Student


?>
