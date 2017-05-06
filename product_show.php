<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>产品详情</title>
<link rel="stylesheet" href="css/public2.css">
</head>

<body>
	<?php include ('public.php'); ?>
	<?php include ('public2.php'); ?>
	<?php include ('public3.php'); ?>

	
	<!-- 内容区的盒子 -->
	<div class="public2-content-box">
		<section class="left-nav">
			<footer class="nav-t">
				<span class="nav-t1">无人机销售</span>
				<span class="nav-t2">UAV SALES</span>
			</footer>
			<ul>
				<li><a href="xq-uav-sale.php?id=302">产品展示</a></li>
				<li><a href="xq-uav-sale.php?id=303">推荐产品参数</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">产品详情</p>
				</div>
				<div class="right-content-r">
					<a href="index.php">首页</a>
					>
					<a href="javascript:" class="a-style">产品详情</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text">
					<?php
						//显示详情页
						require('xq_manger/conn.php');
						$id=intval($_GET['product']);
						$sql="select *from product where ID=$id";
						$result=mysql_query($sql,$conn);
						if($result)
						{$row=mysql_fetch_assoc($result);}
					?>
					<div class="shop-details">
                        <h1>
	                        <a href="xq-uav-sale.php?id=302">< 返回</a>
	                        <?=$row['producttype']?>
                        </h1>
                        <p><?=$row['content']?></p>
                    </div>
				</div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div>

	<?php
		// mysql_close($result);
		// mysql_close($conn);
	?>
	<?php include ("foot.php") ?>
</body>
</html>