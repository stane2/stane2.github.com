<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>投票统计</title>
    </head>
    <body>
        <form action="" method="post">
            <table class="col-xs-12 column" style="margin: 20px 0px;">
                <tr><td><b>你最喜欢的NBA球队：</b></td></tr>
                <tr><td><input type="radio" name="vote" value="火箭">火箭</td></tr>
                <tr><td><input type="radio" name="vote" value="湖人">湖人</td></tr>
                <tr><td><input type="radio" name="vote" value="快船">快船</td></tr>
                <tr><td><input type="submit" name="bt" value="我要投票"></td></tr>
            </table>
        </form>
        <?php
        $votefile = "vote.txt";
        if (!file_exists($votefile)) {
            $handle = fopen($votefile, "w+");
            fwrite($handle, "0|0|0");
            fclose($handle);
        }
        if (isset($_POST['bt'])) {
            if (isset($_POST['vote'])) {
                $vote = $_POST['vote'];
                $handle = fopen($votefile, "r+");
                $votestr = fread($handle, filesize($votefile));
                fclose($handle);
                $votearray = explode("|", $votestr);
                //var_dump($votearray);
                echo "<h3>投票完毕</h3>";
                if ($vote == '火箭')
                    $votearray[0] ++;
                if ($vote == '湖人')
                    $votearray[1] ++;
                if ($vote == '快船')
                    $votearray[2] ++;
                echo "目前火箭的支持票数为：" . $votearray[0] . "<br>";
                echo "目前湖人的支持票数为：" . $votearray[1] . "<br>";
                echo "目前快船的支持票数为：" . $votearray[2] . "<br>";
                $sum = $votearray[0] + $votearray[1] + $votearray[2];
                echo "总票数为：" . $sum . "<br>";
                $votestr2 = implode("|", $votearray);
                $handle = fopen($votefile, "w+");
                fwrite($handle, $votestr2);
                fclose($handle);
            }
            else {
                echo "<script>alert('未选择投票选项。!')</script>";
            }
        }
        ?>
    </body>
</html>
