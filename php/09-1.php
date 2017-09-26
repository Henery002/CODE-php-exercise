<?php
	$uname = empty($_POST['uname']) ? '未填写姓名' : $_POST['uname'];
	$age = empty($_POST['age']) ? '未填写年龄' : $_POST['age'];
	$tel = empty($_POST['tel']) ? '未填写电话' : $_POST['tel'];
	$qq = empty($_POST['qq']) ? '未填写QQ' : $_POST['qq'];
	$address = empty($_POST['address']) ? '未填写地址' : $_POST['address'];
	$comment = empty($_POST['comment']) ? '未填写评价' : $_POST['comment'];

	echo "姓名：{$uname}<br>年龄：{$age}<br>电话：{$tel}<br>QQ：{$qq}<br>地址：{$address}<br>评价：{$comment}";

