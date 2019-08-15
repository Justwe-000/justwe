<?php
$punishID = $_GET['punishID'];
$db=new mysqli('localhost','root','','sissy');
if(mysqli_connect_errno()){
	//echo '<p>连接数据库失败</p>';
	echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
	exit;
}
$db->query("set names utf8");	
$query = "select punishID,punishName,punishDes,punishimg from punishment where punishID=".$punishID;
$stmt = $db->prepare($query);
$stmt->bind_result($punishID,$punishName,$punishDes,$punishimg);
$stmt->execute();
?>
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
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div align="center" >
						<?php
						while($stmt->fetch())
						echo '<img style="width:50%;margin:auto;padding:20px;" src="'.$punishimg.'"/>';
						echo'<p style ="font-size:25px;text-align: center;">'.$punishName.'</p>';
						echo'<p style ="font-size:20px;text-align: center;">'.$punishDes.'</p>';
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