<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php  
			$id = intval($_GET["id"]);
			if ($id == 301) 
				echo "无人机销售";
			if ($id == 302 || $id >= 310 && $id < 400) 
				echo "产品展示";
			if ($id == 303) 					
				echo "推荐产品参数";
		?>
		-厦门信全工程技术服务有限公司
	</title>
	<meta name="keywords" content="无人机销售,无人机航拍,无人机">
	<meta name="description" content="无人机销售找厦门信全工程技术服务有限公司,无人机航拍哪家好首选厦门信全工程技术,无人机咨询电话：0592-6264073">
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
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 301 || $id >= 310 && $id < 400) 
								echo "产品展示";
							if ($id == 302) 
								echo "产品展示";
							if ($id == 303) 					
								echo "推荐产品参数";
						?>
					</p>
				</div>
				<div class="right-content-r clearFix">
					<a href="index.php">首页</a>
					>
					<a href="javascript:">大疆无人机</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 301 || $id >= 310 && $id < 400) 
								echo "产品展示";
							if ($id == 302) 
								echo "产品展示";
							if ($id == 303) 					
								echo "推荐产品参数";
						?>
					</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<!-- 以下的两个div暂时不删，因为我设里margin -->
				<div class="about-text">
				</div>
				<div class="about-img">
				</div>

				<div class="product-ul-img">
					<?php  
						$id = intval($_GET["id"]);
						if ($id == 301 || $id == 302)
							include('product_content.php');
						if ($id == 303) 					
							echo uav_para();
					?>                                         
				</div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div>

	<?php include ("foot.php") ?>
</body>
</html>