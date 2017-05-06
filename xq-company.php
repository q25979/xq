<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php  
			$id = intval($_GET["id"]);
			if ($id == 101) 
				echo "公司简介";
			if ($id == 102) 
				echo "公司概述";
			if ($id == 103) 					
				echo "人力资源";
			if ($id == 104) 
				echo "营业执照";
		?>-厦门信全工程技术服务有限公司
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
				<span class="nav-t1">公司简介</span>
				<span class="nav-t2">COMPANY PROFILE</span>
			</footer>
			<ul>
				<li><a href="xq-company.php?id=102">公司概述</a></li>
				<li><a href="xq-company.php?id=103">人力资源</a></li>
				<li><a href="xq-company.php?id=104">营业执照</a></li>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 101 || $id == 102) 
								echo "公司概述";
							// if ($id == 102) 
							// 	echo "公司概述";
							if ($id == 103) 					
								echo "人力资源";
							if ($id == 104) 
								echo "营业执照";
						?>
					</p>
				</div>
				<div class="right-content-r">
					<a href="index.php">首页</a>
					>
					<a href="javascript:">公司简介</a>
					>
					<a href="javascript:" class="a-style">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 101 || $id == 102) 
								echo "公司概述";
							if ($id == 103) 					
								echo "人力资源";
							if ($id == 104) 
								echo "营业执照";
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
						// 公司概述
						$txt1 = 
							"<p>厦门信全工程技术服务有限公司成立于20102年，业务范畴包含：无人机航拍应用及销售，工程建设技术服务。
							</p>
							<p>
                            厦门信全工程技术服务有限公司专业从事无人机航拍应用及销售，是全球领先的大疆无人机二级销售代理。本公司无人机航拍应用主要包括实景三维建模、工程建设航拍应用、航拍测量、厂房、楼盘、园林、景区、户外活动、旅游观光等航拍服务，也可根据客户需要提供航拍服务。在开展航拍业务的同时，我司也代理销售大疆系列无人机及周边产品销售。
							</p>
							<p>工程建设技术服务旨在适应工程建设市场需要，为施工单位提供项目管理技术服务，公司提供福建省内水利、市政、修缮工程施工管理整体技术承包、测量放样、土石方工程量测算、内业资料编制、工程预结算等技术服务，服务范围涵盖项目施工全过程的技术内容。公司负责派出技术人员的组织、培训、工资及福利发放，派出力量以满足客户需要为原则，并接受客户的正常管理，可为施工单位节省大量的技术人力资源支出，减少技术人员流动对项目施工的影响，大大降低施工单位在项目施工上的管理工作量。公司以水利、市政专业技术服务为专长，同时随着业务的扩大，公司在装饰装修工程、钢筋工程、模板工程、砌筑工程、地面工程、人造草坪及水工施工方面也得到了长足发展，可为工程项目提供专业劳务服务，并可提供相关特殊材料供应服务。公司成立以来，通过多个项目的运作，公司与客户均收到了双赢的效果。
							</p>
							<p>“信誉立身”是我们的立根之本，“全心全力”是我们的生存之道。承蒙各界对我公司的大力支持，我们将一如既往的为客户提供真诚的服务，为您的成功助力。
							</p>";
						// 人力资源
						$txt2 = 
							"
                            <p>本公司无人机操控手及航拍后期制作人员均通过正规培训，持证上岗。公司与行内其它企业、科研院校均有良好的合作，人才资源储备丰富，满足各种航拍业务需要。</p>
　　                        <p>
							公司的工程建设技术服务以水利、市政相关技术人员为骨干，多数技术人员均是从事水利、市政、修缮工程 多年的施工管理技术人员，经验丰富，相关配套专业人员齐全。技术团队向心力强，后备人力资源雄厚。
							</p>"
							;

						if ($id == 101 || $id == 102) 
						{
							echo $txt1;
						}

						if ($id == 103) 
						{
							echo $txt2;
						}

						if ($id == 104) 
						{
							echo business();
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