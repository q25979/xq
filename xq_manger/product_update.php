<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>修改产品</title>


</head>

<body>
<?php
	error_reporting(0);
	require('conn.php');
	$updateid=intval($_GET['updateid']);
	$sql="select *from product where ID = $updateid";
	$result=mysql_query($sql,$conn);
	$row=mysql_fetch_assoc($result);
?>
<h1 style="text-align:center">修改产品</h1>
<form method="post" action="">
<table width="960" style="margin:0 auto;" border="1">
  <tr>
    <td width="35%"style="text-align:right">产品名称:</td>
    <td width="65%">
    <input type="text" name="producttype" style="margin-left:30px; height:25px;"
    value="<?=$row['producttype']?>"/>*
    </td>
  </tr>
  
  <tr>
    <td width="35%"style="text-align:right">产品内容:</td>
    <td>
    <?php include("fckeditor/fckeditor_php5.php");
	$oFCKeditor=new FCKeditor('content');
	$oFCKeditor->BasePath='fckeditor/';
	$oFCKeditor->Width='95%';
	$oFCKeditor->Height='200px';
	$oFCKeditor->Value=$row['content'];
	$oFCKeditor->Create();?>*
    </td>
  </tr>
  <!--
  <tr>
    <td width="35%"style="text-align:right">上传图片:</td>
    <td>
    <input type="file" name="filepath" style="margin-left:30px; height:25px;"/>*
    </td>
  </tr>
  -->
  <tr>
    <td colspan="2"> 
    <input type="submit" name="sub" value="修  改" style="margin-left:329px;height:25px;"/>
    </td>
  </tr>
</table>
</form>

<?php
//修改新闻页面
//require('conn.php');
date_default_timezone_set("PRC");
if(isset($_POST['sub']))
{
	$producttype=$_POST["producttype"];
	$content=$_POST["content"];
	$time=date("Y-m-d H:i:s");

	if((!empty($producttype))&&(!empty($content)))
	{
	$sql="update product set producttype='$producttype',content='$content',time='$time'
	where ID = $updateid";
	if(mysql_query($sql,$conn)){
		echo "<script>alert('修改成功!');
		location.href='manger_update.php'</script>";
							   }
	else{echo "<script>alert('修改失败!');
	location.href='manger_update.php?section=8'</script>";}
	}
	else{
		echo "<script>alert('带*号的内容不能为空!');
		location.href='manger_update.php?section=8'</script>";
		}
	mysql_close($result);
	mysql_close($conn);	
}

?>

</body>
</html>