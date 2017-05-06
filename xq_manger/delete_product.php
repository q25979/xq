<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>

<body>
<?php
	error_reporting(0);
	require('conn.php');
	$act=$_REQUEST["act"];
	if($act=="del")
	{
		$number=intval($_GET["number"]);
		$sql="delete from product where ID=$number";
		if(mysql_query($sql))
		{
			echo 2;
		}
	}

?>
</body>
</html>