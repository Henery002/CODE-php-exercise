<?php
/*
	1.运算符
		1.算数运算符
		2.递增/递减运算符
		3.比较运算符
		4.逻辑运算符
		5.位运算符
		6.其他运算符

*/
	//1.1算数运算符
	$a = 100;
	$b = 12.6;
	echo $a+$b;

	echo "<hr>【比较运算符】<br><br>";

	//1.3比较运算符
	//例：
	$user_arr = array('admin','root','test1');
	$upwd_arr = array('admin' => 1234, 'root' => 1111, 'test1' => 'adc123');

	$uname = isset($_GET['uname']) ? $_GET['uname'] : '';
	$upwd = isset($_GET['pwd']) ? $_GET['pwd'] : '';

	if(in_array($uname, $user_arr)){
		if($upwd == $upwd_arr[$uname]){
			echo '<h2 style="color:#0f0;">登录成功，可以进行后续操作</h2>';
		}else{
			echo '<h2 style="color:#f00;">密码错误</h2>';
		}
	}else{
		echo '<h2 style="color:#f00;">用户名不存在</h2>';
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>表单提交到数据库</title>
</head>
<body>	
	<form method="get" action="10.php">
		用户名：<input type="text" name="uname" /><br>
		密码：<input type="password" name="pwd" /><br>
		<input type="submit" value="提交验证">
	</form>

</body>
</html>