<?php 
include ("inc_a.php");
?>

<!-- ***********Edit your content STARTS from here******** -->
<h5>Senarai Jawatankuasa Penduduk Taman Tun Teja - <?php echo date('Y');?>  &emsp; <a href="ajk_add.php" class="btn btn-info">Tambah AJK
<span class="fui-plus"></span></a></h5>
		
<hr>
		
<?php
		
//Create SQL query, add WHERE clause to narrow listing
$query="select NO, ALAMAT, NAMA, JAWATAN, NO_PHONE, EMEL 
from a_system";
		
//Execute the query
$qr=mysqli_query($db,$query);
if($qr==false){//sql error
	echo ("Query cannot be executed!<br>");
	echo ("SQL Error : ".mysqli_error($db));
}
else{//sql successful
	//echo ("Query successfully executed!<br>");
}

echo "
	<div class='panel panel-default'>
		<table width='100%' class='table table-hover table-bordered'>
			<thead>
				<th>NAMA</th>
				<th>JAWATAN</th>
				<th width='13%'>NO TELEFON</th>
				<th>EMEL</th>
				<th>ALAMAT</th>
					
			</thead>";
			
			while ($rekod=mysqli_fetch_array($qr)){
				$id=$rekod['NO'];
				$nama=$rekod['NAMA'];
				$url="viewajk.php?id=".$id;
				$urldelete="deleteajk.php?id=".$id;
				
				echo "<tr>";
								
				echo "<td>".$rekod['NAMA']."
				<br>
				
				EDIT
				<a href='$url' class='fui-window' 
				title='Kemaskini $nama' 
				data-toggle='tooltip'></a> 

				PADAM
				<a href='$urldelete' class='fui-trash' 
				title='Padam $nama' 
				data-toggle='tooltip'></a>
				
				</td>";
				
				echo "
				</td>";
				echo "<td>".$rekod['JAWATAN']."</td>";
				echo "<td>".$rekod['NO_PHONE']."</td>";
				echo "<td>".$rekod['EMEL']."</td>";
				echo "<td>".$rekod['ALAMAT']."</td>";
				echo "</tr>";
			}//end display records
		echo "</table>";
	echo "</div>";
		
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