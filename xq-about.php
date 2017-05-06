<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php  
			$id = intval($_GET["id"]);
			if ($id == 701) 
				echo "联系我们";
		?>
		-厦门信全工程技术服务有限公司
	</title>
	<meta name="keywords" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
	<meta name="description" content="厦门信全工程技术服务有限公司,大疆无人机,无人机航拍">
	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
<body>
	<?php include ('public.php'); ?>
	<?php include ('public2.php'); ?>

	<!-- 内容区的盒子 -->
	<div class="public2-content-box">
		<section class="left-nav">
			<footer class="nav-t">
				<span class="nav-t1">联系我们</span>
				<span class="nav-t2">ABOUT US</span>
			</footer>
			<ul>
			</ul>
		</section>
		<section class="right-content">	
			<header class="right-content-h">
				<div class="right-content-t clearFix">
					<p id="content-title">
						<?php  
							$id = intval($_GET["id"]);
							if ($id == 701) 
								echo "联系我们";
						?>
					</p>
				</div>
				<div class="right-content-r">
					<a href="index.php">首页</a>
					>
					<a href="javascript:" class="a-style">联系我们</a>
				</div>
			</header>
			
			<!-- 内容 -->
			<div class="right-content-box">
				<div class="about-text">
					<?php  
						$id = intval($_GET["id"]);
						$map = '<div id="dituContent"></div>';

						if ($id == 701) 
							echo 
							"<p>联系人：邓经理</p>
							<p>移动电话：15396235803</p>
							<p>电话：0592-6264073</p>
							<p>QQ：851309057</p>
							<p>地址：厦门市集美区平阳里小区66#1204室</p>
							<p>地图：</p>
							$map";
					?>
				</div>
				<div class="about-img">
				</div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div> 
	
	<script type="text/javascript">
	    //创建和初始化地图函数：
	    function initMap(){
	        createMap();//创建地图
	        setMapEvent();//设置地图事件
	        addMapControl();//向地图添加控件
	        addMarker();//向地图中添加marker
	    }
	    
	    //创建地图函数：
	    function createMap(){
	        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
	        var point = new BMap.Point(118.098545,24.621192);//定义一个中心点坐标
	        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
	        window.map = map;//将map变量存储在全局
	    }
	    
	    //地图事件设置函数：
	    function setMapEvent(){
	        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
	        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
	        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
	        map.enableKeyboard();//启用键盘上下左右键移动地图
	    }
	    
	    //地图控件添加函数：
	    function addMapControl(){
	        //向地图中添加缩放控件
		var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
		map.addControl(ctrl_nav);
	        //向地图中添加缩略图控件
		var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
		map.addControl(ctrl_ove);
	        //向地图中添加比例尺控件
		var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
		map.addControl(ctrl_sca);
	    }
	    
	    //标注点数组
	    var markerArr = [{title:"厦门信全工程技术服务有限公司",content:"厦门市集美区平阳里小区66号楼1204室",point:"118.097345|24.621775",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
	    //创建marker
	    function addMarker(){
	        for(var i=0;i<markerArr.length;i++){
	            var json = markerArr[i];
	            var p0 = json.point.split("|")[0];
	            var p1 = json.point.split("|")[1];
	            var point = new BMap.Point(p0,p1);
				var iconImg = createIcon(json.icon);
	            var marker = new BMap.Marker(point,{icon:iconImg});
				var iw = createInfoWindow(i);
				var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
				marker.setLabel(label);
	            map.addOverlay(marker);
	            label.setStyle({
	                        borderColor:"#808080",
	                        color:"#333",
	                        cursor:"pointer"
	            });
				
				(function(){
					var index = i;
					var _iw = createInfoWindow(i);
					var _marker = marker;
					_marker.addEventListener("click",function(){
					    this.openInfoWindow(_iw);
				    });
				    _iw.addEventListener("open",function(){
					    _marker.getLabel().hide();
				    })
				    _iw.addEventListener("close",function(){
					    _marker.getLabel().show();
				    })
					label.addEventListener("click",function(){
					    _marker.openInfoWindow(_iw);
				    })
					if(!!json.isOpen){
						label.hide();
						_marker.openInfoWindow(_iw);
					}
				})()
	        }
	    }
	    //创建InfoWindow
	    function createInfoWindow(i){
	        var json = markerArr[i];
	        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
	        return iw;
	    }
	    //创建一个Icon
	    function createIcon(json){
	        var icon = new BMap.Icon("../images/map.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
	        return icon;
	    }
	    
	    initMap();//创建和初始化地图
	</script>
	<?php include ("foot.php") ?>
</body>
</html>