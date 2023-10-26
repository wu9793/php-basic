<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            text-align: center;
        }

        table,
        tr,
        td {
            border: 3px double lightgray;
            border-collapse: collapse;
            text-align: center;
        }

        td {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <?php
    echo "<h3>";
    echo date('西元Y年m月');
    echo "</h3>";
    // 取得當前年份
    $thisMonth = date("Y");
    // 取得當前月份的第一天
    $thisFirstDay = date("Y-m-1");
    // 取得當前月份的第一天是在星期幾（0為星期日，1為星期一，以此類推）
    // w 代表星期幾 0是星期日~6是星期六
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    // 取得當前月份的總天數
    // t 代表總天數 28~31天
    $thisMonthDays = date('t');
    // 取得當前月份的最後一天
    $thisLastDay = date("Y-m-$thisMonthDays");
    // 計算本月需要多少周來顯示
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    // 計算這個月第一個單元格是從什麼日期開始
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo $firstCell;
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    // 迴圈生成表格的行
    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        // 迴圈生成表格的列
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i + $j;
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            
            // 判斷是否為週末，若是則添加灰色背景
            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                echo "<td style='background-color:#ccc'>";
            } else {
                echo "<td>";
            }
            
            // 判斷日期是否屬於當前月份，是則顯示日期
            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                echo date("Y-m-d", $thisCellDate);
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <h3>西元2023年10月</h3>
    <div class="container">
        <table>
            <tr>
                <td>日</td>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td>六</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
            </tr>
            <tr>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
            </tr>
            <tr>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>

</html>