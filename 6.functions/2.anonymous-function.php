<?php

  function test(){
     return 'Test';
  }

  //echo test(); // Test


  $test = function($str){ // Anonymous Function
    return 'Test Anonymous ' . $str;
  };

  //echo $test('Ceyhun');


  $test2 = function() use($test){
    return 'test2 ' . $test('Ceyhun');
  };

  echo $test2();

  /*
  $arr = [
    function(){
      return 'Function 1';
    },
    function(){
      return 'Function 2';
    },
    function(){
      return 'Function 3';
    }
  ];

  //echo $arr[1](); // Function 2
  //echo $arr[rand(0, 2)](); // Random return
  */

  /*
  function filter($title){
    return $title . ' CvC';
  }

  $rank = 'CvC';
  $age = 22;

  $arr = ['Ceyhun', 'Bahadır', 'Çelik'];
  //$arr = array_map('filter', $arr);
  $arr = array_map(function($title) use($age){
    return $age . ' ' . $title . ' ' . $GLOBALS['rank'];
  }, $arr);

  print_r($arr);
  // Array ( [0] => Ceyhun CvC [1] => Bahadır CvC [2] => Çelik CvC )
  */
?>
