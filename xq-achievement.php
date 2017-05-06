<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	<?php  
		$id = intval($_GET["id"]);
		if ($id==501)
			echo "业绩案例";
		if ($id==502)
			echo "无人机应用";
		if ($id==503)
			echo "工程技术服务";
	?>
	-厦门信全工程技术服务有限公司
	</title>
	<meta name="keywords" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
	<meta name="description" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
</head>
<body>
	<?php include ('public.php'); ?>
	<?php include ('public2.php'); ?>
	<?php include ('public3.php'); ?>
	
	<!-- 内容区的盒子 -->
	<div class="public2-content-box">
		<section class="left-nav">
			<footer class="nav-t">
				<span class="nav-t1">业绩案例</span>
				<span class="nav-t2">PERFORMANCE CASE</span>
			</footer>
			<ul>
				<li><a href="xq-achievement.php?id=502">无人机应用</a></li>
				<li><a href="xq-achievement.php?id=503">工程技术服务</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id==501)
								echo "无人机应用";
							if ($id==502)
								echo "无人机应用";
							if ($id==503)
								echo "工程技术服务";
						?>
					</p>
				</div>
				<div class="right-content-r clearFix">
					<a href="index.php">首页</a>
					>
					<a href="javascript:">业绩案例</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id==501)
								echo "无人机应用";
							if ($id==502)
								echo "无人机应用";
							if ($id==503)
								echo "工程技术服务";
						?>
					</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text">
					<?php  
						$id = intval($_GET["id"]);

						if ($id==501)
							echo uav_app();
						if ($id==502)
							echo uav_app();
						if ($id==503)
							echo eng_service();
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