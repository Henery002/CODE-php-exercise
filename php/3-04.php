<?php
/*
* 字符串处理函数三
*/

/*
* 字符串替换
*/
$url = 'www.hdmooc.com';
$search = array('www','h','com');
$replace = array('Www','H','CoM');
echo str_replace($search, $replace, $url, $k);
echo str_ireplace($search, $replace, $url);
echo "<br/>";
echo $k;

echo "<hr/>";
/*
* 字符串比较函数
* strcmp()、strcasecmp()、strnatcmp()、...
*/
echo strcmp('houdunwang','houdunwanG');		//1。ASCII码中，g > G
echo "<br/>";
echo strcasecmp('houdunwang','houdunwanG');	//0，不区分大小写，所以 =
echo "<br/>";
echo strcmp('10','2');		//-1，按字符串比较
echo "<br/>";
echo strnatcmp('10','2');	//1，按数值比较
echo "<br/>";
echo strncmp('1001','1002',3);	//0

echo "<hr/>";
/*
* similar_text()
*/
echo similar_text('abcdefg', 'cgccc');	//2。c g 相同
echo "<br/>";
similar_text('abcdefg', 'cgccc', $percent);
echo $percent;	//返回相似度百分比 33.333333333 （2/((7+5)/2)）

echo "<hr/>";
$str21 = 'houdunwang.com';
echo strtr($str21,'hwg','HWM');
echo "<br/>";
$array_replace = array('h'=>'H','w'=>'W','g'=>'Z');
echo strtr($str21,$array_replace);

echo "<hr/>";
/*
* substr_count()
*/
$str31 = 'This is a test';
echo substr_count($str31, 'is', 3, 3);	//0  因为指定从下标为3的位置往后3个字符长度开始查找，$str31就变成了 s i ，所以查找不到，返回0个


?>