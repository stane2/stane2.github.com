<?php

function findDir($dirName) {
    $num = 0; //统计子文件个数 
    $dir_handle = opendir($dirName); //打开目录
    echo '<table class="col-xs-12 column">';
    echo '<caption><h3>目录' . $dirName . '下的文件</h3></caption>';
    echo '<tr>';
    echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';
    while ($file = readdir($dir_handle)) {
        $dirFile = $dirName . '/' . $file;
        $num++;
        echo '<tr>';
        echo '<td>' . $file . '</td>';
        echo '<td>' . filesize($dirFile) . '</td>';
        echo '<td>' . filetype($dirFile) . '</td>';
        echo '<td>' . date('Y/n/t', filemtime($dirFile)) . '</td>';
        echo '</tr>';
    }
    echo "<tr><th colspan='4'>在 $dirName 目录下共有 $num 个子文件;</th></tr>";
    echo "</table>";
    closedir($dir_handle); //关闭目录
}

//调用函数，遍历目录
findDir('../');

