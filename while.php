<?php

$sum=0;
$i=1;

while($i<=100){

    $sum +=$i;

    $i++;
}

echo "1加到100的總和是:" .$sum;
echo "<hr>";

$sum=0;
$i=1;

while($i<=100){

    echo "當$i=".$i."時";
    echo '$sum+$i的結果是';
    echo $sum . " + ". $i."=";
    echo $sum+$i;
    echo "<br>";

    $sum+$i;
    $i++;
}