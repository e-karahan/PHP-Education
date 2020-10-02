<?php
  /*
    Websites
      E-Commerce
        - Sahibinden
        - N11
        - Hepsiburada
        - Gittigidiyor
      Education
        - Udemy
        - Prototurk
        - Khan Academy
  */

  $categories = [
    'websites' => [
      'e-commerce' => [
        'Sahibinden',
        'N11',
        'Hepsiburada',
        'Gittigidiyor'
      ],
      'education' => [
        'Udemy',
        'Prototurk',
        'Khan Academy'
      ]
    ]
  ];

  //print_r($categories);
  echo $categories['websites']['e-commerce'][3] // Gittigidiyor

?>
