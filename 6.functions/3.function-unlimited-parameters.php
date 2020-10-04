<?php
  /*
    func_num_args() // how many parameters have
    func_get_args() // listing all of parameters have
    func_get_arg()  // selected parameter
  */

  function test($par1, $par2){
    echo func_num_args() . '<br>'; // 3
    print_r(func_get_args()) . '<br>'; // Array ( [0] => Ceyhun [1] => Bahadır [2] => Çelik )
    echo func_get_arg(2); // Çelik
  }

  test('Ceyhun', 'Bahadır', 'Çelik');

?>
