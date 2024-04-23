<?php
$i=12;
$j=1;
while($i<240){
 echo '12 * ' .$j. "={$i}<br>";
 $i +=12;
 $j++;
}
?>

<?php
$k=3;
$m=1;
do{
    echo "3 * {$m}={$k} <br>";
    $k+=3;
    $m++;
}while($k<=240);
for ($v=4;$v<=240;$v+=4){
    for ($l=1;$l<=100;$l++){
        echo '4 *'.$l ."={$v}<br>";
    }
}

?>
