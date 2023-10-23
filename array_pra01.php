<style>
    table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<h3>利用程式產生陣列九九乘法表</h3>
<?php

$nine=[];

for($i=1;$i<=9;$i++){

    for($j=1;$j<=9;$j++){
        $nine[]="$i * $j = ".($i * $j);
    }
}
// print_r($nine);


foreach($nine as $idx => $value){
    echo $value;
    if($idx%9==8){
        echo "<br>";
    }
}

echo "<hr>";

echo "<table>";
foreach($nine as $idx => $value){
    // echo $value;
    if($idx%9==0){
        echo"<tr>
                <td>$value</td>";
    }else if($idx%9==8){
        echo  "<td>$value</td>
            </tr>";
    }else{
        echo "<td>$value</td>";
    }
    

}
echo "</table>";
echo "<br><hr>";
