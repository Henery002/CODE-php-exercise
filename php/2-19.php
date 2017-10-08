<?php
/*
* 函数
*/
$bbs = '后盾网视频';
function fun(){
	$bbs = 'www.houdunwang.com';
	return $bbs;
}
$bbs = fun();

echo $bbs;

echo "<hr>";

/*
* 全局变量 global
*/
$aaa = '视频教程';
function fun2(){
	global $aaa;		//定义一个全局变量
	$aaa = 'www.baidu.com';
	unset($aaa);
	$aaa = '已被更改<br/>';
	echo $aaa;
}
fun2();	//函数执行后，定义的全局变量会将函数体外部的$aaa覆盖
echo $aaa;	//任然是定义的全局变量的值

echo "<hr>";

/*
* 按值传递 / 按址传递
*/
$name = '外部变量 -- ';
function fun3($name){
	$name = $name.'按值传递<br/>';
	// echo $name;
}
function fun4(&$name){
	$name = $name.'按址传递<br/>';
}
fun3($name);	//函数fun3中按值传递时，不会改变函数外部变量的值
fun4($name);	//函数fun4中按址传递时，会将外部变量一起改变
echo $name;
				
echo "<hr/>";

/*
* 内置函数
*/
function stu_name(){
	$arr = func_get_args();	//接收函数的实参数组
	foreach ($arr as $key => $value) {
		echo "序号{$key}的值是：".$value.'<br/>';
	}
	echo '共'.func_num_args().'条数据';	
	echo "<br>";
	echo '其中第3条数据是'.func_get_arg(3);

}
stu_name('一','二','三','四','五','六','七','八','九');

echo "<hr/>";

/*
* 变量函数
*/

/*
* 递归调用
* 阶乘示例
*/
function recu($i){
	if($i>1){
		$s = $i*recu($i-1);
	}else{
		$s = $i;
	}
	return $s;		
}
echo recu(5);	//5x( 4*( 3*( 2*1 ) ) )





?>