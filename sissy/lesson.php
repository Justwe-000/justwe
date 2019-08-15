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
<body style = "text-align: center;">
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
					课程列表
					</p>
					<?php 
						$db=new mysqli('localhost','root','','sissy');
						if(mysqli_connect_errno()){
							//echo '<p>连接数据库失败</p>';
							echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
							exit;
						}	
						$db->query("set names utf8");
						$query = "select lessonID,lessonName,lessonDes,lessonimg from lesson where lessondegree = 1";
						$stmt = $db->prepare($query);
						$stmt->bind_result($lessonID,$lessonName,$lessonDes,$lessonimg);
						$stmt->execute();	
					?>
					<div class="col-md-12 column">
					<p style = "font-size:30px;text-align: center;">入门课程</p>
					<p style = "font-size:25px;text-align: center;">完成入门课程任务获得1学分，通过课程考试获得3学分。</p>
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
					<?php 
					echo '<a href="lesson_next.php?lessonID='.$lessonID.'"><img style="width:100%;margin:auto;padding:20px;" src="'.$lessonimg.'"/>';
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $lessonName;?>
			        </p>
					</div>
					<?php } ?>
					</div>	
					
					
					<div class="col-md-12 column">
					<a style = "font-size:30px;text-align: center;">普通课程</a>
					<p style = "font-size:25px;text-align: center;">完成普通课程任务获得2学分，通过课程考试获得6学分。需要20学分解锁。</p>
					</div>
	
					
					<div class="col-md-12 column">
					<?php 
						$db=new mysqli('localhost','root','','sissy');
						if(mysqli_connect_errno()){
							//echo '<p>连接数据库失败</p>';
							echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
							exit;
						}	
						$db->query("set names utf8");
						$query = "select lessonID,lessonName,lessonDes,lessonimg from lesson where lessondegree = 2";
						$stmt = $db->prepare($query);
						$stmt->bind_result($lessonID,$lessonName,$lessonDes,$lessonimg);
						$stmt->execute();	
					?>
					
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
					<?php 
					echo '<a href="lesson_next.php?lessonID='.$lessonID.'"><img style="width:100%;margin:auto;padding:20px;" src="'.$lessonimg.'"/>';
					
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $lessonName;?>
			        </p>
					</div>
					<?php } ?>
					</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>