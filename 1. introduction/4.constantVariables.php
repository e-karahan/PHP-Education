<?php
  /*
    Constant Variables;
      - use with define()
      - starts with character or underline '_' not number
      - starts can by turkish characters
      - case sensitive
      - can not starts by number
    Data Types;
      - include all of data types except object
  */

  //$ceyhun = 'Ceyhun Bahadır ÇELİK';
  //echo $ceyhun;

  define('ceyhun', 'CEYHUNBASE');
  define('ceyhuN', 'Ceyhun Bahadır ÇELİK');
  echo ceyhuN;
  //echo gettype(ceyhun); // PHP return string

?>
