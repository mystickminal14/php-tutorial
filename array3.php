<?php
function union($arr1,$arr2){
  $merge =array_merge($arr1,$arr2);
  $uni=array_unique($merge);
  echo "<ore>";
  print_r($uni);
  foreach($merge as $val){
    echo"<pre>";
    print_r($val);
   
  
  }
}
$arr1=array('red','yellow','blue');
$arr2=array('red','yellow','blue');
union($arr1,$arr2);
?>