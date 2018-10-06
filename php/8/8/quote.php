<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 15:55
 */
$text = "This is a link to http://www.wjgilmore.com/.";
echo preg_replace("/http:\/\/(.*)\//","<a href=\"\${0}\">\${0}</a>",$text);