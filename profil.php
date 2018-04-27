<?php 
include ("inc_r.php"); 
?>

		 <!-- ***********Edit your content STARTS from here******** -->
		 <!-- <img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 
		 <h5>Maklumat Peribadi</h5>
		 <hr>
		 
		 
				<?php
				$id=$_SESSION['no_id'];
				$query="select *
				from resident
				where no_id='$id'";
				
				$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			
		}//end no record
		else{//there is/are record(s)
			while ($rekod=mysqli_fetch_array($qr)){

				if ($rekod['status']=="Penyewa"){
					if($rekod['owner']==""){
					echo "Sila isi nama tuan rumah di bawah.";
					}

					$id=$rekod['no_id'];
				
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				
				<tr>
					<th>No ID :</th>
					<th> $id </th>
				</tr>
				<tr>
					<th>Nama Ketua Keluarga : </th>
					<th>".$rekod['name']."</th>
				</tr>
				<tr>
					<th>Umur : </th>
					<th>".$rekod['umur']."</th>
				</tr>
				<tr>
					<th>Alamat : </th>
					<th>".$rekod['address']."</th>
				</tr>
				<tr>
					<th>No Telefon : </th>
					<th>".$rekod['no_phone']."</th>
				</tr>
				<tr>
					<th>Status Penghuni : </th>
					<th>".$rekod['status']."</th>
				</tr>
				<tr>
					<th>Jumlah Isi Rumah : </th>
					<th>".$rekod['jumOrg']."</th>
				</tr>
				<tr>
					<th>Nama Tuan Rumah : </th>
					<th>".$rekod['owner']."</th>
				</tr>
				
				
				";
				}
				
				else {

				$id=$rekod['no_id'];
				
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				
				<tr>
					<th>No ID :</th>
					<th> $id </th>
				</tr>
				<tr>
					<th>Nama Ketua Keluarga : </th>
					<th>".$rekod['name']."</th>
				</tr>
				<tr>
					<th>Umur : </th>
					<th>".$rekod['umur']."</th>
				</tr>
				<tr>
					<th>Alamat : </th>
					<th>".$rekod['address']."</th>
				</tr>
				<tr>
					<th>No Telefon : </th>
					<th>".$rekod['no_phone']."</th>
				</tr>
				<tr>
					<th>Status Penghuni : </th>
					<th>".$rekod['status']."</th>
				</tr>
				<tr>
					<th>Jumlah Isi Rumah : </th>
					<th>".$rekod['jumOrg']."</th>
				</tr>
				
				
				";
				}
				
			}//end display records

			/*<tr>
					<th>Jenis Kenderaan : </th>
					<th>".$rekod['kenderaan']."
				</tr>
				<tr>
					<th>No Daftar Kenderaan : </th>
					<th>".$rekod['noDaftar']."</th>
				</tr>
				*/
			
			echo "</table>";
			
			
				  
			
			echo "</div>";
			echo "
				<a class='btn btn-embosed btn-primary' href='profil_edit.php'>EDIT</a>";
		}//end record found
				?>
<br><br>
		<h5>Bilangan Isi Rumah</h5>
		<hr>
		 
		 
				<?php
				$id=$_SESSION['no_id'];
				$query="select *
				from bil_isi_rumah
				where no_id='$id'
				group by umur desc";
				
				$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found

			echo "<p>Sila isi ruangan dibawah untuk mengemaskini bilangan isi rumah anda.</p>";
			echo "<form name='bil' method='' action='' class='form' role='form'>

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
				type='submit' class ='submit' value='Kemaskini' action=''>
					
		</form>";

		if(isset($_GET['nama'])){
			
			$id=$_GET['no_id'];;
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

		}//end no record
		else{//there is/are record(s)

		echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				
				<thead>
					<th>Nama</th>
					<th>Hubungan</th>
					<th>Umur</th>
					<th>Pekerjaan/Sekolah/Institusi</th>
					<th>Kemaskini</th>
				</thead>";

				$bil=1;
			while ($rekod=mysqli_fetch_array($qr)){
				
				$bil++;
				
			echo"

				<tr>
					<td>".$rekod['nama']."</td>
					<td>".$rekod['hubungan']."</td>
					<td>".$rekod['umur']."</td>
					<td>".$rekod['pekerjaan']."</td>
					<td><a class='btn btn-embosed btn-primary' href='keluarga_edit.php'>EDIT</a></td>
				</tr>
				
				";
				
			}//end display records
			
				$no_id=$_SESSION['no_id'];

			$sql="UPDATE resident SET
            jumOrg='$bil'
			WHERE no_id='$no_id' ";
			$rs=mysqli_query($db, $sql);	//run sql
			//$rec=mysqli_fetch_array($rs);
			if($rs==true){//berjaya simpan dlm table
				echo "";
				//echo "<a href='forminsert.php'>Insert another record.";
			}
			
			echo "</table>";
			
			echo "</div>";
			echo "
				
				<a class='btn btn-embosed btn-primary' href='keluarga_tambah.php'>TAMBAH</a>";
		}//end record found
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