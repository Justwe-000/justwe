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
			
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
					<p style = "font-size:30px;text-align: center;">
					姬友
					</p>
					<?php 
						$db=new mysqli('localhost','root','','sissy');
						if(mysqli_connect_errno()){
							//echo '<p>连接数据库失败</p>';
							echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
							exit;
						}	
						$db->query("set names utf8");
						$query = "select friendID,friendName,friendimg from friend ";
						$stmt = $db->prepare($query);
						$stmt->bind_result($friendID,$friendName,$friendimg);
						$stmt->execute();	
					?>
					<div class="col-md-12 column">
					<p style = "font-size:25px;text-align: center;">你最多可以有4个姬友。他们可以激活每天一次</p>
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
					<?php 
					echo '<a href="friends_next.php?friendID='.$friendID.'"><img style="width:100%;margin:auto;padding:20px;" src="'.$friendimg.'"/>';
					
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $friendName;?>
			        </p>
					</div>
						<?php } ?>
					</div>	