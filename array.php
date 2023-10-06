<?php

// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新北市';

echo"<pre>";
print_r($a);
echo"</pre>";

echo $a[0];
echo $a[3];
echo"<br>";

$b=[];
$b['姓名']='吳立庭';
$b['地址']='新店區';
$b['tel']='0911111111';
$b['血型']='B';

echo"<pre>";
print_r($b);
echo"</pre>";

echo $b['姓名'];
echo"<hr>";

$c=[];
$c['name']='吳立庭';
$c['興趣']=['打球','看電視','追劇'];
echo"<pre>";
print_r($c);
echo"</pre>";
echo"<br>";

echo $a[3];
echo $b['地址'];
echo $c['name'];
echo $c['興趣'][0];

?>