<h1>尋找字串</h1>
<?php
$sourse="印出尋找到的單字或字母所在句子中的位置";
$target="中的";

$flag="沒找到";
$start=0;//從哪裡開始找
$pos=0;
while($flag=="沒找到"){

    $tmp=mb_substr($sourse,$start,mb_strlen($target));
    if($tmp==$target){
        $flag="找到";
        break;
    }
    $start++;
    $pos++;
}

echo "找到了；位置在".$start;
echo "<br>";
echo "原始字串-$sourse";
echo "<br>";
echo "尋找目標-$target";



?>