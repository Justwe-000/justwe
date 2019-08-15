<?php 
	session_start();
	if(isset($_SESSION['$username'])){
	$username = $_SESSION['$username'];}
	$db=new mysqli('localhost','root','','sissy');
	if(mysqli_connect_errno()){
		//echo '<p>连接数据库失败</p>';
		echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
		exit;
	}	
	$db->query("set names utf8");	
	$query = "select studentID from student where username=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s',$username);
	$stmt->bind_result($studentID);
	$stmt->execute();
    while($stmt->fetch())
	{		
	$_SESSION['$studentID'] = $studentID;
	}
echo        '<nav class="navbar navbar-default" role="navigation">
			<div class="collapse navbar-collapse">
				<ul class="nav nav-pills"> 
					<li class="active"><a href="index.php">首页</a></li> 
				    <li><a href="major.php">专业</a></li> 
				    <li><a href="lesson.php">课程</a></li> 
					  <li><a href="club.php">社团</a></li> 
				    <li><a href="friends.php">姬友</a></li> 
					<li><a href="punishment.php">处分</a></li> 
					<li><a href="schedule.php">课程表</a></li> 
					<li><a href="plan.php">学习进度</a></li> 
				    <li><a href="setting.php">校规/帮助</a></li> 
					<li><a href="register.html"><span class="glyphicon glyphicon-user"></span> 注册</a></li> 
				    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>';
echo					'<li><a>欢迎,'; if(isset($_SESSION['$username'])) echo $_SESSION['$username']; else echo"请登录";echo'</a></li>';
echo			    '</ul> 
				</div> 
			</nav>';
?>