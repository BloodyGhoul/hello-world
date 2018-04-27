<?php include ("inc_a.php"); ?>
<h5>Tambah AJK</h5>
<hr>
<form class="form" role="form" name="" action="" method="GET">
Sila isi semua maklumat di bawah<br><br>	  
	  Jawatan (HURUF BESAR) :
	  <input class="form-control" name="jawatan" 
	  type="text" 
	  placeholder=""><br>
	  Nama (HURUF BESAR) :
	  <input class="form-control" name="nama" type="text" 
	  placeholder=""><br>
	  No Telefon :
	  <input class="form-control" name="no_phone" type="text" 
	  placeholder=""><br>
	  Emel:
	  <input class="form-control" name="emel" type="text" 
	  placeholder=""><br>
	  Alamat (HURUF BESAR) :
	  <textarea class="form-control" name="alamat" type="text" 
	  placeholder="" row="3"></textarea><br>
	  <input class="btn btn-embosed btn-primary" type="submit" 
	  value="SIMPAN">
	  <a class="btn btn-embosed btn-primary" href="ajk_a.php">KEMBALI</a><br>
</form><hr>
<?php 
$posted=false;
if(isset($_GET['jawatan'])){//jika ada kontent dalam borang
	$query="select NO
	from a_system";
			
	$qr=mysqli_query($db,$query);
	if($qr==false){//sql error
		echo ("Query cannot be executed!<br>");
		echo ("SQL Error : ".mysqli_error($db));
	}
	else{//sql successful
	}
	while ($rekod=mysqli_fetch_array($qr)){
			
		$i=$rekod['NO'];
	}
	$no=$i+1;
			
	$jawatan=$_GET['jawatan'];
	$nama=$_GET['nama'];
	$no_phone=$_GET['no_phone'];
	$emel=$_GET['emel'];
	$alamat=$_GET['alamat'];

	$sql="insert into a_system
	(NO, JAWATAN,NAMA, NO_PHONE, EMEL, ALAMAT)
	values 
	('$no','$jawatan','$nama','$no_phone','$emel','$alamat')";
	$rs=mysqli_query($db, $sql);
	if($rs==true){//berjaya simpan dalam table
		$posted=true;
		echo "<br>";
	}else{//tak berjaya masukkan rekod
		echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
		echo "<p>Sila pastikan maklumat diisi dengan betul.</p>";
	}
}
else{
}

	if( $posted ) {
		if( $result=isset($_GET['jawatan']) ) 
			echo "<script type='text/javascript'>alert('Telah Berjaya Ditambah!')</script>";
		else
			echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
		}?></div></div></div>
<?php include ("inc/footer.php");?>