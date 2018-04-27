<?php 
include ("inc_a.php");

$query="select *
from a_system";

$qr=mysqli_query($db,$query);
if($qr==false){//sql error
echo ("Query cannot be executed!<br>");
echo ("SQL Error : ".mysqli_error($db));
}
else{//sql successful
}

while ($rekod=mysqli_fetch_array($qr)){
	if($rekod['no']==$_GET['id'])
	$nama=$rekod['nama'];
}
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Pengesahan pemadaman AJK</h5>
		<hr>
		<form class="form-inline" role="form" name="" action="" 
		method="GET">
				
			  <h3>Padam rekod  
			  <?php echo $nama;?>
			  ?</h3>
			  <input type="hidden" name="id" 
			  value="<?php echo $id=$_GET['id'];?>">
			  <input class="btn btn-embosed btn-primary" 
			  name="btndelete" type="submit" value="PADAM">
			  <a href="ajk_a.php" 
			  class="btn btn-embosed btn-primary">KEMBALI</a>
		</form>
		<hr>
		<?php 

		$posted=false;
		
		if ($_GET['btndelete']=='PADAM'){//button DELETE clicked

			$posted=true;
		
			$btndelete=$_GET['btndelete'];
			
			$sql="delete from a_system
					where NO = '$id' ";//sql qery to delete
			$rs=mysqli_query($db, $sql);
			if($rs==true){//successfully executed
			}
		}
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['btndelete']) ) {
				echo "<script type='text/javascript'>alert('Rekod bagi $nama berjaya dilupuskan!!')</script>";
			}
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
