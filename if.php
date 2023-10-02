<?php

$score = 55;

echo "我的成績:" . $score;
echo "<br>";
echo "判斷為:";
echo "<br>";

if ($score >= 60) {
    echo "及格";
} else {
    echo "不及格";
}

$level ="A";

echo "我的等級:" . $level;
echo "<br>";

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
}


