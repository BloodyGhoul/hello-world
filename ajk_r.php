<?php 
include ("inc_r.php"); 
?>

 <!-- ***********Edit your content STARTS from here******** -->
<h5>Senarai Jawatankuasa Penduduk Taman Tun Teja - <?php echo date('Y');?> </h5>
<hr>
		
<?php
		
//Create SQL query, add WHERE clause to narrow listing
$query="select ALAMAT, NAMA, JAWATAN, NO_PHONE, EMEL 
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
				<th width='65%'>NAMA</th>
				<th>JAWATAN</th>
				<th width='30%'>NO TELEFON</th>
				<th>EMEL</th>
				<th width='30%'>ALAMAT</th>
					
			</thead>";
			
			while ($rekod=mysqli_fetch_array($qr)){
				
				echo "<tr>";
				echo "<td>".$rekod['NAMA']."</td>";
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
	include ("inc/sidebar-menu_r.php");
?>

</div><!-- end row -->

</div><!-- end container -->
</body>

<?php 
//include the footer
include ("inc/footer.php");?>