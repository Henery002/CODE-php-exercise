<?php
/*
	1.运算符		
		1.4逻辑运算符
			1.逻辑与	and / &&
			2.逻辑或	or  / ||
*/

/*
		1.5位运算符
			1.按位与	&

*/	
	$a = 10;
	$b = 12;
	//进制转换的两种方式
	echo decbin($a);
		echo "<br>";
	echo base_convert($b, 10, 2);
		echo "<hr>";
	echo decbin($a & $b).' -- 按位与';
		echo "<br>----------<br>";
	echo decbin($a | $b).' -- 按位或';
		echo "<br>----------<br>";
	echo decbin($a ^ $b).' -- 按位异或';
		echo "<br>----------<br>";
	echo decbin(~$a)." -- {$a}的按位非<br>";
	echo decbin(~$b)." -- {$b}的按位非";
		echo "<hr>";

	echo decbin($a << 2)." -- {$a}的左移2位<br>";
	echo decbin($a >> 2)." -- {$a}的右移2位<br>";










?>