<?php

  for ($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
  }

  for ($i = 10; $i >= 1; $i--) {
    echo $i.'<br>';
  }

  $arr = [
    'Udemy',
    'Protourk',
    'Khan Academy'
  ];

  //echo count($arr); // 3

  for ($i = 0; $i < count($arr); $i++):
    echo $arr[$i].'<br>';
  endfor;

  for ($i = count($arr) - 1; $i >= 0 ; $i--):
    echo $arr[$i].'<br>';
  endfor;

  for ($i=0; $i < 10; $i++):
    if($i == 3) continue;
    echo $i.'<br>';
    if($i == 6) break;
  endfor;

?>
