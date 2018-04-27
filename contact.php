<?php 
include ("inc1.php"); ?>
<!-- ***********Edit your content STARTS from here******** -->
<h5>Hubungi Kami</h5><hr><br><p>
<b>Pejabat Pentadbiran,</b><br>
Aras Bawah Blok Cempaka,<br>
Jalan Tun Teja 3, Taman Tun Teja,
<br>48000 Rawang,<br>Selangor.<br><br>
No Pejabat : 03-60937889 (Norra)
<br>Emel : pentadbiran_ttj@gmail.com</p><br>
		
<p>Jika anda mempunyai sebarang pertanyaan/cadangan, sila hubungi kami dengan mengisi borang yang disediakan di bawah.</p>
<form class="form" role="form" name="" action="" method="GET"><br>
	Nama :
	<input class="form-control" name="nama" type="text" placeholder=""><br>
	Perkara :
	<input class="form-control" name="perkara" type="text" placeholder=""><br>
	Kandungan Mesej :
	<textarea class="form-control" name="mesej" type="text" rows="3" placeholder=""></textarea><br>
	<input class="btn btn-embosed btn-primary" type="submit" name="hantar" value="Hantar">
	<a href="" class="btn btn-embosed btn-primary" type="clear" value="">Padam</a><br>
</form>
<?php 
$posted=false;

if(isset($_GET['nama'])){//jika ada kontent dalam borang
	$nama=$_GET['nama'];
	$perkara=$_GET['perkara'];
	$mesej=$_GET['mesej'];

	$sql="insert into contactMe (NAMA, PERKARA, MESEJ) values ('$nama','$perkara','$mesej')";
	$rs=mysqli_query($db, $sql);
		
	if($rs==true){//berjaya simpan dalam table
		$posted=true;
		$id=$perkara;
		$url="output_complaint.php?date=".$id;
		echo "<br>";
				
	}else{//tak berjaya masukkan rekod
		echo "<script type='text/javascript'>alert('Penuhkan ruangan kosong!')</script>";
	}
}
else{
	echo "<br>";
}

if( $posted ) {
	if( $result=isset($_GET['nama']) ) {
		echo "<script type='text/javascript'>alert('Terima kasih kerana bagi kerjasama.!!')</script>";
	}
	else
		echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
	}			
?>
<!-- ***********Edit your content ENDS here******** -->
	</div><!-- end main content -->
	</div><!-- end row -->
</div><!-- end container -->
<?php //include the footer
include ("inc/footer.php");?>