<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信全后台-管理系统</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<?php
	//后台首页，判断用户是否登录
	require('conn.php');
	$sql="select *from user";
	$result=mysql_query($sql);
	$row=mysql_fetch_assoc($result);
	session_start();
	if($_SESSION['admin']==$row['username']){
		
	}
    else{
    	echo "<script>alert('您尚未登录或登录超时！');location.href='login.php'</script>";
    }
	mysql_close($conn);
?>
</head>

<body>
<div class="top"></div>
<div id="header">
	<div class="logo">信全公司后台管理系统</div>
	<div class="navigation">
		<ul>
		 	<li>欢迎您！</li>
			<li><a href=""><?=$_SESSION['admin']?></a></li>
			<li><a href="login.php">退出</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="left_menu">
	  
        <ul id="nav_dot">
          <li>
          <h4 class="M2"><span></span>新闻处理</h4>
          
          <div class="list-item none">
             <!--<a href='?section=1'>增加普通新闻</a>-->
            <a href='?section=2'>管理新闻</a>
            <a href='?section=14'>添加新闻</a>
                     
           </div>
          
          </li>
          <li>
          <h4 class="M3"><span></span>用户设置</h4>
          <div class="list-item none">
             <a href='?section=4'>账户名和密码修改</a>
          </div>
          </li>
		 <li>
          <h4 class="M5"><span></span>留言管理</h4>
          <div class="list-item none">
            <a href='?section=5'>管理留言</a>
          </div>
         </li>
				
		 <li>
          <h4  class="M7"><span></span>产品管理</h4>
          <div class="list-item none">
            <a href='?section=6'>增加产品</a>
            <a href='?section=7'>管理产品</a>
            <!--
            <a href='?section=8'>产品</a>
            -->
          </div>
        </li>
        	
 	 </ul>
  
		</div>
		<div class="m-right">
			<div class="right-nav">
				<ul>
					<li><img src="images/home.png"></li>
					<li style="margin-left:25px;">欢迎您：</li>
					<li><a href="#"><?=$_SESSION['admin']?>&nbsp;&nbsp;用户</a></li>
				</ul>
			</div>
            <!--这是显示内容栏-->
			<div class="main">
				<?php
					/*if(!empty($_GET["section"]) && $_GET["section"]==1)
					{
						include("insert_table.php");
					}*/
					if(!empty($_GET["section"]) && $_GET["section"]==2)
					{
						include("manger_table.php");
					}
					elseif(!empty($_GET["section"]) && $_GET["section"]==3)
					{
						include("update_table.php");
					}
					elseif(!empty($_GET["section"]) && $_GET["section"]==14)
					{
						include("index_news.php");
					}	
					elseif(!empty($_GET["section"]) && $_GET["section"]==4)
					{
						include("user_update.php");
					}
					elseif(!empty($_GET["section"]) && $_GET["section"]==5)
					{
						include("message_show.php");
					}
					elseif(!empty($_GET["section"]) && $_GET["section"]==6)
					{
						include("product_insert.php");
					}
					
					elseif(!empty($_GET["section"]) && $_GET["section"]==7)
					{
						include("product_manger.php");
					}
					
					elseif(!empty($_GET["section"]) && $_GET["section"]==8)
					{
						include("product_update.php");
					}
							
				?>
			</div>
		</div>
</div>
<div class="bottom"></div>
<div id="footer">
<p>@版权所有Copyright &copy 厦门信全工程技术服务有限公司&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 闽ICP备17009032号</p>
</div>
<script>navList(12);</script>
</body>
</html>
