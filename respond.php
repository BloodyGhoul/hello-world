<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		
		<?php 
		
			$prob=$_GET['id'];	//capture name value pair
			echo"<h5>Maklum Balas Aduan ".$prob."</h5>
			<hr>";
			
			$sql="SELECT * FROM aduan
				WHERE PROB='$prob'";
			$rs=mysqli_query($db, $sql);	//run sql
			$rec=mysqli_fetch_array($rs);
			
		?>
            <div>
            <table width="50%" border="0">
                <tr>
                    <td>No ID </td>
                    <td width="10%"> : </td>
                    <td><?php echo $rec['no_id']; ?><br></td>
                </tr>
                <tr>
                    <td>Masalah </td>
                    <td width="10%"> : </td>
                    <td><?php echo $rec['prob']; ?><br></td>
                </tr>
                <tr>
                    <td>Tempat </td>
                    <td width="10%"> : </td>
                    <td><?php echo $rec['loc']; ?><br></td>
                </tr>
                <tr>
                    <td>Masa </td>
                    <td width="10%"> : </td>
                    <td><?php echo $rec['time']; ?><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            </div>
            <hr>

		<form class="form" role="form" name="" action="" method="GET">
                
              <p>Maklum Balas : </p>

              <input type="hidden" name="id" 
			  value="<?php echo $_GET['id'];?>">

              <input class="form-control" name="respond" type="text" 
			  placeholder="" 
			  value="<?php echo $rec['respond']; ?>"><br>
			  
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" 
			  name="btnupdate"
			  value="SIMPAN">

			  <a class='btn btn-embossed btn-primary' href='insert_complaint_a.php' target='_parent'>KEMBALI</a>

		</form>
		
		<?php 
		
		
		$posted = false;

		//kalau dpt error
		//$btnupdate=$_GET['btnupdate'];
		if(($_GET['btnupdate'])=='SIMPAN'){

			$posted = true;
			////onlywhen user click UPDATE button
			$respond=$_GET['respond'];
			$btnupdate=$_GET['btnupdate'];
			
			//the sql command for update
			$sql="UPDATE aduan SET
			respond='$respond'
			WHERE prob='$prob' ";
			$rs=mysqli_query($db, $sql);	//run sql
			//$rec=mysqli_fetch_array($rs);
			if($rs==true){//berjaya simpan dlm table
				//echo "<a href='insert_complaint_a.php' target='_parent'>Lihat Senarai</a>";
				//echo "<a href='forminsert.php'>Insert another record.";
			}
		}
		else {
			echo "<p><br></p>";
		}
			
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['respond']) ) 
				echo "<script type='text/javascript'>alert('Maklum balas bagi $prob telah DIKEMASKINI!')</script>";
			else
				echo "<script type='text/javascript'>alert('Tidak berjaya kemaskini rekod.')</script>";
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
