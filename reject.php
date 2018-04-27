<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Penolakan <?php echo $id=$_GET['id']; ?></h5>
		<hr>
		<form class="form-inline" role="form" name="" action="" 
		method="GET">
				
			  <h3>Tolak cadangan <?php echo $id=$_GET['id']; ?>?</h3>
			  <input type="hidden" name="id" 
			  value="<?php echo $_GET['id'];?>">
			  <input class="btn btn-embosed btn-primary" 
			  name="tolak" type="submit" value="TOLAK">
			  <a href="insert_aktiviti_a.php" 
			  class="btn btn-embosed btn-primary">KEMBALI</a>
		</form>
		<hr>
		<?php 

		$posted=false;
		
		if ($_GET['tolak']=='TOLAK'){//button DELETE clicked
		
			$tolak=$_GET['tolak'];
			
			$sql="delete from r_system
					where TITLE= '$id' ";//sql qery to delete
			$rs=mysqli_query($db, $sql);
			if($rs==true){//successfully executed
				$posted=true;
				//echo "<p>Cadangan bagi $id telak ditolak!";
			}
		}
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['tolak']) ) {
				echo "<script type='text/javascript'>alert('Cadangan bagi $id berjaya DITOLAK!!')</script>";
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
