<?php
	$username = $_POST['username'];
	$password = $_POST['password'];	
	session_start();
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}


	$query = "select count(*) from student where username=? and password =?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ss',$username,$password);
	$stmt->bind_result($count);
	$stmt->execute();	
	$stmt->fetch();	
	if($count == 1)
	{
		$_SESSION['$username'] = $username;
		header("location:index.php");
	}	
	echo '<script type="text/javascript">alert("密码错误");history.go(-1);</script>';

?>