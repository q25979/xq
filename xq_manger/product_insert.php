<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>添加产品</title>
</head>

<body>
<h1 style="text-align:center">添加产品</h1>
<form method="post" action="" enctype="multipart/form-data">
<table width="960" style="margin:0 auto;" border="1">
  <tr>
    <td width="35%"style="text-align:right">产品名称:</td>
    <td width="65%">
    <input type="text" name="producttype" style="margin-left:30px; height:25px;"/>*
    </td>
  </tr>
 
  <tr>
    <td width="35%"style="text-align:right">产品详情:</td>
    <td>
    <?php include("fckeditor/fckeditor_php5.php");
	$oFCKeditor=new FCKeditor('content');
	$oFCKeditor->BasePath='fckeditor/';
	$oFCKeditor->Width='95%';
	$oFCKeditor->Height='270px';
	$oFCKeditor->Create();?>*
    </td>
  </tr>
  <tr>
    <td width="35%"style="text-align:right">上传产品图:</td>
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
</form>

<?php
	//增添产品;
	error_reporting(0);
	date_default_timezone_set("PRC");
	require("conn.php");
	if(isset($_POST['sub'])){
	$producttype=$_POST["producttype"];
	//$author=$_POST["author"];
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
	if((!empty($producttype))
	&&(!empty($content))&&(!empty($name)))
	{
	$sql="insert into product(producttype,content,time,
	filepath)values('$producttype','$content','$time','$folderpath')";
	if(mysql_query($sql))
	{echo "<script>alert('添加产品成功!');
	location.href='manger_update.php?section=6'</script>";}
	else{echo "<script>alert('添加产品失败!');location.href='manger_update.php'</script>";}}
	else{echo "<script>alert('带*号的内容不能为空!');
	location.href='manger_update.php?section=6'</script>";}
}
	mysql_close($conn);
?>
</body>
</html>