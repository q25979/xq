<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>修改登录账号和密码</title>

</head>

<body>
<form method="post" action="">
<table border="1" width="960" style="display:block;margin:0 auto; display:block;">
  <tr>
    <td style="text-align:center" colspan="2">修改登录账号和密码</td>
  </tr>

  <tr>
    <td width="35%" style="text-align:right">新用户名：</td>
    <td width="65%">
    <input type="text" name="user" style="margin-left:30px; height:25px" />
    </td>
  </tr>

  <tr>
    <td width="35%" style="text-align:right">
    新的密码：
    </td>
    <td width="65%">
    <input type="password" name="pwd" style="margin-left:30px; height:25px" />
    </td>
  </tr>

  <tr>
    <td colspan="2" style="text-align:center">
    <input type="submit" name="submit" value="修  改"/>
    </td>
  </tr>
</table>
</form>

<?php
	//修改用户名和登录密码
	require('conn.php');
	if(isset($_POST['submit']))
	{
		$user=$_POST["user"];
		$pwd=$_POST["pwd"];
		if((!empty($user))&&(!empty($pwd))){
		$sql="update user set username='$user',pwd='$pwd'";
		if(mysql_query($sql,$conn)){
			echo "<script>alert('修改成功!请重新登录');
			location.href='login.php'</script>";}
		else{echo "<script>alert('修改失败!');location.href='manger_update.php?section=4'</script>";}}
		else{
			echo "<script>alert('用户名或密码不能为空!');
			location.href='manger_update.php?section=4'</script>";}
	}
	mysql_close($conn);
?>
</body>
</html>