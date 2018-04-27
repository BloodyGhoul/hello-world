<?php include ("inc_a.php"); ?>

		<!-- ***********Edit your content STARTS from here******** -->
		
		<?php 
		
			$id=$_GET['id'];	//capture name value pair
			
			$sql="SELECT * FROM a_system
				WHERE NO='$id'";
			$rs=mysqli_query($db, $sql);	//run sql
			$rec=mysqli_fetch_array($rs);

			echo"<h5>Kemaskini ".$rec['jawatan']."</h5>
			<hr>";
			
		?>
		<form class="form" role="form" name="" action="" method="GET">

			  <input class="form-control" name="jawatan" type="text" readonly
			  maxlength="6"
			  value="<?php echo $rec['jawatan']; ?>"><br>
			  <input class="form-control" name="nama" type="text" 
			  placeholder="Nama..."
			  value="<?php echo $rec['nama']; ?>"><br>
			  <input class="form-control" name="no_phone" type="text" 
			  placeholder="No Telefon..."
			  value="<?php echo $rec['no_phone']; ?>"><br>
			  <input class="form-control" name="emel" type="text" 
			  placeholder="Emel..."
			  value="<?php echo $rec['emel']; ?>"><br>
			  <input class="form-control" name="alamat" type="text" 
			  placeholder="Alamat..."
			  value="<?php echo $rec['alamat']; ?>"><br>

			  <input class="form-control" name="id" type="hidden" 
			  placeholder=""
			  value="<?php echo $id; ?>">
			  
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" 
			  name="btnupdate"
			  value="KEMASKINI">
			  <a class="btn btn-embosed btn-primary" href="ajk_a.php">KEMBALI</a>
			  <br>

		</form>
		<hr>
		
		<?php 
		
		$posted=false;
		if(($_GET['btnupdate'])=='KEMASKINI'){

			$posted=true;
			////onlywhen user click UPDATE button
			$id=$_GET['id'];
			$jawatan=$_GET['jawatan'];
			$nama=$_GET['nama'];
			$no_phone=$_GET['no_phone'];
			$emel=$_GET['emel'];
			$alamat=$_GET['alamat'];
			$btnupdate=$_GET['btnupdate'];
		
		//the sql command for update
			$sql="UPDATE a_system SET
			nama='$nama', 
			no_phone='$no_phone',
			emel='$emel',
			alamat='$alamat'
			WHERE jawatan='$jawatan' ";
			$rs=mysqli_query($db, $sql);	//run sql
			if($rs==true){//berjaya simpan dlm table
			}
		}
		else {
		}
			
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['btnupdate']) ) 
				echo "<script type='text/javascript'>alert('Rekod bagi $nama berjaya DISIMPAN!!')</script>";
			else
				echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
			}
		?>

		<!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	
  </div><!-- end row -->

</div><!-- end container -->

<?php 
//include the footer
include ("inc/footer.php");?>
