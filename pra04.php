<h2>直角三角形</h2>
<?php

echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";
echo "<hr>";

/* echo "*<br>";
    echo "*";
    echo "<br>";
echo "**<br>";
    echo "*";
    echo "*";
    echo "<br>";
echo "***<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "****<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "*****<br>";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "<br>";
echo "<hr>";
$i  $j
0 < 1
1   2
2   3
3   4
4   5
 */

$amount=10;

 for($i=0;$i<$amount;$i++){
    for($j=0;$j<=$i;$j++){
    echo "*";
}
echo "<br>";
}
?>



<h2>倒直角三角形</h2>

<?php
for($i=$amount-1;$i>=0;$i--){ //行列數
    for($j=0;$j<=$i;$j++){
    echo "*"; //內圈印星星，跟顆數無關
}
echo "<br>";
}
?>

<style>
    *{
        font-family: 'Courier New', Courier, monospace;
        /* line-height: 10px; */
        
    }

</style>

<h2>正三角形</h2>
<?php
for($i=0;$i<$amount;$i++){ //行列數
    for($j=0;$j<($amount-1-$i);$j++){ //內圈印空格數
        echo "&nbsp;";
    }    
    for($k=0;$k<($i*2+1);$k++){ //內圈印星星
          echo "*";  
    }
     
echo "<br>";
}


?>



<h2>倒正三角形</h2>
<?php
for($i=$amount-1;$i>=0;$i--){ 
    for($j=0;$j<($amount-1-$i);$j++){
        echo "&nbsp;";
    }    
    for($k=0;$k<($i*2+1);$k++){
          echo "*";  
    }
     
echo "<br>";
}


?>


<h2>菱形</h2>
<?php
$mid=floor(($amount*2-1)/2);
for($i=0;$i<($amount*2-1);$i++){ 

    if($i<=$mid){
        $temp=$i;
    }else{
        $temp--;
    }

    for($j=0;$j<($mid-$temp);$j++){ 
        echo "&nbsp;";
    }    
    for($k=0;$k<($temp*2+1);$k++){
          echo "*";  
    }
   
    echo "<br>";
}


?>

<h2>矩形</h2>
<?php

for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
        echo "*";
        }else if($j==0 || $j==($amount-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    
    }
    echo "<br>";
}
?>


<h2>變形矩形</h2>
<?php

for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==($amount-1)){
        echo "*";
        }else if($i==$j || $i+$j==($amount-1)){
            echo "<span style='color:red'>*</span>";
        }
        else if($j==0 || $j==($amount-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    
    }
    echo "<br>";
}

?>