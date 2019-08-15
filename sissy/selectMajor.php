
<?php
	session_start();
	$majorId = $_GET['majorID'];
	$majorName = $_GET['majorName'];
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}	
	$query = "select studentMajor from student where studentID=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('i',$_SESSION['$studentID']);
	$stmt->bind_result($studentMajor);
	$stmt->execute();	
	$stmt->fetch();
	if($studentMajor!=0)
	{
		echo '<script type="text/javascript">alert("您已选择了专业，不可再选");history.go(-1);</script>';
		exit;
	}
	$db=new mysqli('localhost','root','','sissy');
	$db->query("set names utf8");
	$query = "update student set studentMajor =? where studentID =?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ii',$majorId,$_SESSION['$studentID']);

	$stmt->execute();
	if($db->affected_rows == 1)
	{
		echo '<script type="text/javascript">alert("您已选择'.$majorName.'");history.go(-1);</script>';
		exit;
	}	
?>