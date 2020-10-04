<?php
  function cycle($number){
    echo $number;
    if($number < 10){
      cycle($number + 1);
    }
  }

  //cycle(1); // 12345678910


  $categories = [
    [
      'id'     => 1,
      'parent' => 0,
      'name'   => 'Lessons'
    ],
    [
      'id'     => 2,
      'parent' => 0,
      'name'   => 'Up-To-Date'
    ],
    [
      'id'     => 3,
      'parent' => 0,
      'name'   => 'Blog'
    ],
    [
      'id'     => 4,
      'parent' => 1,
      'name'   => 'PHP Lessons'
    ],
    [

      'id'     => 5,
      'parent' => 1,
      'name'   => 'CSS Lessons'
    ],
    [
      'id'     => 6,
      'parent' => 4,
      'name'   => 'Functions'
    ],
    [
      'id'     => 7,
      'parent' => 4,
      'name'   => 'Variables'
    ],
    [
      'id'     => 8,
      'parent' => 6,
      'name'   => 'Recursive Function'
    ]
  ];

  function listCategories($categories, $parent = 0){

    $html = '';
    $html .= '<ul>';

    foreach ($categories as $category) {
      if($category['parent'] === $parent){
        $html .= '<li>';
        if($category['parent'] === 0)
          $html .= '<b>' . $category['name'] . '</b>';
        else
          $html .= $category['name'];
        $html .= listCategories($categories, $category['id']);
        $html .= '</li>';
      }
    }

    $html .= '</ul>';
    return $html;
  };

  //echo listCategories($categories, 0);

  $arr = [
    'name'       => 'Ceyhun Bahadır',
    'surname'    => 'Çelik',
    'activities' => [
      'chess'    => 'yes',
      'swimming'  => 'no',
      'defense'   => [
        'karate'    => 'yes',
        'taekwondo' => 'yes'
      ]
    ]
  ];


  function find_in_array($arr, $search){
    foreach ($arr as $key => $val) {
      if($key == $search){
        return $val;
      }
      if(is_array($val)){
        $result = find_in_array($val, $search);
        if($result){
          return $result;
        }
      }
    }
    return false;
  }

  echo find_in_array($arr, 'taekwondo'); // yes


?>
