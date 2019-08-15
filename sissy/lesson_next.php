
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
			
		<?php 
		$lessonID = $_GET['lessonID'];
		$db=new mysqli('localhost','root','','sissy');
		if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
		}	
		$db->query("set names utf8");
		$query = "select lessonID,lessonName,lessonDes,lessonimg,lessonTime1,lessonTime2,prelessonID1,prelessonID2,lessonTask1,lessonTask2,lessonExam1,lessonExam2 from lesson where lessonID =".$lessonID;
		$stmt = $db->prepare($query);
		$stmt->bind_result($lessonID,$lessonName,$lessonDes,$lessonimg,$lessonTime1,$lessonTime2,$prelessonID1,$prelessonID2,$lessonTask1,$lessonTask2,$lessonExam1,$lessonExam2);
		$stmt->execute();

		function GetDay($Day){
		switch($Day){
			case "1" :
			echo"星期一";
			break;
			case "2" :
			echo"星期二";
			break;
			case "3" :
			echo"星期三";
			break;
			case "4" :
			echo"星期四";
			break;
			case "5" :
			echo"星期五";
			break;
			case "6" :
			echo"星期六";
			break;
			case "7" :
			echo"星期日";
			break;
		}	
		}	
		?>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div align="center" >
							<?php while($stmt->fetch()){?>
							<?php echo '<img style="width:50%;margin:auto;padding:20px;" src="'.$lessonimg.'"/>'; ?>
							<p style ="font-size:35px;text-align: center;">
							<?php echo $lessonName;echo $lessonID;?>
							</p> <?php }
					echo '<p style ="font-size:25px;text-align: center;">上课日期：';
					GetDay($lessonTime1);
					echo' , ';
					GetDay($lessonTime2);
					echo '<p style ="font-size:25px;text-align: center;">先修科目：';
					$query = "select lessonID,lessonName from lesson where lessonID=".$prelessonID1;
					$stmt = $db->prepare($query);
					$stmt->bind_result($lessonID1,$lessonName1);
					$stmt->execute();			
					while($stmt->fetch())
					{	
						if($prelessonID1 > '0'){
						echo '<a href="lesson_next.php?lessonID='.$lessonID1.'" style="font-size:25px;">'.$lessonName1.'，</a>';
						}else{
							echo'<a>无</a>';
						}	
					
					}
					$query = "select lessonID,lessonName from lesson where lessonID=".$prelessonID2;
					$stmt = $db->prepare($query);
					$stmt->bind_result($lessonID2,$lessonName2);
					$stmt->execute();			
					while($stmt->fetch())
					{
						echo '<a href="lesson_next.php?lessonID='.$lessonID2.'" style="font-size:25px;">'.$lessonName2.'</a>';
					}
					echo'</p>';
					echo '<p style ="font-size:25px;text-align: center;">'.$lessonDes.'</p>';
					echo '<p style ="font-size:25px;text-align: center;">日常任务选项</p>';
					echo '<p style ="font-size:20px;text-align: center;">选项 1:'.$lessonTask1.'</p>';
					echo '<p style ="font-size:20px;text-align: center;">选项 2:'.$lessonTask2.'</p>';
					echo '<p style ="font-size:25px;text-align: center;">考试选项：</p>';
					echo '<p style ="font-size:20px;text-align: center;">选项 1:'.$lessonExam1.'</p>';
					echo '<p style ="font-size:20px;text-align: center;">选项 2:'.$lessonExam2.'</p>';
					?>
					<a href="selectLesson.php?lessonID=<?php echo  $lessonID?>&lessonName=<?php echo $lessonName ?>" class="btn btn-default btn-block active" style='width:30%;'>
					选择课程</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>