<?php


header('Content-Type: text/html; charset=utf8');
$conn = @ mysql_connect("localhost", "root", "","pc") or die("链接数据库出错了~");
mysql_select_db("pc", $conn);
mysql_query("set names 'utf8'"); //

function htmtocode($content) {
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","¡®",$content);
 //htmlspecialchars();



?>