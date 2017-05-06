<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页-厦门信全工程技术服务有限公司</title>
	<meta name="baidu-site-verification" content="qHtB3sgIPT" />
	<meta name="keywords" content="厦门信全工程技术服务有限公司,无人机,大疆无人机,无人机航拍">
	<meta name="description" content="厦门信全工程技术服务有限公司专业从事无人机航拍应用及销售，是全球先进的大疆无人机厦门市二级授权代理。咨询电话：0592-6264073">
	<link rel="icon" type="images/x-icon" href="images/small-logo.png">
	<link rel="stylesheet" href="css/index.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</head>
<body>
	<?php include ('public.php');?>
	<?php include ('public3.php');?>

	<!-- 轮播图 -->
	<div align="center" style="margin:0 auto">
		<div class="banner">
			<div class="banner-btn">
				<a href="javascript:;" class="prevBtn"><</a>
				<a href="javascript:;" class="nextBtn">></a>
			</div>
			<ul class="banner-img">
				<li><a href="javascript:"><img src="images/index/index_banner1.jpg" alt="轮播图"></a></li>
				<li><a href="javascript:"><img src="images/index/index_banner2.jpg" alt="轮播图"></a></li>
			</ul>
			<ul class="banner-circle"></ul>
		</div>
	</div>
	<!-- 轮播图结束 -->

	<!-- 大概浏览 -->
	<div class="index-bro">
		<div class="bro-display">
			<ul>
				<li>
					<a href="xq-about.php?id=701">
						<span>
							<p class="display-t1">联系我们</p>
							<p class="display-t2">点击查看+</p>
						</span>
						<img src="images/contact-us.jpg" alt="联系我们">
					</a>
				</li>
				<li class="bro-centerli">
					<a href="xq-uav-sale.php?id=302">
						<span>
							<p class="display-t1">产品展示</p>
							<p class="display-t2">点击查看+</p>
						</span>
						<img src="images/index/INSPIRE 1V2.0.jpg" alt="INSPIRE 1V2.0">
					</a>
				</li>
				<li>
					<a href="xq-tec-ser.php?id=401">
						<span>
							<p class="display-t1">工程技术服务</p>
							<p class="display-t2">点击查看+</p>
						</span>
						<img src="images/mice-forest.jpg" alt="工程技术服务">
					</a>
				</li>
				<li class="bro-company">
					<a href="xq-company.php?id=101">
						<span>
							<p class="display-t1">公司简介</p>
							<p class="display-t2">点击查看+</p>
						</span>
						<img src="images/square.jpg" alt="公司简介">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 浏览结束 -->

	<!-- 新闻模块 -->
	<div class="index-news">
		<div class="index-mod-t">
			<span class="index-mod-t1">新闻资讯</span>
			<span class="index-mod-t2">News Information</span>
			<a class="index-mod-t3" href="xq-news.php?id=601">更多 +</a>
		</div>
		<div class="news-content" title="点击显示更多">
			<!-- 从新闻模块获取前四的新闻与图片 -->
			<ul>
				<?php
					require('xq_manger/conn.php');
					$result=mysql_query("select *from news where 
					filepath like '%xq_manger%' order by ID desc",$conn);
					for($i=0;$i<4;$i++){
						$row=mysql_fetch_assoc($result);
				?>
                    <li>
                    <a href="news_content_show.php?id=<?=$row['ID']?>">
                    	<img src="<?=$row['filepath']?>" alt="点击显示更多">
						<h1><?=Trimtit($row['title'],14)?></h1>
						<span>
						<p><?=Trimtit($row['abstract'],30)?></p>
						</span>
					</a>
					</li>
                <?php 
            		}  mysql_close($conn); 
                ?> 
			</ul>
		</div>
	</div>
	<!-- 新闻模块结束 -->

	<!-- 业绩案例 -->
	<div class="index-pro">
		<div class="index-mod-t">
			<span class="index-mod-t1">业绩案例</span>
			<span class="index-mod-t2">Performance Case</span>
			<a class="index-mod-t3" href="xq-achievement.php?id=501">更多 +</a>
		</div>
		<div class="pro-content">
			<div class="cot-l">
				<a href="xq-achievement.php?id=503">
					<img class="top-box" src="images/pro1.png" alt="工程技术服务" title="工程技术服务">
					<span>工程技术服务</span>
				</a>
			</div>
			<div class="cot-r">
					<?php echo index_video(); ?>
					<a href="xq-achievement.php?id=502">
					<span>无人机应用</span>
				</a>
			</div>
		</div>
	</div>
	<!-- 项目案例结束 -->

	<?php include ("foot.php") ?>
</body>
</html>