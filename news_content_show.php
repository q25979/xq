<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>新闻资讯</title>
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
						//新闻显示详情页
						require('xq_manger/conn.php');
						$id=intval($_GET['id']);
						$sql="select ID from news where ID < $id and 
						title is not null order by ID desc limit 1";
						$result=mysql_query($sql,$conn);
						$sqlfirst="select ID from news where ID > 0 and 
						title is not null order by ID asc limit 1";
						$resultfirst=mysql_query($sqlfirst);
						$rowfirst=mysql_fetch_assoc($resultfirst);
						$first=$rowfirst['ID'];
						if(mysql_num_rows($result)==0){$pret=$first;}
						else{
							$row=mysql_fetch_assoc($result);
							$pret=$row['ID'];}
						$sql="select ID from news where ID > $id and 
						title is not null order by ID limit 1";
						$result=mysql_query($sql,$conn);
						if(mysql_num_rows($result)==0){
							$nextt=0;}
						else{
							$row=mysql_fetch_assoc($result);
							$nextt=$row['ID'];}
					?>

					<?php
						$sql="select *from news where ID=$id";
						$result=mysql_query($sql,$conn);
						if($result)
						{$row=mysql_fetch_assoc($result);}
					?>
					<div class="div-news-content">
						<div class="top-show">
							<a class="back" href="xq-news.php?id=601">返回</a>
							<?
							if($nextt!=0){ ?>
							<a href="news_content_show.php?id=<?= $nextt?>" style="float:right">下一条</a><? }
							if($pret){?>
							<a href="news_content_show.php?id=<?= $pret?>" style="float:left">上一条</a>
							<? } ?>
						</div>
						<div class="title-show">
						<h1><?= $row['title']?></h1>
						</div>
						<div class="author-show">
						<p>发布者：<?= $row['author']?>&nbsp;
						发布时间：<?= $row['time']?></p>
						</div>
						<div class="content-show">
							<p class="content-p"><?= $row['content']?></p>
						</div>
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