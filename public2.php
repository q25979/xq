<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>海报区</title>
	<link rel="stylesheet" href="css/public2.css"">
</head>
<body>
	<!-- 海报区 -->
	<div class="public2-banner">	
	<?php  
		$id = intval($_GET["id"]);
		$num = intval($id/100);
		$img = array(
				'<a href="javascript:"><img src="../images/company.jpg"></a>',
				'<a href="javascript:"><img src="../images/uav-app.jpg"></a>',
				'<a href="javascript:"><img src="../images/uav-sale.jpg"></a>',
				'<a href="javascript:"><img src="../images/tec-ser.jpg"></a>',
				'<a href="javascript:"><img src="../images/achievement.jpg"></a>',
				'<a href="javascript:"><img src="../images/news.jpg"></a>',
				'<a href="javascript:"><img src="../images/about.jpg"></a>',
				'<a href="javascript:"><img src="../images/recruit.jpg"></a>'
			);

		switch ($num) 
		{
			case 1:
				echo $img[0];
				break;		
			case 2:
				echo $img[1];
				break;
			case 3:
				echo $img[2];
				break;
			case 4:
				echo $img[3];
				break;
			case 5:
				echo $img[4];
				break;
			case 6:
				echo $img[5];
				break;
			case 7:
				echo $img[6];
				break;
			case 8:
				echo $img[7];
				break;
			default:
				# code...
				break;
		}
	?>
	</div>
</body>
</html>