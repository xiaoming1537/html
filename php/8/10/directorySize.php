<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/10
 * Time: 15:13
 */
function directorySize($directory){
    $directorySize = 0;
    //打开目录读取其内容
    if ($dh = @opendir($directory)){

        //迭代处理每个目录项
        while (($filename=readdir ($dh))){

            //过滤掉一些目录项
            if ($filename != "." && $filename !="..")
            {

                //文件，确定大小并添加到总大小
                if (is_file($directory."/".$filename))
                    $directorySize += filesize($directory."/".$filename);
                //新目录，开始递归
                if (is_file($directory."/".$filename))
                    $directorySize += directorySize($directory."/".$filename);

            }
        }
    }
    @closedir($dh);
    return $directorySize;

}
$directory = '/user/book/chapter10/';
$totalSize = round((directorySize($directory)/1048576),2);
printf("sf  %s: %f",$directory,$directorySize);