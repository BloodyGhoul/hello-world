<?php 
include ("inc_a.php");
?>

<!-- ***********Edit your content STARTS from here******** -->
		
<h5>Pengesahan <?php echo $id=$_GET['id']; ?></h5>
<hr>

<form class="form-inline" role="form" name="" action="" 
method="GET">
				
<h3>Terima cadangan <?php echo $id=$_GET['id']; ?>?</h3>
			  
<input type="hidden" name="id" 
  value="<?php echo $_GET['id'];?>">
		  
<input type="hidden" name="sah" 
 value="sah">
			  
<input class="btn btn-embosed btn-primary" 
  name="terima" type="submit" value="TERIMA">
  <a href="insert_aktiviti_a.php" 
  class="btn btn-embosed btn-primary">KEMBALI</a>
			  
</form>

<hr>

<?php 

$posted=false;
		
if ($_GET['terima']=='TERIMA'){//button TERIMA clicked
		
	$terima=$_GET['terima'];
	$sah=$_GET['sah'];
			
	$sql="UPDATE r_system SET sah='$sah'
	WHERE title='$id' ";//sql qery to delete
	$rs=mysqli_query($db, $sql);
	if($rs==true){//successfully executed
				
		$posted=true;
	}
}
				
?>

<?php
	if( $posted ) {
		if( $result=isset($_GET['terima']) ) {
			echo "<script type='text/javascript'>alert('Cadangan bagi $id berjaya DITERIMA!!')</script>";
		}

		else
			echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
	}
			
?>

<!-- ***********Edit your content ENDS here******** -->
		
</div><!-- end main content -->

<?php
	//include the sidebar menu
?>

</div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>