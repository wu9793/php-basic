<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>

<body>
    <?php
    // 1等於登入成功，顯示成功還有"回登入頁"超連結
    // 登入未成功，導向登入頁面
    if ($_GET['login'] == 1) {
        echo "<h3>登入成功</h3>";
        echo "<a herf='login.php?login=1'>回登入頁</a>";
    } else {
        header("location:login.php");
    }



    ?>

</body>

</html>