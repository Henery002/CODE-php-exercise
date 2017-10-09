<?php
/*
* 字符串处理函数四
*/

/*
* 解析 URL，返回其组成部分  parse_url()
*/
$url = 'http://www.houdunwang.com/admin/index.php?uname=liming&age=26';
print_r(parse_url($url));
echo "<br/>";
var_export(parse_url($url));
echo "<br/>-----------------------<br/>";	
echo parse_url($url,PHP_URL_PATH);	//返回路径   /admin/index.php
echo "<br/>";
echo parse_url($url,PHP_URL_QUERY);	//uname=liming&age=26

echo "<hr/>";
/*
* 编码URL字符串、解码字符串
*/
$urlstr = '网易云';
echo '编码为：'.urlencode($urlstr);		//%E7%BD%91%E6%98%93%E4%BA%91
echo "<br/>";
echo '解码为：'.urldecode(urlencode($urlstr));

echo "<br/>";
$uname = '南京栖霞&玄武鼓楼';
echo "<a href='3-05.php?uname=".urlencode($uname)."'>网易云</a>";
echo "<br/>";
echo $_GET['uname'];
echo "<br/>";

echo "<hr/>";
/*
* 将字符串转换为HTML实体
*/
$str31 = '<h2>网易云-后盾$&><""网houdunwang视频"插入"教程\'单引号内容\'</h2>';
echo htmlentities($str31).'<br/>';
echo '只转换双引号：'.htmlentities($str31,ENT_COMPAT).'<br/>';
echo '转换单双引号：'.htmlentities($str31,ENT_QUOTES).'<br/>';
echo '不转换引号：'.htmlentities($str31,ENT_IGNORE).'<br/>';
echo "<br/>-----------------------<br/>";
echo htmlspecialchars($str31)."<br/>";

echo "<hr/>";
$new = htmlspecialchars("<a href='test'>Test测试部分</a>", ENT_QUOTES);
echo $new;

?>