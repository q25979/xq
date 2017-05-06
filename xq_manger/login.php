<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/xgxt_login.css" />
<title>信全后台-管理系统</title>
</head>
<body>

<div id="header">
	<div class="header_title">
		<span class="title_con">信全后台管理系统</span>
	</div>
</div>

<div id="content">
	<center>
		<div class="con">
		<div class="con_title">
			<span class="con_title_sp">欢迎登录信全管理系统</span>
		</div>
        <form method="post" action="">
		<div class="con_panel">
			<div class="con_input">
				<span>用户名：</span><input type="text" name="user" placeholder="用户名"/>
			</div>
			<div class="con_input">
				<span>密&nbsp;&nbsp;&nbsp;&nbsp;码：</span><input type="password" name="pwd"placeholder="密码"/>
			</div>
			
			<input type="submit" value="登    录" name="Submit"class="submit-btn"/>
		</div>
        </form>
	</div>
	</center>
</div>
<?php
	//登录页面
	require('conn.php');
	if(isset($_POST['Submit'])){
	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	$sql="select *from user";
	$result=mysql_query($sql);
	$row=mysql_fetch_assoc($result);
	if(($row['username'])==$user&&($row['pwd']==$pwd))
	{
		session_start();
		$_SESSION['admin']=$row['username'];
		echo "<script>location.href='manger_update.php'</script>";
	}
	elseif((empty($user)||$user!=$row['username'])||(empty($pwd)||$pwd!=$row['pwd']))
	{	
		unset($_SESSION['admin']);
		echo "<script>alert('用户名或密码错误！');history.go(-1)</script>";
	}
	mysql_close($conn);
}
?>
<div style="text-align:center;">
<p>来源:<a href="" target="_blank">tonepig</a></p>
</div>

</body>
</html>
