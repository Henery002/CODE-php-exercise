<?php
	/*数据类型*/
	/*
	1.布尔型：
		为 布尔假型 的类型：
		1.false
		2.0
		3.0.0
		4.空字符串
		5.字符串0
		6.NULL
		
		除了以上情况，均为 真true

	*/
	// $a = false;					//false
	// $a = 0;						//false
	// $a = 0.0;					//false
	// $a = '';						//false
	// $a = '0';					//false
	// $a = NULL;					//false

	// $a = '0.0';				//true
	// $a = undefined;			//true
	// $a = array(1,22,33,46);	//true
	
	/*if($a){
		echo "为真：".$a;
	}else{
		echo "不存在";
	}*/
	

	//例：
	/*$name = $_GET['uname'];
	if($name){
		echo "您输入的名字是：".$name;
	}else{
		echo "您还未输入名字，请输入";
	}*/

	/*
	2.数组：
		
	*/
	$arr = array('后盾网','网易云');
	echo $arr[0].'<br>';
	echo $arr[1].'<br>';

	echo '<hr>';

	/*
	3.对象：
		定义一个对象
	*/
	class hdw{
		
		public $url = 'www.houdunwang.com';

		function say(){
			echo "欢迎学习php课程";
		}
	}

	$fun = new hdw();

	// var_dump($fun);
	echo $fun->url;
	echo "<br><br>";
	echo $fun->say();

	echo "<hr>";

	/*
	4.资源(resource)
		
	*/

	/*
	5.NULL
		空类型
	*/
	$something = '网易云';
	// var_dump($something);
	echo isset($something);		//检测变量是否存在，返回布尔值
	unset($something);			//销毁变量
	var_dump($something);		//NULL

	echo isset($something);		//不存在时，无返回值。



?>

