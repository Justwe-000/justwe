<!DOCTYPE html>

<html lang="zh">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>男娘大学</title>
	<link rel="stylesheet" href="./static/css/bootstrap.css">
</head>
<body>
 <div class="container">
<div class="row clearfix">
<div id="top">
    <div class="top">
		<div class="col-md-12 column">
       <?php include 'base.php'; ?>
	   <?php 
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}	
	$db->query("set names utf8");
	$query = "select majorID,majorName,majorDes,majorImg from major where majorDegree = 1";
	$stmt = $db->prepare($query);
	$stmt->bind_result($majorID,$majorName,$majorDes,$majorImg);
	$stmt->execute();	
?>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
					<p style = "font-size:30px;text-align: center;">主修专业</p>
					<ul class=entries>					
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
				
					<?php 
					echo '<a href="major_next.php?majorID='.$majorID.'"><img  style="width:100%;margin:auto;padding:20px;" src="'.$majorImg.'"/></a>';
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $majorName;?>
			        </p>
					
					</div>
					<?php } ?></ul>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>