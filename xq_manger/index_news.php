<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>添加首页新闻</title>
</head>

<body>
<h1 style="text-align:center">添加新闻</h1>
<form method="post" action="" enctype="multipart/form-data">
<table width="960" style="margin:0 auto;" border="1">
	  <tr>
	    <td width="35%" style="text-align:right;">新闻标题:</td>
	    <td width="65%">
	    <input type="text" name="title" style="margin-left:30px; height:25px;"/>*
	    </td>
	  </tr>
	  <tr>
	    <td width="35%" style="text-align:right">发布者:&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td width="65%">
	    <input type="text" name="author" style="margin-left:30px; height:25px;"/>*
	    </td>
	  </tr>
      
      <tr>
	    <td width="35%" style="text-align:right">首页新闻描述:</td>
	    <td width="65%"> 
	    <textarea name="abstract" cols="30" rows="10" 
        style="margin-left:30px; height:25px;"></textarea>*
	    </td>
	  </tr>
	  <tr>
	    <td width="35%" style="text-align:right">新闻内容:</td>
	    <td>
	    <?php include("fckeditor/fckeditor_php5.php");
		$oFCKeditor=new FCKeditor('content');
		$oFCKeditor->BasePath='fckeditor/';
		$oFCKeditor->Width='95%';
		$oFCKeditor->Height='200px';
		$oFCKeditor->Create();?>*
	    </td>
	  </tr>
	  <tr>
	    <td width="35%" style="text-align:right">上传图片:</td>
	    <td>
	    <input type="file" name="filepath" style="margin-left:30px; height:25px;"/>*
	    </td>
	  </tr>
	  <tr>
	    <td colspan="2"> 
	    <input type="submit" name="sub" value="增  加" style="margin-left:329px;height:25px;"/>
	    </td>	    
	  </tr>
	</table>
	<div style="height: 100; width: 100%"></div>
</form>

<?php
	//增添新闻;
	error_reporting(0);
	date_default_timezone_set("PRC");
	require("conn.php");
	if(isset($_POST['sub'])){
	$title=$_POST["title"];
	$author=$_POST["author"];
	$abstract=$_POST["abstract"];
	$content=$_POST["content"];
	$time=date("Y-m-d H:i:s");
	$up_folder=$_SERVER['DOCUMENT_ROOT']."/xq_manger/img/";
	if(!empty($_FILES)){
        if($_FILES["filepath"]["error"]== 0){
				$tmp_name = $_FILES["filepath"]["tmp_name"];
				$name = date('Ymd').rand(1000, 9999).".jpg";
			  	move_uploaded_file($tmp_name,$up_folder.$name);
        }
    }
	$folderpath="xq_manger/img/".$name;
	if((!empty($title))&&(!empty($author))
	&&(!empty($content))&&(!empty($abstract))&&(!empty($name)))
	{
	$sql="insert into news(title,content,author,time,abstract,
	filepath)values('$title','$content','$author','$time','$abstract','$folderpath')";
	if(mysql_query($sql))
	{echo "<script>alert('添加新闻成功!');
	location.href='manger_update.php?section=14'</script>";}
	else{echo "<script>alert('添加新闻失败!');location.href='manger_update.php'</script>";}}
	else{echo "<script>alert('带*号的内容不能为空!');
	location.href='manger_update.php?section=14'</script>";}
}
	mysql_close($conn);
?>
</body>
</html>

