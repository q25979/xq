<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>修改新闻</title>
</head>

<body>
<?php
	error_reporting(0);
	require('conn.php');
	$updateid=intval($_GET['updateid']);
	$sql="select *from news where ID = $updateid";
	$result=mysql_query($sql,$conn);
	$row=mysql_fetch_assoc($result);
?>
<h1 style="text-align:center">修改新闻</h1>
<form method="post" action="">
<table width="960" style="margin:0 auto;" border="1">
  <tr>
    <td width="35%"style="text-align:right">新闻标题:</td>
    <td width="65%">
    <input type="text" name="title" style="margin-left:30px; height:25px;"
    value="<?=$row['title']?>"/>*
    </td>
  </tr>
  <tr>
    <td width="35%"style="text-align:right">发布者:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="65%">
    <input type="text" name="author" style="margin-left:30px; height:25px;"
    value="<?=$row['author']?>"/>*
    </td>
  </tr>
  <tr>
	    <td width="35%" style="text-align:right">新闻简介:</td>
	    <td width="65%"> 
	    <textarea name="abstract" cols="30" rows="5" 
        style="margin-left:30px; height:25px;"><?=$row['abstract']?></textarea>*
	    </td>
	  </tr>
  <tr>
    <td width="35%"style="text-align:right">新闻内容:</td>
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
  <tr>
    <td colspan="2"> 
    <input type="submit" name="sub" value="修  改" style="margin-left:329px;height:25px;"/>
    </td>
  </tr>
</table>
<div style="height: 100; width: 100%"></div>
</form>

<?php
//修改新闻页面
//require('conn.php');
date_default_timezone_set("PRC");
if(isset($_POST['sub']))
{
	$title=$_POST["title"];
	$author=$_POST["author"];
	//$lanmu=$_POST["lanmu"];
	$acstract=$_POST["abstract"];
	$content=$_POST["content"];
	//$id=intval($_POST['id']);
	$time=date("Y-m-d H:i:s");

	if((!empty($title))&&(!empty($author))&&(!empty($content)))
	{
	$sql="update news set title='$title',author='$author',content='$content',time='$time'
	where ID = $updateid";
	if(mysql_query($sql,$conn)){
		echo "<script>alert('新闻修改成功!');
		location.href='manger_update.php'</script>";
							   }
	else{echo "<script>alert('新闻修改失败!');
	location.href='manger_update.php?section=3'</script>";}
	}
	else{
		echo "<script>alert('带*号的内容不能为空!');
		location.href='manger_update.php?section=3'</script>";
		}
	mysql_close($result);
	mysql_close($conn);	
}

?>

</body>
</html>