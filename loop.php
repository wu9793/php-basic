<?php
$n=10;

for($i=1;$i<=100;$i=$i+2){
echo $i;
echo ",";
}

echo"<hr>";

for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo",";
}

echo"<hr>";

$a=82;
$flag=true;
for($i=2;$i<($a/2);$i++){
    echo "$a 除以 $i 餘數".($a % $i);
    if(($a % $i)==0){
        $flag=false;
        echo"<br>";
        break;
    }

    echo"<br>";
}
    if($flag==true){
        echo $a . "是質數";
    }else{
        echo $a . "不是質數";
    }

