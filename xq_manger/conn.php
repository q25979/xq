<?php
	error_reporting(0);
	//连接数据库
	$conn=@mysql_connect("localhost","root","004369");
	if(!$conn)
	{
		echo "建立数据库连接失败";
	}
	mysql_query("set names 'utf8'");
	mysql_select_db("xqdb",$conn);
?>
