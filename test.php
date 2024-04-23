<?php

  $num1 = 1;
  $num2=3;
  $sum= $num1 +$num2;

  echo 'The sum of number is '. $sum;
  if ($sum>1){
    echo 'the greater number';
  } elseif($sum<2){
    echo ' the smaller number is';

  }else{
    echo'the goat';
  }
  switch($sum){
    case 1:
        echo 'the sum is greater';
        break;
    case $sum<6:
        echo ' the h';
    default:
    echo'versatile';
        
  }
 echo $sum==4?  'greater':'les';
?>