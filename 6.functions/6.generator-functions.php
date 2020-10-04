<?php

  // memory_get_usage()
  // number_format() => number_format(2) // 0,00


  function byteToMB($byte){
    return number_format(($byte / 1048576), 2);
  }

  //$numbers = range(0, 1000000); // 32.38MB memory used

  //echo byteToMB(memory_get_usage()) . 'MB memory used';


  function cycle($start, $limit){
    for ($i=$start; $i < $limit; $i++) {
      yield $i;
    }
  }

  $numbers = cycle(0, 1000000);
  echo byteToMB(memory_get_usage()) . 'MB memory used';
  
  /*
  foreach ($numbers as $number) {
    echo $number . '<br>';
  }
  */



?>
