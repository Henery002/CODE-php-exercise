<?php
/*
* 字符串处理函数二
*/

/*
* 字符串输出
*/
$str1 = '厚度网，';
$str2 = '视频教程';
$arr = array('12',34,77.8);
$num = 349;
echo $str1,$str2;
echo "<br/>";
print($str1);
echo "<br/>";
print_r($arr);
echo "<br/>";
printf("%.2f",$num);	//浮点型
echo "<br/>";
printf("%u",$num);		//整型
echo "<hr/>";

/*
* 字符截取
*/
$str12 = '网易云课堂视频教程';
$str13 = 'www.houdunwang.com';
echo (substr($str12, 9, 3));	//从第3个汉字开始，截取一个汉字并返回
echo "<br/>";
echo (substr($str13, 6));
echo "<hr/>";
echo (strchr($str13,'n'));	//同strstr




?>