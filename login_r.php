<?php 
session_start();

include ("inc1.php");

$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","i-community");
	$id=$_POST['no_id'];
	$pass=$_POST['password'];
	$password=md5($pass);
	$result = mysqli_query($conn,"SELECT * FROM resident WHERE no_id='" . $id. "' and password = '". $password."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
		$message = "<br>Sila masukkan No. ID dan Kata Laluan yang betul...";
	} else {
		while ($rekod=mysqli_fetch_array($result)){
			$_SESSION['no_id']=$id;	
			header("location: main_r.php");
		}
	}
}
?>
<!-- ***********Edit your content STARTS from here******** -->
<h5>Log In Penduduk</h5><hr>
<form name="frmUser" method="post" action="" class="form" role="form">
	<input class="form-control" name="no_id" type="text" placeholder="No. ID"><br>
	<input class="form-control" name="password" type="password" placeholder="Kata Laluan"><br>
	<input class="btn btn-embosed btn-primary" type="submit" class ="submit" value="Masuk" action="">
	<a class="btn btn-embosed btn-primary" href="login_a.php">Log In Admin</a>		
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
</form><br><br>
	</div></div>
</div></body>
<?php include ("inc/footer.php");?>