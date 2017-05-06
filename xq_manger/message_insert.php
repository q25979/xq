<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>

<body>
<?php
	error_reporting(0);
	date_default_timezone_set("PRC"); //时间格式
	require('conn.php');
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$tel=$_POST['tel'];
	$qq=$_POST['qq'];
	$content=$_POST['content'];
	//2017年4月8日14:58:05新增 时间与ip
	$time = date("Y-m-d H:i:s");
	$addr = $_SERVER["REMOTE_ADDR"];

	$sql="insert into message(name,sex,tel,qq,time,addr,content) values ('$name','$sex','$tel','qq','$time','$addr','$content')";

	if(mysql_query($sql)){
		echo "success";	
	}
	else{echo ''.mysql_error();}
?>
</body>
</html>