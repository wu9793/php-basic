<!-- 接收資料計算BMI -->
<?php
// 如果不是空的資料
if (!empty($_GET)) {
    if ($_GET['weight'] != "" && $_GET['height'] != "") {
        $weight = (!empty($_GET['weight'])) ? $_GET['weight'] : '沒有體重資料';
        $height = (!empty($_GET['height'])) ? $_GET['height'] : '沒有身高資料';

        $bmi = round($weight / ($height * $height), 2);
        header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");

        // echo "體重:" . $weight;
        // echo "身高:" . $height;
        // echo "體重:" . $_GET['weight'];
        // echo "身高:" . $_GET['height'];
    } else {
        header("location:bmi.php?m=請輸入資訊");
    }
} else {

    header("location:bmi.php?m=請輸入資訊");
}





?>