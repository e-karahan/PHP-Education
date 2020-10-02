<?php
  define('MEMBER', [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'job'     => 'Student',
    'age'     => 22,
    'activities' => [
      'read a book',
      'morning walk'
    ]
  ]);
  //echo print_r(MEMBER);
  //echo MEMBER['job']; // Student
  echo MEMBER['activities'][1]; // morning walk
?>
