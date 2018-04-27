<?php 
include ("inc_r.php"); 
$id=$_SESSION['no_id'];?>
<!-- ***********Edit your content STARTS from here******** -->
<h5>Borang aduan</h5><hr>
Isi butiran aduan dengan lengkap<br>
<form class="form" role="form" name="" action="" method="GET"><br>
	No ID :
	<input class="form-control" name="no_id" readonly type="text" placeholder="<?php echo $id ?>"><br>
	Kategori Aduan :
	<select class="form-control" name="kategori">
		<option value='Umum'> Umum</option>
		<option value='Kebersihan'> Aduan Berkaitan Kebersihan</option>
		<option value='Sosial'> Aduan Berkaitan Sosial</option>
		<option value='Parkir'> Aduan Berkaitan Parkir</option>
		<option value='Warga asing'> Aduan Berkaitan Warga Asing</option>
		<option value='Vandalisme'> Aduan Berkaitan Vandalisme</option>
	</select>
	<br>
	Aduan Yang Ingin Dikemukakan: 
	<input class="form-control" name="prob" type="text" ><br>
	Lokasi :
	<input class="form-control" name="loc" type="text" placeholder=""><br>
	<input type="hidden" name="date" value="<?php echo date('ymd');?>">
	<?php date_default_timezone_set("Singapore"); ?>
	<input type="hidden" name="time"  value="<?php echo date('h:i A');?>">
	<input class="btn btn-embosed btn-primary" type="submit" value="Hantar">
	<a href="" class="btn btn-embosed btn-primary" type="clear" value="">Padam</a><br>
</form>
<?php 
$posted = false;
if(isset($_GET['prob'])){//jika ada kontent dalam borang
	$no_id=$id;
	$kategori=$_GET['kategori'];
	$prob=$_GET['prob'];
	$loc=$_GET['loc'];
	$date=$_GET['date'];
	$time=$_GET['time'];
	$respond='';

	$sql="insert into aduan (NO_ID,KATEGORI, PROB, LOC, DATE, TIME, RESPOND) values ('$no_id','$kategori','$prob','$loc','$date','$time','$respond')";
	$rs=mysqli_query($db, $sql);
	if($rs==true){//berjaya simpan dalam table		
    	$posted = true;
		$id=$prob;
		$url="output_complaint.php?id=".$id;
		echo "<br><a href='$url'> <b><u>Lihat untuk cetak</u></b></a>";
		echo "<br>";
	}else{//tak berjaya masukkan rekod
		echo mysqli_error($db);
	}
}
else{
	echo "<br>";
}

if( $posted ) {
	if( $result=isset($_GET['prob']) ) 
		echo "<script type='text/javascript'>alert('Aduan telah berjaya dihantar!')</script>";
	else
		echo "<script type='text/javascript'>alert('Tidak berjaya hantar aduan!')</script>";
	}
?>
</div><!-- end main content -->
<?php
//include the sidebar menu
include ("inc/sidebar-menu_r.php");
?>
</div></div><!-- end container -->
<?php include ("inc/footer.php");?>