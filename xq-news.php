<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	<?php  
		$id = intval($_GET["id"]);
		if ($id==601)
			echo "新闻资讯";
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
				<span class="nav-t1">新闻资讯</span>
				<span class="nav-t2">NEWS INFORMATION</span>
			</footer>
			<ul>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">新闻资讯</p>
				</div>
				<div class="right-content-r">
					<a href="index.php">首页</a>
					>
					<a href="javascript:" class="a-style">新闻资讯</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text">
					<?php
						require('xq_manger/conn.php');
						if(isset($_GET['page'])&&$_GET['page']>0)
								$page=$_GET['page'];
						else
							$page=1;
						$pagesize=5;
						$result=mysql_query("select *from news",$conn);
						$recordcount=mysql_num_rows($result);
						$flag=intval(($page-1)*$pagesize);
						$pagecount=ceil($recordcount/$pagesize);
						$result=mysql_query("select *from news order by ID desc limit $flag,5",$conn);	
					?>
                	<ul class="news-ul">
                	<?php
						while($row=mysql_fetch_assoc($result)){?>
						<a href='news_content_show.php?id=<?=$row['ID']?>'>
						<li title="点击更多详情">
	                        <h1><?=Trimtit($row['title'],14)?></h1>
							<p>
							<?=Trimtit(strip_tags($row['content']),30)?>
							</p>
                        </li>
						</a>
                  	<?php } mysql_free_result($result);?>
                	</ul>
  
                    <p>
						<?php
							echo "<a href='?id=601&page=1'>第一页</a>
							<a href='?id=601&page=".($page-1)."'>上一页&nbsp</a>";
							for($i=1;$i<=$pagecount;$i++){
								if($i==$page)
									echo "<span>".$i."</span>&nbsp";
								else
									echo "<a href='?id=601&page=$i'>$i&nbsp</a>";
							}
							if($page==$pagecount)
								echo '下一页 末页';
							else echo 
								"<a href='?id=601&page=".($page+1)."'>&nbsp下一页
								</a>
								<a href='?id=601&page=".$pagecount."'>
									末页
								</a>";
							echo "&nbsp共".$recordcount."条新闻&nbsp";
							echo "$page/$pagecount 页";	
						?>
                    </p>
				</div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div>

	<?php include ("foot.php") ?>
</body>
</html>