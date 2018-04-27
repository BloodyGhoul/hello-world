<?php 
include ("inc_a.php");
?>

		 <!-- ***********Edit your content STARTS from here******** -->
		 <!-- <img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 
		 <h5>Maklumat Penduduk</h5>
		 <hr>
		 
		 
				<?php
				$id=$_GET['id'];
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
				if($rekod['owner']==''){
				$id=$rekod['no_id'];
				
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				
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
					<th>Bangsa : </th>
					<th>".$rekod['race']."</th>
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
				else {
					$id=$rekod['no_id'];
				
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				
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
					<th>Bangsa : </th>
					<th>".$rekod['race']."</th>
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
		}//end record found
				?>
		<h5>Isi Rumah Penduduk</h5>
		<hr>
		 
		 
				<?php
				$id=$_GET['id'];
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
         echo "<p>Tiada rekod</p>";
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
				</thead>";

				$bil=1;
			while ($rekod=mysqli_fetch_array($qr)){
				
				
			echo"

				<tr>
					<td>".$rekod['nama']."</td>
					<td>".$rekod['hubungan']."</td>
					<td>".$rekod['umur']."</td>
					<td>".$rekod['pekerjaan']."</td>
				</tr>
				
				";
			
			
			}//end display records

			
			echo "</table>";
			
			
				  
			
			echo "</div>";
			
		}//end record found
				?>
		 
		 <!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		//include ("inc/sidebar-menu.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>