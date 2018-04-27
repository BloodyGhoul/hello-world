<?php
	$noStaff=$_POST['noStaff'];
	$password=md5($_POST['password']);
	
	include ("inc/dbconn.php");
	
	$sql="SELECT * FROM admin
			WHERE NOSTAFF='$noStaff' AND 
			PASSWORD='$password' ";
	$rs=mysqli_query($db, $sql);
	if (mysqli_num_rows($rs)==1){
		header("location: search.php");
	}
	else{
		header("location: login.php");
	}

//	include ("inc/dbconn.php");
	
//	session_start();//to utilize server session
//	$empno=$_POST['empno'];
//	$password=md5($_POST['password']);
	
//	if (!empty($errors))
//	{
//		$sql="SELECT * FROM admin
//			WHERE NOSTAfF='$noStaff' AND 
//			PASSWORD='$password' ";
			
//		$rs=mysqli_query($db, $sql);
//		if (mysqli_num_rows($rs)==0)
//		{
	//		$errors[] = 'You are now logged in...<a href="search.php">Log in</a>';
	//	}
//	}
	
//	$sql="SELECT * FROM admin
//			WHERE EMPNO='$empno' AND 
//			PASSWORD='$password' ";
		//	if ('empno'==$empno && 'password'==$password){
		//		header("location: search.php");
		//	}
		//	else{
		//		header("location: login.php?msg=Username and password does NOT match!!");
		//	}
//	$rs=mysqli_query($db, $sql);
//	if (mysqli_num_rows($rs)==1){
		//username and password MATCH
	//	$_SESSION['sessionid']=session_id();
	//	$_SESSION['empno']=$empno;
	//	'empno'=$empno;
	//	header("location: login.php?msg=Username and password does NOT match!!");
///	}
//	else{
//		header("location: search.php");
//	}
?>
