<?php
$n=10;
// 第一個迴圈：從1到100以2為步進值遞增
for($i=1;$i<=100;$i=$i+2){
echo $i; // 輸出$i的值
echo ","; // 輸出一個逗號
}

echo"<hr>";
// 第二個迴圈：從1到$n
for($i=1;$i<=$n;$i++){
    echo $i*10; //輸出$i乘以10的結果
    echo",";
}

echo"<hr>";

$a=82;
$flag=true;
// 第三個迴圈：從2開始，到$a的一半之前
//$a=4 時，沒有小於$i，修改成<=
for($i=2;$i<=($a/2);$i++){
    // 輸出計算結果："$a 除以 $i 餘數" 以及實際的餘數
    echo "$a 除以 $i 餘數".($a % $i);
    if(($a % $i)==0){
        // 如果$a能被$i整除，將$flag設為false
        $flag=false;
        echo"<br>";
        // 跳出迴圈
        break;
    }

    echo"<br>";
}
    if($flag==true){
        // 如果$flag為true，輸出$a是質數
        echo $a . "是質數";
    }else{
        // 如果$flag為false，輸出$a不是質數
        echo $a . "不是質數";
    }

