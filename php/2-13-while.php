<?php
/*
	流程控制语句
		1.if语句
		2.switch语句
		3.while语句

*/
	//乘法口诀表
	$i = 1;
	echo "<table cellpadding='2' cellspacing='2' border='1'>";
	while($i <= 9){
		$j = 1;
		echo "<tr>";
		while($j <= $i){
			if($j % 2 > 0){
				echo "<td style='background-color:#ccc;color:#00f;'>";
			}else{
				echo "<td style='background-color:#f00;color:#fff;'>";
			}
			echo $i.'x'.$j.'='.$i*$j."\t\t\t\t";
			echo "</td>";
			$j ++;
		}
		echo "</tr>";
		$i ++;
	}
	echo "</table>";




?>