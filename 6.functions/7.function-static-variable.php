<?php

  /*
   function cycle(){
     static $number = 1;
     echo $number . '<br>';
     $number++;
   }

   cycle();
   cycle();
   cycle();
   cycle();
   cycle();
   cycle();
   // 1 2 3 4 5 6
   */

   function upload($value){
     static $values = [];
     $values[] = $value;
     return $values;
   }

   upload('test.php');
   upload('a.php');
   $uploads = upload('b.php');

   print_r($uploads); // Array ( [0] => test.php [1] => a.php [2] => b.php )
?>
