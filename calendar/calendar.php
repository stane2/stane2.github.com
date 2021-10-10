<?php
echo "<style>table{margin:0 auto}td{border:1px solid #eee}</style>";
date_default_timezone_set("PRC"); //设置时区
$year = date("Y"); //本年度的年份
$month = date("n"); //本月的月份
$day = date("j"); //获取当天的天数
$wd_arr = array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"); //星期数组
$wd = date("w", mktime(0, 0, 0, $month, 1, $year)); //计算当月第一天是星期几
echo "<table class='col-xs-12 column'><tr>";
for ($i = 0; $i < 7; $i++) {
    echo "<td>$wd_arr[$i]</td>"; //输出星期数组
}
echo "</tr>";
$tnum = $wd + date("t", mktime(0, 0, 0, $month, 1, $year)); //计算星期几加上当月的天数
for ($i = 0; $i < $tnum; $i++) {
    $date = $i + 1 - $wd; //计算日数在表格中位置
    if ($i % 7 == 0) {
        echo "<tr align=center>"; //一行的开始
    }
    echo "<td>";
    if ($i >= $wd) {
        if ($date == $day && $month == date("n") && $year == date("Y")) {
            //如果恰好是系统当天的日期则将当天日期设置为红色并加粗
            echo "<b><font color=red>" . $day . "</font></b>";
        } else {
            echo $date; //输出日期
        }
        echo "</td>";
        if ($i % 7 == 6)
            echo "</tr>"; //一行结束
    }
}
echo "</table>";
?>
