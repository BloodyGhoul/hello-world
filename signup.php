<?php
include ("inc1.php");
?>

	<!-- ***********Edit your content STARTS from here******** -->
	<h5>Daftar Sebagai Penduduk</h5>
	<hr>
	<p>Sila isi semua maklumat di bawah</p><br>
<form name="daftar" method="" action="" class="form" role="form">
			
			Alamat Rumah :
			<input class="form-control" name="alamat" type="text" 
			placeholder="">
			<br>
			No ID :
			<input class="form-control" name="no_id" 
			type="text" placeholder="No rumah dan blok, C - Cempaka, D - Dahlia. Cth: 01-01-C">
			<br>
			Nama Ketua Keluarga :
			<input class="form-control" name="nama" type="text" 
			placeholder="Masukkan nama penuh di sini...">
			<br>
			Umur :
			<input class="form-control" name="umur" type="text" 
			placeholder="">
			<br>
			Bangsa :
			<select class="form-control" name="race">
				<option value='Melayu'> Melayu</option>
				<option value='Cina'> Cina</option>
				<option value='India'> India</option>
			</select>
			<br>
			No Telefon :
			<input class="form-control" name="nohp" type="text" 
			placeholder="">
			<br>
			Status Penghuni :
			<select class="form-control" name="status">
				<option value='Pemilik'> Pemilik</option>
				<option value='Penyewa'> Penyewa</option>
			</select>
			<br>
			Kata Laluan : 
			<input class="form-control" name="password" 
			type="password" placeholder="">
			<br>
			<input class="btn btn-embosed btn-primary" 
			type="submit" class ="submit" value="Daftar" action="">
			
</form>
			

<?php 
		if(isset($_GET['no_id'])){
			if($_GET['no_id']==''){
				echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
				echo "<br><p>Sila isi semua maklumat dan pastikan No ID adalah betul.</p>";
			}
			else {
			$id=$_GET['no_id'];
			$pass=$_GET['password'];
			$password=md5($pass);
			$nama=$_GET['nama'];
			$alamat=$_GET['alamat'];
			$umur=$_GET['umur'];
			$status=$_GET['status'];
			$nohp=$_GET['nohp'];
			$jumOrg= 1;
			$owner='';
			$race=$_GET['race'];
	
			$sql="insert into resident
			(no_id, password, name, umur, address, status, no_phone, owner, race, jumOrg)
			values 
			('$id','$password','$nama','$umur','$alamat','$status','$nohp','$owner','$race','$jumOrg')";
			$rs=mysqli_query($db, $sql);
			if($rs==true){//berjaya simpan dalam table
				
				header("location: profil.php?id=".$id);
				
				//echo "Anda berjaya daftar. Sila isi di ruangan bawah.";
				//$id=$date;
				//$url="output_complaint.php?date=".$id;
				//echo "<a href='$url'> <b><u>Lihat</u></b></a>";
				//echo "<br>";
				
			}else{//tak berjaya masukkan rekod
				//echo mysqli_error($db);
			 echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
				echo "<br><p>Sila isi semua maklumat dan pastikan No ID adalah betul.</p>";
			}
			}
		}
		else{
			echo "<br>";
			echo "<br>";
		}
	?>
	
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
