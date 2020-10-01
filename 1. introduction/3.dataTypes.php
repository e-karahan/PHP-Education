<?php


  /*
    String 'Ceyhun Bahadır Çelik'
    Integer 300, 500
    Float (Double) 5.5, 7.2
    Boolean true, false
    Array[]
    Object {}
    NULL
    gettype()
  */
  $string = 'Ceyhun Bahadır ÇELİK';
  $int = 500;
  $float = 5.5;
  $bool = false;
  $array = array();
  $object = new stdClass;
  $null = NULL;
  //echo gettype($string); // PHP return string
  //echo gettype($int); // PHP return integer
  //echo gettype($float); // PHP return double
  // Note: boolean not accept 1 and 0
  //echo gettype($array); // PHP return array
  //echo gettype($object); // PHP return object
  echo gettype($null); // PHP return NULL
?>
