<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set("PRC"); //设置时区
echo "<style>table{margin:0 auto}td{border:1px solid #eee}</style>";
$year = $_GET['year'];        //获得地址栏的年份
$month = $_GET['month'];       //获得地址栏的月份
if (empty($year))
    $year = date("Y");       //初始化为本年度的年份 
if (empty($month))
    $month = date("n");      //初始化为本月的月份 
$day = date("j");         //获取当天的天数
$wd_ar = array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");   //星期数组 
$wd = date("w", mktime(0, 0, 0, $month, 1, $year));    //计算当月第一天是星期几
//年份的链接 
$y_lnk1 = $year <= 1970 ? $year = 1970 : $year - 1;     //上一年
$y_lnk2 = $year >= 2037 ? $year = 2037 : $year + 1;     //下一年
//月份的链接 
$m_lnk1 = $month <= 1 ? $month = 1 : $month - 1;     //上个月
$m_lnk2 = $month >= 12 ? $month = 12 : $month + 1;    //下个月
echo "<table><tr>";
//输出年份，单击“<”链接跳到上一年，单击“>”链接跳到下一年
echo "<td colspan=4><a href='calendar_ext.php?year=$y_lnk1&month=$month'>
       	<</a>" . $year . "年<a href='calendar_ext.php?year=$y_lnk2&month=$month'>></a></td>";
//输出月份，单击“<”链接跳到上个月，单击“>”链接跳到下个月
echo "<td colspan=3><a href='calendar_ext.php?year=$year&month=$m_lnk1'>
        	<</a>" . $month . "月<a href='calendar_ext.php?year=$year&month=$m_lnk2'>></a></td> </tr>";
echo "<tr align=center>";
for ($i = 0; $i < 7; $i++) {
    echo "<td>$wd_ar[$i]</td> ";     //输出星期数组
}
echo "</tr>";
$tnum = $wd + date("t", mktime(0, 0, 0, $month, 1, $year));   //计算星期几加上当月的天数
for ($i = 0; $i < $tnum; $i++) {
    $date = $i + 1 - $wd;       //计算日数在表格中的位置
    if ($i % 7 == 0)
        echo "<tr align=center>";    //一行的开始 
    echo "<td>";
    if ($i >= $wd) {
        if ($date == $day && $month == date("n") && $year == date("Y"))
        //如果恰好是系统当天的日期则将当天设置为红色并加粗
            echo "<b><font color=red>" . $day . "</font></b>";
        else
            echo $date;      //输出日数
    }
    echo "</td> ";
    if ($i % 7 == 6)
        echo "</tr> ";      //一行结束
}
echo "</table>";
?>
 