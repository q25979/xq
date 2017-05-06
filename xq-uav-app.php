<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php  
			$id = intval($_GET["id"]);
			if ($id == 201) 
				echo "无人机应用";
			if ($id == 202) 
				echo "工程建设";
			if ($id == 203) 					
				echo "航拍测量";
			if ($id == 204)
				echo "汇报、记录片航拍";
			if ($id == 205)
				echo "水库巡查";
			if ($id == 206)
				echo "实景三维建模";
			if ($id == 207)
				echo "抢险救灾";
			if ($id == 208)
				echo "楼盘";
			if ($id == 209)
				echo "园林景区";
			if ($id == 210)
				echo "行业定制";
		?>-厦门信全工程技术服务有限公司
	</title>
	<meta name="keywords" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
	<meta name="description" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
</head>
<body>
	<?php include ('public.php'); ?>
	<?php include ('public2.php'); ?>

	<!-- 内容区的盒子 -->
	<div class="public2-content-box">
		<section class="left-nav">
			<footer class="nav-t">
				<span class="nav-t1">无人机应用</span>
				<span class="nav-t2">UAV APPLICATION</span>
			</footer>
			<ul>
				<li><a href="xq-uav-app.php?id=202">工程建设</a></li>
				<li><a href="xq-uav-app.php?id=206">实景三维建模</a></li>
				<li><a href="xq-uav-app.php?id=203">航拍测量</a></li>
				<li><a href="xq-uav-app.php?id=204">汇报、记录片航拍</a></li>
				<li><a href="xq-uav-app.php?id=205">水库巡查</a></li>
				<li><a href="xq-uav-app.php?id=207">抢险救灾</a></li>
				<li><a href="xq-uav-app.php?id=208">楼盘</a></li>
				<li><a href="xq-uav-app.php?id=209">园林景区</a></li>
				<li><a href="xq-uav-app.php?id=210">行业定制</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 201) 
								echo "工程建设";
							if ($id == 202) 
								echo "工程建设";
							if ($id == 203) 					
								echo "航拍测量";
							if ($id == 204)
								echo "汇报、记录片航拍";
							if ($id == 205)
								echo "水库巡查";
							if ($id == 206)
								echo "实景三维建模";
							if ($id == 207)
								echo "抢险救灾";
							if ($id == 208)
								echo "楼盘";
							if ($id == 209)
								echo "园林景区";
							if ($id == 210)
								echo "行业定制";
						?>
					</p>
				</div>
				<div class="right-content-r clearFix">
					<a href="index.php">首页</a>
					>
					<a href="javascript:">无人机应用</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 201) 
								echo "工程建设";
							if ($id == 202) 
								echo "工程建设";
							if ($id == 203) 					
								echo "航拍测量";
							if ($id == 204)
								echo "汇报、记录片航拍";
							if ($id == 205)
								echo "水库巡查";
							if ($id == 206)
								echo "实景三维建模";
							if ($id == 207)
								echo "抢险救灾";
							if ($id == 208)
								echo "楼盘";
							if ($id == 209)
								echo "园林景区";
							if ($id == 210)
								echo "行业定制";
						?>
					</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text adj-position">
					<?php  
						$id = intval($_GET["id"]);
						// 调用公共框架3
						include ('public3.php');

						if ($id == 201)
							echo pro_build();
						if ($id == 202) 
							echo pro_build();
						if ($id == 203) 					
							echo aerial_survey();
						if ($id == 204)
							echo report();
						if ($id == 205)
							echo reservoir();
						if ($id == 206)
							echo line();
						if ($id == 207)
							echo disaster();
						if ($id == 208)
							echo properties();
						if ($id == 209)
							echo gardens();
						if ($id == 210)
							echo industry();
					?>
				</div>
				<div class="about-img">
				</div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div>

	<?php include ("foot.php") ?>
</body>
</html>