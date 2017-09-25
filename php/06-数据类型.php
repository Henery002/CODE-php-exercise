<?php
	/*1.数据类型*/
	$number = 1234;
	var_dump($number);

	echo "<hr>";

	$str0 = '视频教\n程 - $number'.'<br>';
	$str1 = "视频教\n\t程 - $number".'<br>';	//双引号可以支持解析变量
	$str2 = "视频教程 - $number网站"."<br>";			//解析出错
	$str3 = "视频教程 - {$number}网站"."<br>";			//
	$str4 = "后盾\"免费\"网"."<hr>";
	var_dump($str0,$str1,$str2,$str3,$str4);

	//2.定义一个常量 variable
	define('variable','一个常量');
	//检测一个常量是否存在，输出布尔值
	echo defined('variable');

	echo "<hr>";

	/*3.定界符*/
	function outputHtml(){
		$str10 = '定界符变量';
		echo <<<EOT
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<div>php定界符主体内容 - {$str10}啊</div>
			</body>
			</html>
EOT;
				//定界符结束符必须顶头写，不能有任何缩进和空格
	}
	outputHtml();


?>