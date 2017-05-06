<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/public.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/public.js"></script>
	
	<!--[if lte IE 9]>
		<script type="text/javascript">
			alert("你的浏览器版本过低不能正常显示内容，请及时更换最新版本的浏览器才能正常显示内容！");
		</script>
	<![endif]-->
</head>
<body>
	<a id="top"></a>
	<!-- 头部部分 -->
	<header class="public-header">
		<div class="public-header-left">
			<a href="index.php">
				<img src="../images/logo.png" alt="logo">
			</a>
		</div>
		<div class="public-header-right">
			<a href="">
				<img src="../images/tel.png" alt="电话">
				<span class="header-right-tel">0592-6264073</span>
				<br>
				<span class="header-right-ser">全国服务热线，欢迎来电咨询！</span>
			</a>
		</div>
	</header>

	<!-- 导航部分 -->
	<nav class="nav-x">
		<ul class="nav-x-ul">
			<li><a href="index.php">首页</a></li>
			<!-- 公司简介 -->
			<li class="company-li">
				<a href="xq-company.php?id=101">公司简介</a>
				<div class="nav2-x company-x">
					<a href="xq-company.php?id=102">公司概述</a>
					<a href="xq-company.php?id=103">人力资源</a>
					<a href="xq-company.php?id=104">营业执照</a>
				</div>
			</li>
			<!-- 无人机应用 -->
			<li class="uav-app-li">
				<a href="xq-uav-app.php?id=201">无人机应用</a>
				<div class="nav2-x uav-x">
					<a href="xq-uav-app.php?id=202">工程建设</a>	
					<a href="xq-uav-app.php?id=206">实景三维建模</a>	
					<a href="xq-uav-app.php?id=203">航拍测量</a>
					<a style="font-size: 14px;" href="xq-uav-app.php?id=204">汇报、记录片航拍</a>	
					<a href="xq-uav-app.php?id=205">水库巡查</a>
					<a href="xq-uav-app.php?id=207">抢险救灾</a>	
					<a href="xq-uav-app.php?id=208">楼盘</a>
					<a href="xq-uav-app.php?id=209">园林景区</a>
					<a href="xq-uav-app.php?id=210">行业定制</a>
				</div>
			</li>
			<!-- 无人机销售 -->
			<li class="uav-sale-li">
				<a href="xq-uav-sale.php?id=301">无人机销售</a>
				<div class="nav2-x uav-x">
					<a href="xq-uav-sale.php?id=302">产品展示</a>	
					<a href="xq-uav-sale.php?id=303">推荐产品参数</a>
				</div>
			</li>
			<!-- 工程技术服务 -->
			<li class="tec-ser-li">
				<a href="xq-tec-ser.php?id=401">工程技术服务</a>
				<div class="nav2-x uav-x">
					<a href="xq-tec-ser.php?id=402" style="font-size: 15px;">施工管理整体承包</a>	
					<a href="xq-tec-ser.php?id=403">施工管理</a>
					<a href="xq-tec-ser.php?id=404">施工测量放样</a>	
					<a href="xq-tec-ser.php?id=405">土石方工程测算</a>
					<a href="xq-tec-ser.php?id=406">工程预结算</a>	
					<a href="xq-tec-ser.php?id=407">内业资料编制</a>
					<a href="xq-tec-ser.php?id=408">专业劳务</a>	
				</div>
			</li>
			<!-- 业绩案例 -->
			<li class="achievement-li">
				<a href="xq-achievement.php?id=501">业绩案例</a>
				<div class="nav2-x achievement-x">
					<a href="xq-achievement.php?id=502">无人机应用</a>
					<a href="xq-achievement.php?id=503">工程技术服务</a>
				</div>
			</li>
			<!-- 物资贸易设备 -->
			<li class="material-li">
				<a href="xq-material.php?id=901">物质设备贸易</a>
				<div class="nav2-x material-x">
					<a href="xq-material.php?id=902">特殊地面材料</a>
					<a href="xq-material.php?id=903">止水材料</a>
					<a href="xq-material.php?id=904">工程设备</a>
					<a href="xq-material.php?id=905">其它材料、设备</a>
				</div>
			</li>
			<!-- 新闻资讯 -->
			<li class="news-li">
				<a href="xq-news.php?id=601">新闻资讯</a>
			</li>
			<!-- 联系我们 -->
			<li class="about-li">
				<a href="xq-about.php?id=701">联系我们</a>
				<div class="nav2-x about-x">
					<a href="xq-recruit.php?id=801">人才招聘</a>
				</div>
			</li>
		</ul>
	</nav>

	<!-- 在线留言悬浮框 -->
	<div class="online-msg">
		<div class="online-msg-big">
			<div class="online-msg-small">在线留言</div>
				<div class="online-txt">
                	<form name="msg">
						<span>姓名：</span><input id="name" type="text">
						<br>
						<span>性别：</span>
							<label>
								<input checked="" name="sex" type="radio" value="男">男
							</label>
							<label>
								<input name="sex"  type="radio" value="女">女
							</label>
						<br>
						<span>号码：</span><input id="tel" type="tel">
						<br>
						<span>QQ：</span><input id="qq" type="tel">
						<br>
						<span>
						内容：
						</span>
						<br>
						<textarea id="content" cols="30" rows="10"></textarea>
						<br>
						<input id="msg-btn" type="button" onClick="jqajax()" value="提交">
                	</form>
				</div>
			</div>
		</div>
	</div>
	<!-- 在线留言悬浮框结束 -->

	<!-- 返回顶部 -->
	<div class="back-top">
		<a href="#top">返回顶部</a>
	</div>
	<!-- 返回顶部结束 -->
</body>
</html>