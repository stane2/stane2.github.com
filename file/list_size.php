<?php

/*
 *统计目录大小
 *@param string $dirName 目录名
 *@return double
 */
 
function dirSize($dirName)
{
   $dir_size = 0;
   if($dir_handle = @opendir($dirName))
   {
     while ($fileName = readdir($dir_handle))
     {
       /*排除两个特殊目录*/
       if($fileName != '.' && $fileName != '..')
       {
         $subFile = $dirName.'/'.$fileName;
         if(is_file($subFile))
         {
           $dir_size += filesize($subFile);
         }
         if(is_dir($subFile))
         {
           $dir_size += dirSize($subFile);
         }
       }
     }
     closedir($dir_handle);
     return $dir_size;
   }
 }
 /*传递当前目录下的test目录*/
 $dir_size = dirSize('../../chapter2');
 echo './test目录文件大小是：'.round($dir_size / pow(1024,1),2).'KB';