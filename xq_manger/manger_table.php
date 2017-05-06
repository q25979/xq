<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>管理和删除新闻</title>
    <?php
	//剪切字符数量的函数
	function Trimtit($tit,$n){
		if(mb_strlen($tit,'utf8')>$n)
			return mb_substr($tit,0,$n,'utf8')."...";
		else
			return $tit;
	}	
	?>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
     <style type="text/css">
    #content-show{
		margin:8px auto;
		width:650px;
		border:1px solid #555;
		padding:8px;
		}
	#content-show h3
	{	
		text-align:center;
		color: white;
		border-bottom:1px dashed gray; 
		background:#00A5A5;
	}
	#content-show p
	{
		font:12px/1.6 "宋体"; margin:2px;
	}
	#content-page {
		width: 100%;
		height: 100px;
	}
    </style>

  <script>
	function deleteid(deleteid){
		var r=confirm("确认删除？");
		if(r==true)
		{
			$.get("delete_news.php",
				{number:deleteid,act:"del"},
				function(data, status){
					alert(status);
				}
			);
		}
	}
</script>
</head>

<body>
<?php
//管理和删除新闻

//分页代码的开始
	require('conn.php');
	if(isset($_GET['page'])&&$_GET['page']>0)
		$page=$_GET['page'];
	else
		$page=1;   //当前页数
	$pagesize=3;    
	$result=mysql_query("select *from news",$conn);
	$recordcount=mysql_num_rows($result);
	$flag=intval(($page-1)*$pagesize); 
	$pagecount=ceil($recordcount/$pagesize); //计算新闻的页数
	mysql_free_result($result);
	//用mysql语句设置每页只显示3条新闻
	$result=mysql_query("select *from news where ID>0 
	order by ID desc limit $flag,3",$conn);
?>

<ul>
<?php 
		//循环输出显示三条新闻,新闻显示布局的CSS在头部
		while($row=mysql_fetch_assoc($result)) {?>
        <li id="fff<?=$row['ID']?>">
        <div id="content-show">
        	<h3><?=$row['title']?></h3>
            <span style="float:right">
            <a href='manger_update.php?section=3&updateid=<?=$row['ID']?>'>修改</a>
            <a href='' onClick="deleteid(<?=$row['ID']?>)">删除</a>
            </span>
            <p>发布人：<?=$row['author']?></p>
            <p>内容:<?=strip_tags($row['content'])?></p>
            <p align="right">发表时间:<?=$row['time']?></p>
        </div>
        </li>
<?php } ?>
</ul>   
<div id="content-page">              
 <p style="text-align:center">
	<?php
		//页数的显示在循环输出三条新闻之后输出页数显示
		if($page==1)
			echo "第一页 上一页";
		else echo "<a href='?section=2&page=1'>第一页</a>
		<a href='?section=2&page=".($page-1)."'>上一页</a>";
		for($i=1;$i<=$pagecount;$i++){
			if($i==$page)
				echo '&nbsp;'.'&nbsp;'."$i".'&nbsp;'.'&nbsp;';
			else
				echo '&nbsp;'."<a href='?section=2&page=$i'>$i</a>";}
			if($page==$pagecount)
				echo "下一页 末页";
			else echo "<a href='?section=2&page=".($page+1)."'>下一页</a>
			<a href='?section=2&page=".$pagecount."'>末页</a>";
			echo "&nbsp共".$recordcount."条新闻&nbsp";
			echo "$page / $pagecount 页";	
	?>
</p>
</div>


</body>
</html>