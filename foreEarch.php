<?php
$names=array('minal','kai','apple');
sort($names);
array_pop($names);
array_push($names,'jj');
array_shift($names);
array_unshift($names,'virtual');
foreach($names as $naam){
  echo "<ol>{$naam}</ol>";
}
?>