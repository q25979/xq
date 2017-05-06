<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>管理留言</title>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<style type="text/css">
    #content-show{
		margin:8px auto;
		width:650px;
		border:1px solid #555;
		padding:8px;
		color: #444;
	}
	#content-show h3
	{	
		text-align:center;
		border-bottom:1px dashed gray; 
		background:#00A5A5;
		color: white;
	}
	#content-show p
	{
		font:12px/1.6 "宋体"; 
		margin:2px;
	}
	#content-page {
		width: 100%;
		height: 100px;
	}
	/*留言内容布局*/
	#content-show span {
		display: block;
	}
	#content-show fieldset {
		border: 1px solid #999;
	}
	#msg-time {
		text-align: right;
	}
</style>
    
<script>
	function deleteid(deleteid){
		var r=confirm("确认删除？");
		if(r==true)
		{
			$.get("delete_message.php",{number:deleteid,act:"del"},
			function(data){
				if(data==2)
				{
					kk="fff"+number;
					s=document.getElementById(kk);
					$(s).remove();
				}
			});
		}
	}
</script>
</head>

<body>
<?php
//管理留言
	require('conn.php');
	if(isset($_GET['page'])&&$_GET['page']>0)
		$page=$_GET['page'];
	else
		$page=1;
	$pagesize=3;
	$result=mysql_query("select *from message",$conn);
	$recordcount=mysql_num_rows($result);
	$flag=intval(($page-1)*$pagesize);
	$pagecount=ceil($recordcount/$pagesize);
	mysql_free_result($result);
	$result=mysql_query("select *from message where ID>0 
	order by ID desc limit $flag,3",$conn);
?>

<ul>
<?php 
		while($row=mysql_fetch_assoc($result)) {?>
        <li id="fff<?=$row['ID']?>">
	        <div id="content-show">
	        	<h3>收到的留言</h3>
	            <span style="float:right">
	            	<a href='' onClick="deleteid(<?=$row['ID']?>)">删除</a>
	            </span>
	            <span>
	            	<p>姓名：<?=$row['name']?></p>
	            </span>
	            <span>
	            	<p>电话：<?=$row['tel']?></p>	            	
	            </span>
	            <span>
	            	<p>QQ号：<?=$row['qq']?></p> 	
	            </span>
	            <span>
					<fieldset>
						<legend>留言内容</legend>
						<p class="content-p">'.<?=$row['content']?>.'</p>
					</fieldset>
				</span>
				<span id="msg-time">
					<p>
						留言时间：<?=$row['time']?>
						来自：<?=$row['addr']?>
					</p>
				</span>
	        </div>
        </li>
<?php } ?>
 </ul>   
 <div id="content-page">               
 <p style="text-align:center">
	<?php
		if($page==1)
			echo "第一页 上一页";
		else echo "<a href='?section=5&page=1'>第一页</a>
		<a href='?section=5&page=".($page-1)."'>上一页</a>";
		for($i=1;$i<=$pagecount;$i++){
			if($i==$page)
				echo '&nbsp;'.'&nbsp;'."$i".'&nbsp;'.'&nbsp;';
			else
				echo '&nbsp;'."<a href='?section=5&page=$i'>$i</a>";}
			if($page==$pagecount)
				echo "下一页 末页";
			else echo "<a href='?section=5&page=".($page+1)."'>下一页</a>
			<a href='?section=5&page=".$pagecount."'>末页</a>";
			echo "&nbsp共".$recordcount."条留言&nbsp";
			echo "$page / $pagecount 页";	
	?>
</p>
</div>

</body>
</html>