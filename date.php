<h2>日期與時間</h2>
<?php
date_default_timezone_set('Asia/Taipei');
echo date('y-m-d-l a:H:i:s');

?>


<h2>strtotime</h2>
<!-- 轉換成秒 -->
<?php
echo strtotime("now");
$time = strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s", $time);


$date1 = '2023-10-24';
$date2 = '2023-11-15';
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);

echo "<hr>";
echo $date1 . "到" . $date2 . "有" . $days . "天";

?>
<h2>計算下一次生日天數</h2>
<?php
$date = "1974-10-07";
$br = strtotime($date);
$diff = strtotime(date("Y") . "-" . date("m-d", $br));
$today = strtotime('now');
if ($diff > $today) {
    $days = ($diff - $today) / (60 * 60 * 24);
} else {
    $nextbr = strtotime("+1 year", $diff);
    $day = ($diff - $today) / (60 * 60 * 24);
}

echo "<hr>";
echo "距離下次生日:" . date("Y-m-d", $diff) . "還有" . floor($days) . "天";
?>
<br>
<hr>

<?php
date_default_timezone_set('Asia/Taipei');
echo date('Y/m/d');
echo "<br>";
echo date('m月d日l');
echo "<br>";
echo date('Y-m-d H:i:s');
echo "<br>";
echo date('Y-n-j G:i:s');
echo "<br>";
echo date('今天是西元Y年m月d日');
if (date("N") <= 5) {
    echo "上班日";
} else {
    echo "假日";
}
?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
<?php

$todayWeek = date("N");
$diff = 1 - $todayWeek;
$lastMonday = strtotime("$diff days");
$nextMonday = date("Y-m-d", strtotime("+1 week", $lastMonday));

for ($i = 0; $i < 5; $i++) {
    $nextMonday = date("Y-m-d", strtotime("+$i week", strtotime($nextMonday)));
    echo $nextMonday;
    echo "<br>";
}
?>
