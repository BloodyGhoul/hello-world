<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		
		<?php 
		
			$tajuk=$_GET['id'];	//capture name value pair
			echo"<h5>Kemaskini ".$tajuk."</h5>
			<hr>";
			
			$sql="SELECT * FROM penceramah
				WHERE TAJUK='$tajuk'";
			$rs=mysqli_query($db, $sql);	//run sql
			$rec=mysqli_fetch_array($rs);
			
		?>
		<form class="form" role="form" name="" action="" method="GET">

              
              Tajuk Program : 
              <input class="form-control" name="tajuk" type="text"
			  value="<?php echo $rec['tajuk']; ?>" readonly><br>
			  Tarikh : 
              <input class="form-control" name="tarikh" type="text"
			  value="<?php echo $rec['tarikh']; ?>"><br>
              Nama Penceramah : 
			  <input class="form-control" name="penceramah" type="text" 
			  placeholder=""
			  value="<?php echo $rec['penceramah']; ?>"><br>
              Masa Bermula : 
              <input class="form-control" width="10%" name="timeBefore" type="text" 
			  placeholder=""
			  value="<?php echo $rec['timeBefore']; ?>"><br>
              Masa Berakhir : 
              <input class="form-control" width="10%" name="timeAfter" type="text" 
			  placeholder=""
			  value="<?php echo $rec['timeAfter']; ?>"><br>

			  <input class="form-control" width="" name="id" type="hidden" 
			  placeholder=""
			  value="<?php echo $tajuk; ?>">
			  
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" 
			  name="btnupdate"
			  value="KEMASKINI">
			  
			  <a class="btn btn-embosed btn-primary" href='berita_a.php' target='_parent'>KEMBALI</a><br>

		</form>
		<hr>
		
		<?php 

		
			$posted=false;
		
		//kalau dpt error
		//$btnupdate=$_GET['btnupdate'];
		if(($_GET['btnupdate'])=='KEMASKINI'){

			$posted=true;
		////onlywhen user click UPDATE button
		$tarikh=$_GET['tarikh'];
		$tajuk=$_GET['tajuk'];
		$penceramah=$_GET['penceramah'];
		$timeBefore=$_GET['timeBefore'];
        $timeAfter=$_GET['timeAfter'];
		$btnupdate=$_GET['btnupdate'];
		
		//the sql command for update
			$sql="update penceramah SET
			tarikh='$tarikh', 
			tajuk='$tajuk',
			penceramah='$penceramah',
			timeBefore='$timeBefore',
            timeAfter='$timeAfter'
			WHERE tajuk='$tajuk' ";
			$rs=mysqli_query($db, $sql);	//run sql
			//$rec=mysqli_fetch_array($rs);
			if($rs==true){//berjaya simpan dlm table
				//echo "<p>Rekod bagi $tajuk telah DIKEMASKINI! <a href='berita_a.php' target='_parent'>Lihat Senarai</a></p>";
				//echo "<a href='forminsert.php'>Insert another record.";
			}
		}
		else {
			//echo "<p>Sila edit maklumat untuk disimpan<br></p>";
		}
			
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['btnupdate']) ) {
				echo "<script type='text/javascript'>alert('Program masjid bagi $tajuk berjaya dikemaskini!!')</script>";
			}
			else
				echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
			}
			
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
