<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>添加普通新闻</title>
</head>

<body>
<h1 style="text-align:center">添加普通新闻</h1>
<form method="post" action="" enctype="multipart/form-data">
<table width="960" style="margin:0 auto;" border="1">
  <tr>
    <td width="35%"style="text-align:right">新闻标题:</td>
    <td width="65%">
    <input type="text" name="title" style="margin-left:30px; height:25px;"/>*
    </td>
  </tr>
  <tr>
    <td width="35%"style="text-align:right">发布者:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="65%">
    <input type="text" name="author" style="margin-left:30px; height:25px;"/>*
    </td>
  </tr>
  <tr>
    <td width="35%"style="text-align:right">新闻内容:</td>
    <td>
    <?php include("fckeditor/fckeditor_php5.php");
	$oFCKeditor=new FCKeditor('content');
	$oFCKeditor->BasePath='fckeditor/';
	$oFCKeditor->Width='95%';
	$oFCKeditor->Height='250px';
	$oFCKeditor->Create();?>*
    </td>
  </tr>
  <tr>
    <td colspan="2"> 
    <input type="submit" name="submit" value="增  加" style="margin-left:329px;height:25px;"/>
    </td>
  </tr>
</table>
</form>

<?php
	//增添新闻;
	date_default_timezone_set("PRC");
	require("conn.php");
	if(isset($_POST['submit'])){
	$title=$_POST["title"];
	$author=$_POST["author"];
	//$lanmu=$_POST["lanmu"];
	$content=$_POST["content"];
	$time=date("Y-m-d H:i:s");
	/*
	if(!empty($_FILES)){
        if($_FILES["file"]["error"] == 0){
			if (file_exists("D:/wamp/www/xq_manger/img/" . $_FILES["file"]["name"])){
     			 echo $_FILES["file"]["name"] . " already exists. ";}
    		else{
      			 move_uploaded_file($_FILES["file"]["tmp_name"],
      			"D:/wamp/www/xq_manger/img/" . $_FILES["file"]["name"]);}
        }
    }*/
	//$folderpath="xq_manger/img/".$_FILES["file"]["name"];
	if((!empty($title))&&(!empty($author))&&(!empty($content))){ 
	$sql="insert into news(title,content,author,time)
	values('$title','$content','$author','$time')";
	if(mysql_query($sql))
	{echo "<script>alert('添加内容成功!');location.href='manger_update.php?section=1'</script>";}
	else{echo "<script>alert('添加内容失败!');location.href='manger_update.php'</script>";}}
	else{echo "<script>alert('带*号的内容不能为空!');
	location.href='manger_update.php'</script>";}
}
	mysql_close($conn);
?>
</body>
</html>

