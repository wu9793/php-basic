<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        .login-in {
            margin-top: 300px;
            border: 1px solid black;
            width: 300px;
            height: 10vh;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="login-in">
        <?php

        session_start();
        // 如果有辨識到m變數，便出現變數內容
        // m 變數是錯誤訊息
        if (isset($_COOKIE['error'])) {
            echo "<span style='color:red'>" . $_COOKIE['error'] . "</span>";
            unset($_COOKIE['error']); 
        }
        //如果辨識到 login變數以及變數內容等於1，顯示"歡迎你"及以下表單
        if (isset($_COOKIE['login']) && !empty($_COOKIE['login'])) {
            echo $_COOKIE['login']."歡迎你";
            echo "<a href='logout.php'>登出</a>";
        } else {

        ?>
            <form action="check.php" method="post">
                <div>
                    <label for="acc">帳號</label>
                    <input type="text" name="acc" id="acc">
                </div>
                <div>
                    <label for="pw">密碼</label>
                    <input type="password" name="pw" id="pw">
                </div>
                <div>
                    <input type="submit" value="登入">
                    <input type="reset" value="重置">
                </div>
            </form>

        <?php
        }
        ?>
    </div>
</body>

</html>