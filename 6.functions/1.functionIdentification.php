<?php

  /*
  function test(){
    echo 'Test';
  }

  test(); // Test
  */

  /*
  function test(){
    return 'Test';
  }

  $a = test();
  echo $a; // Test
  */

  /*
  function addition($number1, $number2){
    return $number1 + $number2;
  }

  $total = addition(5, 12);
  echo $total; // 17
  */

  /*
  function addition($number1 = 5, $number2 = 10){
    return $number1 + $number2;
  }

  //echo addition(); // 15
  $total = addition(12);
  echo $total; // 22
  */

  /*
    global
    $GLOBALS
  */

  /*
  $name = 'Ceyhun';

  function name_surname($surname){

    //global $name;
    //return $name . ' ' .$surname;

    return $GLOBALS['name'] . ' ' .$surname;
  }

  echo name_surname('Çelik');
  */


  $p = 'Ceyh';
  //echo mb_substr($p, 0, 10) . '..'; // Ceyhun Bah..

  function abbreviation($str, $limit = 10){
    $length = strlen($str);
    if($length > $limit){
      if(function_exists('mb_substr')){
        $str = mb_substr($str, 0, $limit, 'utf8') . '..';
      } else{
        $str = substr($str, 0, $limit) . '..';
      }
    }
    return $str;
  }

  echo abbreviation($p, 5) // Ceyh

?>
