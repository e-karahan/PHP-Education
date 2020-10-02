<?php
  $a = 5;

  /*
  Switch ($a) {
    case 5:
      echo "5";
    break;

    case 6:
      echo "6";
    break;

    default:
      echo "Unknown";
    break;
  }

  Switch($a):
    case 5:
      echo "5";
    break;

    case 6:
      echo "6";
    break;

    default:
      echo "Unknown!";
    break;
  endswitch;
  */

  /*
  if($a == 5){
    echo "5";
  } else if($a ==6){
    echo "6";
  } else{
    echo "Unknown";
  }
  */

  /*
  if($a == 5):
    echo '5';
  elseif($a == 6):
    echo '6';
  else:
    echo 'NOTHING!';
  endif;
  */

?>

<?php if($a == 5): ?>
  <b>a is 5</b>
<?php endif; ?>
