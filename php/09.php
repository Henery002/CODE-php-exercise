<?php
/*
	1.变量类型的转换
		1.自由转换
		2.强制转换
*/
	$a = 100;
	$b = '12306后盾网';
	$b2 = '后盾网';

	$c = (string)$a;		//强制转换
	$d = (int)$b;
	$d2 = (int)$b2;

	var_dump($a);			//int(100)
	echo "<br>";
	var_dump($c);			//string(3) '100'
	echo '<br>';
	var_dump($d);			//int(12306)
	echo "<br>";
	var_dump($d2);			//int(0)，转换成 0 ，因为在转换为整形时，未查找到开头的数字

	echo "<hr>";

/*
	1.变量类型的转换
		3.setType()
*/
	$a = '2017前端开发';
	setType($a,'float');	//通过setType()设置变量的类型，会直接改变原变量
	var_dump($a);			//float(2017)

	echo "<hr><p>【4】</p>";

/*
	1.变量类型的转换
		4.具体的转换函数	=> 只针对标量类型的变量。如：对象、数组类型无法转换为字符串
			intval();		//转换为整型
			floatval();		//...浮点型
			strval();		//...字符串型
		[注]：无 arrayval()
*/
	$aa = '450';
	$bb = strval($aa);		//不会改变原变量
	var_dump($aa);			//string(3) "450"
	echo "<br>";
	var_dump($bb);			//string(3) "450"
	echo "<br>";

	//定义一个对象，错误示例
	class user{
		function fun(){
			echo "对象类型";
		}
	}
	$abc = new user();
	// $temp = strval($abc);	//报错！Object of class user could not be converted to string
	// $temp = (string)$abc;	//相同错误
	// setType($abc,'string');	//相同错误
	var_dump($temp);

	echo "<hr>";
	echo "------------------------<br>";
	echo "------------------------";


?>

<!DOCTYPE html>
<html>
<head>
	<title>表单提交联系</title>
</head>
<body>
	<form action="09-1.php" method="post">
		名称：<input type="text" name="uname" /><br>
		年龄：<input type="text" name="age" /><br>
		电话：<input type="text" name='tel' /><br>
		地址：<input type="text" name="address" /><br>
		QQ  ：<input type="text" name="qq" /><br>
		自我评价：<textarea cols="30" rows="10" name="comment"></textarea><br>
		<input type="submit" value="提交表单"><br>
		<input type="reset" value="重置">
	</form>
</body>
</html>