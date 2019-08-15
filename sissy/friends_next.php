
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
    <div class="top">
		<div class="col-md-12 column">
        <?php include 'base.php'; ?> 
		<?php
		$friendID = $_GET['friendID'];
		$db=new mysqli('localhost','root','','sissy');
		if(mysqli_connect_errno()){
			//echo '<p>连接数据库失败</p>';
			echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
			exit;
		}
		$db->query("set names utf8");	
		$query = "select friendID,friendName,friendDes,friendimg,friendPrize1,friendBuff1,friendPrize2,friendBuff2 from friend where friendID=".$friendID;
		$stmt = $db->prepare($query);
		$stmt->bind_result($friendID,$friendName,$friendDes,$friendimg,$friendPrize1,$friendBuff1,$friendPrize2,$friendBuff2);
		$stmt->execute();
		?>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div align="center" >
						<?php
						while($stmt->fetch())
						echo '<img style="width:50%;margin:auto;padding:20px;" src="'.$friendimg.'"/>';
						echo'<p style ="font-size:25px;text-align: center;">'.$friendName.'</p>';
						echo'<p style ="font-size:20px;text-align: center;">'.$friendDes.'</p>';
						echo'<p style ="font-size:20px;text-align: center;">奖励 1: '.$friendPrize1.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp社团任务 1: '.$friendBuff1.'</p>';
						echo'<p style ="font-size:20px;text-align: center;"></p>';
						echo'<p style ="font-size:20px;text-align: center;">奖励 2: '.$friendPrize2.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp社团任务 2: '.$friendBuff2.'</p>';
						echo'<p style ="font-size:20px;text-align: center;"></p>';
						?>
						</div>
						</div>
					</div>
				</div>
			</div>	
	</div>
</div>
</div>
</body>
</html>