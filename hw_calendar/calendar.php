<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆作業</title>
    <style>
        .container {
            width: 60vw;
            height: 70vh;
            margin: auto;
            background-color: lightgray;
            margin-top: 15vh;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 30vw;
            height: 30vh;
            /* display: block; */
            margin: auto;
            margin-left: 20px;
            border: 3px double lightgray;
            border-collapse: collapse;
            text-align: center;
            margin-top: 30px;
        }

        td {
            padding: 15px 5px;

        }

        .link {
            bottom: 0;
            /* display: inline-block; */
            text-align: center;
        }
        .calendar{
            float: right;
            width: 60%;
        }
        .title{
            float: left;
            width: 40%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="calendar">
            <?php

            if (isset($_GET['month']) && isset($_GET['year'])) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date("Y");
            }

            echo "<h3>";
            echo date("西元{$year}年{$month}月");
            echo "</h3>";
            // 取得當前月份的第一天
            $thisFirstDay = date("{$year}-{$month}-1");
            echo date("d");
            // 取得當前月份的第一天是在星期幾（0為星期日，1為星期一，以此類推）
            // w 代表星期幾 0是星期日~6是星期六
            $thisFirstDate = date('w', strtotime($thisFirstDay));
            // 取得當前月份的總天數
            // t 代表總天數 28~31天
            $thisMonthDays = date('t');
            // 取得當前月份的最後一天
            $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
            // 計算本月需要多少周來顯示
            $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
            // 計算這個月第一個單元格是從什麼日期開始
            $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
            ?>
            <table>
                <tr>
                    <td>SUNDAY</td>
                    <td>MONDAY</td>
                    <td>TUESDAY</td>
                    <td>WEDNESDAY</td>
                    <td>THURSDAY</td>
                    <td>FRIDAY</td>
                    <td>SATURDAY</td>
                </tr>
                <?php
                // 迴圈生成表格的行
                for ($i = 0; $i < $weeks; $i++) {
                    echo "<tr>";
                    // 迴圈生成表格的列
                    for ($j = 0; $j < 7; $j++) {
                        $addDays = 7 * $i + $j;
                        $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                        // 判斷是否為週末，若是則添加灰色背景
                        if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                            echo "<td style='color:lightpink'>";
                        } else {
                            echo "<td>";
                        }
                        // 判斷日期是否屬於當前月份，是則顯示日期
                        if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                            echo date("j", $thisCellDate);
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
                <div class="link">
                    <?php
                    $nextYear = $year;
                    $prevYear = $year;

                    if (($month + 1) > 12) {
                        $next = 1;
                        $nextYear = $year + 1;
                    } else {
                        $next = $month + 1;
                    }

                    if (($month - 1) < 1) {
                        $prev = 12;
                        $prevYear = $year - 1;
                    } else {
                        $prev = $month - 1;
                    }
                    ?>
                    <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">上一個月</a>
                    <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">下一個月</a>
                </div>
        </div>
        <div class="title">
            <div class="img">
                
            </div>
        </div>
    </div>
</body>

</html>