<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Pengesahan pemadaman AJK</h5>
        <hr>
		<form class="form-inline" role="form" name="" action="" 
		method="GET">
				
			  <h3>Padam rekod  
			  <?php echo $id=$_GET['id'];?>
			  ?</h3>
			  <input type="hidden" name="id" 
			  value="<?php echo $_GET['id'];?>">
			  <input class="btn btn-embosed btn-primary" 
			  name="btndelete" type="submit" value="PADAM">
			  <a href="berita_a.php" 
			  class="btn btn-embosed btn-primary">KEMBALI</a>
		</form>
		<hr>
		<?php 
		
		$posted=false;
		if ($_GET['btndelete']=='PADAM'){//button DELETE clicked

			$posted=true;
		
			$btndelete=$_GET['btndelete'];
			
			$sql="delete from penceramah
					where tajuk= '$id' ";//sql qery to delete
			$rs=mysqli_query($db, $sql);
			if($rs==true){//successfully executed
				//echo "<p>Rekod bagi $id telah dilupuskan!";
				//echo "<a href='berita_a.php'> Kembali</a></p>";
			}
		}
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['btndelete']) ) {
				echo "<script type='text/javascript'>alert('Rekod bagi $id berjaya dipadam!!')</script>";
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
