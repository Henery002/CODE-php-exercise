<?php
/*
	1.getType(变量/常量)	检测数据类型
*/
	$obj = '后盾网';		//string
	$obj = 12;				//integer
	$obj = 1.0;				//double
	echo getType($obj);

	echo "<hr>";

	//例
	//建一个类，定义属性和方法
	class c{
		public $c;
		function getEatFood($men){
			echo $men.'在吃饭';
		}
	}

	$hd = new c();

	//检测$hd的数据类型
	echo getType($hd);		//object
	echo "<br>";
	echo $hd->getEatFood('You');	//

	echo "<hr>";

	//定义一个常量
	define('URL',123.0);
	define('URL','www.baidu.com');
	echo URL;
	echo "<br>";
	echo getType('URL');	//不论是123.0，还是'www.baodu,com'常量URL都是 string 类型

	echo "<hr>";

/*
	2.is_int();
	3.is_float();
	4.is_array();
	5.is_object();
	6.is_null();
	7.is_resource();
	8.is_bool();
*/

	//例：
	define('URL2','www.baidu.com');
	echo getType(URL2);				//string
	echo "<br>";
	echo is_string(URL2);			//返回1，表明是字符串
	echo is_int(URL2);				//无返回值，表明不是整型

	echo "<hr><br>";

	//例：
	// $arr = '你好';
	$arr = array('张三','李四','孙五','赵六','田七','王八');
	if(is_array($arr)){
		foreach ($arr as $key => $value) {
			echo "学员".$key."的名称是：".$value."<br>";
		}
	}else {
		echo "无人员名单";
	}

	echo "<hr>";
	var_dump((bool) "false");	//bool(true)

	echo "<hr>";

?>
	
<p>流程控制的替代语法</p>

<?php if($obj) : ?>
<h2>变量$obj存在时显示</h2>
<?php endif; ?>

<?php
	if($obj > 10):
		echo "变量大于10";
	elseif($obj == 10):
		echo "变量等于10";
	else:
		echo "变量小于10";
	endif;
?>	


