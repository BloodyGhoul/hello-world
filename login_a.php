<?php
session_start();	//paling atas //perlu ada dlm login kalau x dia xpegi ke main_a.php

include ("inc1.php");

$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","i-community");
	$id=$_POST['id_no'];
	$pass=$_POST['password'];
	$password=md5($pass);
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE id_no='" . $id. "' and password = '". $password."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
		$message = "<br>Sila masukkan No. ID dan Kata Laluan yang betul...";
	} else {
		while ($rekod=mysqli_fetch_array($result)){
			//$id=$rekod['id_no'];
			$_SESSION['id_no']=$id;	//perlu ada dlm login kalau x dia xpegi ke main_a.php
			header("location: profil_a.php");
		}
		
	}
}
?>

	<!-- ***********Edit your content STARTS from here******** -->
	
	<h5>Log In Admin</h5>
	<hr>
<form name="frmUser" method="post" action="" class="form" role="form">
	
	<input class="form-control" name="id_no" 
			type="text" placeholder="No. ID">
			<br>
			<input class="form-control" name="password" 
			type="password" placeholder="Kata Laluan">
			<br>
			<input class="btn btn-embosed btn-primary" 
			type="submit" class ="submit" value="Masuk" action="">
			<a class="btn btn-embosed btn-primary" href="login_r.php">Log In Penduduk</a>
			
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
	
		 
</form>
			
	</div> 



	
<?php
		//include the sidebar menu
		//include ("inc/sidebar-menu.php");
	?>
	
</div>
</div>
	

</body>
<?php
include ("inc/footer.php");?>
