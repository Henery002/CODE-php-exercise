<?php
/*
* 字符串处理函数五
*/

/*
* 使用反斜杠引用字符串
*/
$str = "网易+云\课&*堂'视频教程'";
echo addslashes($str);		//网易+云\\课&*堂\'视频教程\'   转义 '  "  \  等
echo "<br/>";

echo "<hr/>";

echo "<pre>";
print_r(ini_get_all());
phpinfo();					// 输出关于 PHP 配置的信息


?>