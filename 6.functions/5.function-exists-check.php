<?php

  function test(){
    return 'test';
  }

  //echo function_exists('test'); // 1

  if(function_exists('test')){
    echo 'I have function called "test"';
  } else{
    echo 'I don\'t have function called "test"';
  }

?>
