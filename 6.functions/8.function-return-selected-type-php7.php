<?php

  declare(strict_types = 1);

  function addition(int $num1, int $num2) : string{
    return (string) ($num1 + $num2);
  }

  //echo addition(3, 2); // 5 - String

  function arr(array $arr): string{
    return implode(', ', $arr);
  }

  print_r(arr(["test", "test2"]));

?>
