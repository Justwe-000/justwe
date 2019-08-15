<?php
	session_start();
	echo $_SESSION['$studentID'];
	$lessonID = $_GET['lessonID'];
	$lessonName = $_GET['lessonName'];
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}	
	$query = "select lessonCount from student where studentID=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('i',$_SESSION['$studentID']);
	$stmt->bind_result($lessonCount);
	$stmt->execute();	
	$stmt->fetch();
	if($lessonCount>8)
	{
		echo '<script type="text/javascript">alert("只能同时选择八门课程哦");history.go(-1);</script>';
		exit;
	}
	$lessonCount = $lessonCount + 1;
	$db=new mysqli('localhost','root','','sissy');
	$db->query("set names utf8");
	$query = "update student set lessonCount =? where studentID =?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ii',$lessonCount,$_SESSION['$studentID']);
	$stmt->execute();
	
	$db=new mysqli('localhost','root','','sissy');
	$db->query("set names utf8");
	$query = "insert into studentselectlesson(studentID,lessonID) values(?,?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ii',$_SESSION['$studentID'],$lessonID);
	$stmt->execute();
	if($db->affected_rows == 1)
	{
		echo '<script type="text/javascript">alert("您已选择'.$lessonName.'");history.go(-1);</script>';
		exit;
	}	
?>