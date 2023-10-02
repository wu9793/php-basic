<?php

$score = 87;

echo "我的成績:" . $score;
echo "<br>";
echo "判斷為:";
echo "<br>";

if ($score >= 60) {
    echo "及格";
} else {
    echo "不及格";
}


if($score>=90 && $score<=100){
    $level="A";
}
if($score>=80 && $score<=89){
    $level="B";
}
if($score>=70 && $score<=79){
    $level="C";
}
if($score>=60 && $score<=69){
    $level="D";
}
if($score>=0 && $score<=59){
    $level="E";
}

//$level ="A";

echo "我的等級:" . $level;
echo "<br>";
echo "判斷為:";

switch ($level) {
    case "A":
        echo "表現優良";
        break;
    case "B":
        echo "值得肯定";
        break;
    case "C":
        echo "要再加油";
        break;
    case "D":
        echo "需要加強";
        break;
        default:
        echo "是否無心學習";
}


