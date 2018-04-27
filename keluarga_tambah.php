<?php 
include ("inc_r.php"); 
?>

		 <!-- ***********Edit your content STARTS from here******** -->
		 <!-- <img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 
		 
		<h5>Tambah Isi Rumah</h5>
		<hr>

		<p>Sila isi ruangan dibawah untuk mengemaskini bilangan isi rumah anda.</p>
			<form name='bil' method='' action='' class='form' role='form'>

				<input class='form-control' name='no_id' type='hidden' 
				placeholder='' value='$id'>
				<br>
				Nama Penuh :
				<input class='form-control' name='nama' type='text'
				placeholder=''>
				<br>
				Hubungan :
				<input class='form-control' name='hubungan' type='text'
				placeholder=''>
				<br>
				Umur :
				<input class='form-control' name='umur' type='text'
				placeholder=''>
				<br>
				Pekerjaan/Sekolah/Institusi :
				<input class='form-control' name='pekerjaan' type='text'
				placeholder=''>
				<br>
				<input class='btn btn-embosed btn-primary'
				type='submit' class ='submit' value='Tambah' action=''>
                <a href="profil.php" class="btn btn-embosed btn-primary" type="text" 
			    value="">Kembali</a><br>
					
		</form>
    <?php

		$posted=false;
		if(isset($_GET['nama'])){
			
			$id=$_SESSION['no_id'];
			$nama=$_GET['nama'];
			$hubungan=$_GET['hubungan'];
			$umur=$_GET['umur'];
			$pekerjaansekolah=$_GET['pekerjaan'];
	
			$sql="insert into bil_isi_rumah
			(no_id, nama, hubungan, umur, pekerjaan)
			values 
			('$id','$nama','$hubungan','$umur','$pekerjaansekolah')";
			$rs=mysqli_query($db, $sql);
			if($rs==true){//berjaya simpan dalam table

				$posted=true;
				
				//header("location: profil.php");
				
				//echo "Anda berjaya daftar. Sila isi di ruangan bawah.";
				//$id=$date;
				//$url="output_complaint.php?date=".$id;
				//echo "<a href='$url'> <b><u>Lihat</u></b></a>";
				//echo "<br>";
				
			}else{//tak berjaya masukkan rekod
				echo mysqli_error($db);
				echo "";
			}
		}
		else{
			echo "<br>";
			echo "<br>";
		}
				
				?>

				<?php
			if( $posted ) {
			if( $result=isset($_GET['nama']) ) {
				echo "<script type='text/javascript'>alert('Rekod bagi $nama berjaya ditambah!!')</script>";
			}
			else
				echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
			}
			
		?>
		 
		 <!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		include ("inc/sidebar-menu_r.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>