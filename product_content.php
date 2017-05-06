<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>产品展示</title>
<style>
	.content-page {
		width: 100%;
		height: 30px;
		clear: both;
		line-height: 30px;
		text-align: center;
	}
</style>
</head>

<body>
 <?php
	require('xq_manger/conn.php');
	if(isset($_GET['page'])&&$_GET['page']>0)
			$page=$_GET['page'];
	else
		$page=1;
	$pagesize=9;
	$result=mysql_query("select *from product",$conn);
	$recordcount=mysql_num_rows($result);
	$flag=intval(($page-1)*$pagesize);
	$pagecount=ceil($recordcount/$pagesize);
	$result=mysql_query("select *from product order by ID desc limit $flag, 9",$conn);	
?>

   <ul>
	<?php
		while($row=mysql_fetch_assoc($result)){?>
		<li title="点击更多详情">
            <a href="product_show.php?id=310&product=<?=$row['ID']?>">
			<img src="<?=$row['filepath']?>" alt="产品">
			<span><?=$row['producttype']?></span>
			</a>
        </li>
  	<?php } mysql_free_result($result);?>
   </ul>

	<div class="content-page">
    	<p>
		<?php
			echo "<a href='?id=301&page=1'>第一页</a>
			<a href='?id=301&page=".($page-1)."'>上一页&nbsp</a>";
			for($i=1;$i<=$pagecount;$i++){
				if($i==$page)
					echo "<span>".$i."</span>&nbsp";
				else
					echo "<a href='?id=301&page=$i'>$i&nbsp</a>";
			}
			if($page==$pagecount)
				echo '下一页 末页';
			else echo 
				"<a href='?id=301&page=".($page+1)."'>&nbsp下一页
				</a>
				<a href='?id=301&page=".$pagecount."'>
					末页
				</a>";
			echo "&nbsp共".$recordcount."件商品&nbsp";
			echo "$page/$pagecount 页";	
		?>
    	</p>
	</div>
</body>
</html>