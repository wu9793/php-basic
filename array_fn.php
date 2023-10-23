<?php

$array=[3,4,6,10,30,23];



// $score=[
//     '姓名'=>'小明',
//     '成績'=>98
// ];

// $tmp=array_keys($array);
// $string=array_keys($score);
// echo "<pre>";
// print_r($string);
// echo "</pre>";


// echo in_array(23,$array);

// if(in_array(23,$array)){
//     echo"數字有在陣列中";
// }else{
//     echo "數字不在陣列";
// }

$ss="hello world";
$rr=explode(" ",$ss);
print_r($rr);

$tt=implode("--",$rr);
echo $tt;





echo "<pre>";
print_r($array);
echo "</pre>";


sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";


rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";



?>