<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	<?php  
		$id = intval($_GET["id"]);
		if ($id == 401) 
			echo "工程技术服务";
		if ($id == 402) 
			echo "施工管理整体承包";
		if ($id == 403) 					
			echo "施工管理";
		if ($id == 404) 					
			echo "施工测量放样";
		if ($id == 405) 					
			echo "土石方工程测算";
		if ($id == 406) 					
			echo "工程预结算";
		if ($id == 407) 					
			echo "内业资料编制";
		if ($id == 408) 					
			echo "专业劳务";
	?>
	-厦门信全工程技术服务有限公司</title>
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
				<span class="nav-t1">工程技术服务</span>
				<span class="nav-t2">TECHNICAL SERVICE</span>
			</footer>
			<ul>
				<li><a href="xq-tec-ser.php?id=402">施工管理整体承包</a></li>
				<li><a href="xq-tec-ser.php?id=403">施工管理</a></li>
				<li><a href="xq-tec-ser.php?id=404">施工测量放样</a></li>
				<li><a href="xq-tec-ser.php?id=405">土石方工程测算</a></li>
				<li><a href="xq-tec-ser.php?id=406">工程预结算</a></li>
				<li><a href="xq-tec-ser.php?id=407">内业资料编制</a></li>
				<li><a href="xq-tec-ser.php?id=408">专业劳务</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 401) 
								echo "施工管理整体承包";
							if ($id == 402) 
								echo "施工管理整体承包";
							if ($id == 403) 					
								echo "施工管理";
							if ($id == 404) 					
								echo "施工测量放样";
							if ($id == 405) 					
								echo "土石方工程测算";
							if ($id == 406) 					
								echo "工程预结算";
							if ($id == 407) 					
								echo "内业资料编制";
							if ($id == 408) 					
								echo "专业劳务";
						?>
					</p>
				</div>
				<div class="right-content-r clearFix">
					<a href="javascript:">首页</a>
					>
					<a href="javascript:">产品展示</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 401) 
								echo "施工管理整体承包";
							if ($id == 402) 
								echo "施工管理整体承包";
							if ($id == 403) 					
								echo "施工管理";
							if ($id == 404) 					
								echo "施工测量放样";
							if ($id == 405) 					
								echo "土石方工程测算";
							if ($id == 406) 					
								echo "工程预结算";
							if ($id == 407) 					
								echo "内业资料编制";
							if ($id == 408) 					
								echo "专业劳务";
						?>
					</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text">
				<?php  
					$id = intval($_GET["id"]);
					// $img = '<img src="images/pro1.png" class="about-img" alt="图片">';
					
					if ($id == 401 || $id == 402) 
						echo "<p>承接福建省内水利、市政、修缮工程施工管理技术整体承包。</p>";
					if ($id == 403) 					
						echo "<p>承接福建省内水利、市政、修缮工程现场施工管理技术报务（技术主管、施工员岗位）。</p>";
					if ($id == 404) 					
						echo "<p>承接福建省内水利、市政、修缮工程现场施工测量与放样。</p>";
					if ($id == 405) 					
						echo "<p>承接福建省内土石方工程量测量计算业务。</p>";
					if ($id == 406) 					
						echo "<p>承接福建省内水利、市政、修缮工程预结算业务。</p>";
					if ($id == 407) 					
						echo "<p>承接福建省内水利、市政、修缮工程内业资料编制（不含归档）。</p>";
					if ($id == 408) 					
						echo "<p>装修装饰工程</p>
							<p>钢筋工程</p>
							<p>模板工程砌体工程</p>
							<p>地面工程</p>
							<p>人造草</p>
							<p>水工施工【水利工程施工（不含海工），如截污工程、水闸工程等】</p>
							<p>岩石劈裂开挖（非爆破开挖）</p>";
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