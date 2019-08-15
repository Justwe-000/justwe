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
					社团
					</p>
					<?php 
						$db=new mysqli('localhost','root','','sissy');
						if(mysqli_connect_errno()){
							//echo '<p>连接数据库失败</p>';
							echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
							exit;
						}	
						$db->query("set names utf8");
						$query = "select clubID,clubName,clubimg from club where clubLevel = 1";
						$stmt = $db->prepare($query);
						$stmt->bind_result($clubID,$clubName,$clubimg);
						$stmt->execute();	
					?>
				  <div class="col-md-12 column">
					<p style = "font-size:30px;text-align: center;">普通社团</p>
					<p style = "font-size:25px;text-align: center;">你最多可以参加5个社团。社团的活动任务和奖励可以随时打开或关闭。</p>
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
					<?php 
					echo '<a href="club_next.php?clubID='.$clubID.'"><img style="width:100%;margin:auto;padding:20px;" src="'.$clubimg.'"/></a>';
					
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $clubName;?>
			        </p>
					</div>
					<?php } ?>
					</div>	
				    <?php 
						$db=new mysqli('localhost','root','','sissy');
						if(mysqli_connect_errno()){
							//echo '<p>连接数据库失败</p>';
							echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
							exit;
						}	
						$db->query("set names utf8");
						$query = "select clubID,clubName,clubimg from club where clubLevel = 2";
						$stmt = $db->prepare($query);
						$stmt->bind_result($clubID,$clubName,$clubimg);
						$stmt->execute();	
					?>
					<div class="col-md-12 column">
					<p style = "font-size:30px;text-align: center;">精英社团</p>
					<p style = "font-size:25px;text-align: center;">解锁100学分，你可以加入 1 个精英社团</p>
					<?php while($stmt->fetch()){?>
					<div style = "width:33%;float:left;">
					<?php 
					echo '<a href="club_next.php?clubID='.$clubID.'"><img style="width:100%;margin:auto;padding:20px;" src="'.$clubimg.'"/></a>';
					
					?>
					<p style ="font-size:20px;text-align: center;">
				     <?php echo $clubName;?>
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