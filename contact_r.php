<?php 
include ("inc_r.php"); 

$id=$_SESSION['no_id'];

?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Hubungi Kami</h5>
		
		<hr>
		<br>
		<b>Pejabat Pentadbiran,</b><br>
		Aras Bawah Blok Cempaka,<br>
		<p>Jalan Tun Teja 3,
		Taman Tun Teja,
		<br>
		48000 Rawang,
		<br>
		Selangor.
		<br><br>
		No Pejabat : 03-60937889 (Norra)
		<br>
		Emel : pentadbiran_ttj@gmail.com</p>
		<br>
		
		Jika anda mempunyai sebarang pertanyaan/cadangan, sila hubungi kami dengan mengisi borang yang disediakan di bawah.
		<form class="form" role="form" name="" action="" method="GET"><br>
			  
			  <input class="form-control" name="id" 
			   type="hidden" 
			  placeholder="" value="<?php echo $id; ?>">

			  Perkara :
			  <input class="form-control" name="perkara" type="text" 
			  placeholder=""><br>
			  Kandungan Mesej :
			  <textarea class="form-control" name="mesej" type="text" rows="3"
			  placeholder=""></textarea><br>
			  <input class="btn btn-embosed btn-primary" type="submit" name="hantar"
			  value="Hantar">
			  <a href="" class="btn btn-embosed btn-primary" type="clear" 
			  value="">Padam</a><br>

		</form>
		<?php 
		$posted=false;
		
		if(isset($_GET['mesej'])){//jika ada kontent dalam borang

			
			$id=$_GET['id'];
			$perkara=$_GET['perkara'];
			$mesej=$_GET['mesej'];
			
			$sql="insert into contactMe
			(NAMA,PERKARA, MESEJ)
			values 
			('$id','$perkara','$mesej')";
			$rs=mysqli_query($db, $sql);

			if($rs==true){//berjaya simpan dalam table
				//echo "Terima kasih kerana bagi kerjasama. ";
				$posted=true;

				$id=$perkara;
				$url="output_contact.php?id=".$id;
				echo "<br><a href='$url'> <b><u>Lihat untuk cetak</u></b></a>";
				echo "<br>";
				
			}else{//tak berjaya masukkan rekod
				//echo mysqli_error($db);
				//echo "Sila penuhkan maklumat";
				echo "<script type='text/javascript'>alert('Sila penuhkan maklumat!')</script>";
			}
		}
		else{
			echo "<br>";
		}
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['mesej']) ) {
				echo "<script type='text/javascript'>alert('Terima kasih kerana bagi kerjasama!!')</script>";
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
