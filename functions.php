<?php
//返回给定长度的随机字符串
function random_text($count, $rm_similar = false) {
    //创建字符数组
    $chars = array_flip(array_merge(range(0, 9), range('A', 'Z')));
    //删除容易引起混淆的相似的单词
    if ($rm_similar) {
        unset($chars[0], $chars[1], $chars[2], 
                $chars[5], $chars[8], $chars['B'],
                $chars['I'], $chars['O'], $chars['Q'], 
                $chars['S'], $chars['U'], $chars['V'], 
                $chars['Z']);
    }
    //生成随机字符文本
    for($i=0,$text='';$i<$count;$i++){
        $text.=array_rand($chars);
    }
    return $text;
}