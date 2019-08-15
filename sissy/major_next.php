
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
		$majorID = $_GET['majorID'];
		$db=new mysqli('localhost','root','','sissy');
		if(mysqli_connect_errno()){
			//echo '<p>连接数据库失败</p>';
			echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
			exit;
		}
		$db->query("set names utf8");	
		$query = "select majorID,majorName,majorDes,majorImg,majorPrelessonID1,majorPrelessonID2,majorPrelessonID3,majorExam1,majorExam2,majorExam3 from major where majorID=".$majorID;
		$stmt = $db->prepare($query);
		$stmt->bind_result($majorID,$majorName,$majorDes,$majorImg,$majorPrelessonID1,$majorPrelessonID2,$majorPrelessonID3,$majorExam1,$majorExam2,$majorExam3);
		$stmt->execute();
		?>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div align="center" >
							<?php while($stmt->fetch()){?>
							<?php echo '<img style="width:50%;margin:auto;padding:20px;" src="'.$majorImg.'"/>'; ?>
							<p style ="font-size:35px;text-align: center;">
							<?php echo $majorName;?>
							</p> <?php }
					echo '<p style ="font-size:25px;text-align: center;">先修科目：';
					$query = "select lessonID,lessonName from lesson where lessonID=".$majorPrelessonID1;
					$stmt = $db->prepare($query);
					$stmt->bind_result($lessonID1,$lessonName1);
					$stmt->execute();			
					while($stmt->fetch())
					{
						echo '<a href="lesson_next.php?lessonID='.$lessonID1.'" style="font-size:25px;">'.$lessonName1.'，</a>';
					}	
					$query = "select lessonID,lessonName from lesson where lessonID=".$majorPrelessonID2;
					$stmt = $db->prepare($query);
					$stmt->bind_result($lessonID2,$lessonName2);
					$stmt->execute();			
					while($stmt->fetch())
					{
						echo '<a href="lesson_next.php?lessonID='.$lessonID2.'" style="font-size:25px;">'.$lessonName2.'，</a>';
					}
					$query = "select lessonID,lessonName from lesson where lessonID=".$majorPrelessonID3;
					$stmt = $db->prepare($query);
					$stmt->bind_result($lessonID3,$lessonName3);
					$stmt->execute();			
					while($stmt->fetch())
					{
						echo '<a href="lesson_next.php?lessonID='.$lessonID3.'" style="font-size:25px;">'.$lessonName3.'</a>';
					}
					echo'</p>';
					echo '<p style ="font-size:25px;text-align: center;">'.$majorDes.'</p>';
					echo '<p style ="font-size:20px;text-align: center;">毕业考试：</p>';
					echo '<p style ="font-size:20px;text-align: center;">专业考试 1:'.$majorExam1.'</p>';
					echo '<p style ="font-size:20px;text-align: center;">专业考试 2:'.$majorExam2.'</p>';
					echo '<p style ="font-size:20px;text-align: center;">专业考试 3:'.$majorExam3.'</p>';
					?>
					<a href="selectMajor.php?majorID=<?php echo  $majorID?>&majorName=<?php echo $majorName ?>" class="btn btn-default btn-block active" style='width:30%;'>
					选择专业</a>
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