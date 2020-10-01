<?php
  /*
    Magic Quotes - use "" instead of ''
      - \t
      - \n
      - \\
      - \$
      - \'
      - \"
  */

  // ~~~~~~~~~~~
  //$test = "Ceyhun\nÇelik"; // return Ceyhun Çelik
  // ~~~~~~~~~~~

  // ~~~~~~~~~~~
  //$test = "Ceyhun\nÇelik"; // return(source) Ceyhun
                           //                Çelik
  // ~~~~~~~~~~~
  $test = "Ceyhun Çelik \\test\ ";

  $name = "Ceyhun";

  //echo "Hello, my name is $name"; // Hello, my name is Ceyhun
  //echo 'Hello, my name is $name'; // Hello, my name is $name

  //echo "$name variable is equal to $name" // Ceyhun variable is equal to Ceyhun
  //echo "\$name variable is equal to $name" // $name variable is equal to Ceyhun

  //echo "Ceyhun said: \"I don not afraid\".."; // Ceyhun said: "I don not afraid"..
  echo 'Ceyhun said: \'I don not afraid\'..'; // Ceyhun said: 'I don not afraid'..

?>
