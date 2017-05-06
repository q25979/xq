<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php  
			$id = intval($_GET["id"]);
			if ($id == 901) 
				echo "物质设备贸易";
			if ($id == 902) 
				echo "特殊地面材料";
			if ($id == 903) 					
				echo "止水材料";
			if ($id == 904) 
				echo "工程设备";
			if ($id == 905) 
				echo "其它材料、设备";
		?>
		-厦门信全工程技术服务有限公司
	</title>
	<meta name="keywords" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
	<meta name="description" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
</head>
<body>
	<?php include ("public.php"); ?>
	<?php include ('public2.php'); ?>

	<!-- 内容区的盒子 -->
	<div class="public2-content-box">
		<section class="left-nav">
			<footer class="nav-t">
				<span class="nav-t1">物质设备贸易</span>
				<span class="nav-t2">MATERIAL TRADE</span>
			</footer>
			<ul>
				<li><a href="xq-material.php?id=902">特殊地面材料</a></li>
				<li><a href="xq-material.php?id=903">止水材料</a></li>
				<li><a href="xq-material.php?id=904">工程设备</a></li>
				<li><a href="xq-material.php?id=905">其它材料、设备</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 901 || $id == 902) 
								echo "特殊地面材料";
							if ($id == 903) 					
								echo "止水材料";
							if ($id == 904) 
								echo "工程设备";
							if ($id == 905) 
								echo "其它材料、设备";
						?>
					</p>
				</div>
				<div class="right-content-r">
					<a href="index.php">首页</a>
					>
					<a href="javascript:">物质设备贸易</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 901 || $id == 902) 
								echo "特殊地面材料";
							if ($id == 903) 					
								echo "止水材料";
							if ($id == 904) 
								echo "工程设备";
							if ($id == 905) 
								echo "其它材料、设备";
						?>
					</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text adj-position">
					<?php 
						$id = intval($_GET["id"]);
						include("public3.php");

						if ($id == 901 || $id == 902) 
						{
							echo ground();
						}

						if ($id == 903) 
						{
							echo sealing_up();
						}

						if ($id == 904) 
						{
							echo eng_equ();
						}

						if ($id == 905) 
						{
							echo other_ma();
						}
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