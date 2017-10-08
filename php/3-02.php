<?php
/*
*
* 字符串处理函数
*
*
*/

/*
* 字符串填充函数
*/

echo "<hr/>";
/*
* md5加密
*/
$pwd = 'houdunwang';
echo 'md5加密后的密文是：'.md5($pwd);

/*
if(md5($_GET['pwd']) == 'bf320fa3295cf4770c58db4db5a8ef04'){
	echo "密码正确，登录成功！";
}
*/

echo "<hr/>";
/*
* 格式化金额字符串函数
*/
$number = 1258090;
echo number_format($number,3);
echo "<br>";
echo number_format($number,3,'|','+');

echo "<hr/>";
/*
* 将字符串拆分成数组
*/
$str = 'www.houdunwang.com';
//三种输出方式
var_dump(explode('.',$str,2));	
echo "<br>";
print_r(explode('.',$str,1));
echo "<br>";
var_export(explode('.',$str,3));

echo "<hr/>";
/*
* 将数组元素拼接成字符串
*/
$array = array('后盾网','www.houdunwang.com','点此');
print_r(implode('_', $array));

?>