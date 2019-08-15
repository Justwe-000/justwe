<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	//print($username.','.$password.','.$identity);
	
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}	
	$query = "select count(*) from student where username=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s',$username);
	$stmt->bind_result($count);
	$stmt->execute();	
	$stmt->fetch();
	
	if($count==0)
	{
		$db=new mysqli('localhost','root','','sissy');
		$query = "insert into student (username, password) values(?,?)";
		$stmt = $db->prepare($query);
		$stmt->bind_param('ss',$username,$password);
		$stmt->execute();

		if($db->affected_rows == 1)
		{
			echo '<script type="text/javascript">alert("注册成功");history.go(-1);</script>';
			header("location:index.php");
		}		
	}	
	echo '<script type="text/javascript">alert("用户已存在，请重新输入用户名");history.go(-1);</script>';
	exit;	
?>