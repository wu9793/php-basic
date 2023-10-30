<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
</head>

<body>
    <?php

    // 1等於登入成功，顯示成功還有"回登入頁"超連結
    // 登入未成功，導向登入頁面
    if (isset($_COOKIE['login']) && !empty($_COOKIE['login'])) {
        echo "<h3>登入成功</h3>";
        echo "<a href='login.php'>回登入頁</a>";
        echo "<a href='logout.php'>登出</a>";
    } else {
        // 未從登入頁面做登入流程
        setcookie("error","沒有登入相關驗證",time());  
        header("location:login.php");
    }



    ?>

</body>

</html>