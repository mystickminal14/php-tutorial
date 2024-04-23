<?php

$i=1;
while ($i<=100){
    if($i%3==0 && $i%5==0){
        echo  'fizzbuzz <br>';
    }elseif($i%5==0){
        echo 'buzz <br>';
    }elseif($i%3==0){
        echo 'fizzbuzz<br>';
    }else{
        echo $i .'<br>';
    }
 $i++;
}
$value='sadassadsfdasfnasdkfasnf';
$word='good mornigs nepal';
echo strlen($value) ."<br>" .str_word_count($word);
echo str_ireplace('Bb','vinod','awesome bb');
?>