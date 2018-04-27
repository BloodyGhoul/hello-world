<?php 
include ("inc_a.php");
?>

<!-- ***********Edit your content STARTS from here******** -->
<h5>Kemaskini Program Masjid &emsp;<a href="berita_add.php" class="btn btn-info">Tambah Program
<span class="fui-plus"></span></a></h5>
<hr>
		 
<?php
				
$query="select TARIKH, TAJUK, PENCERAMAH, TIMEBEFORE, TIMEAFTER
from penceramah";
				
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
				<th width='22%'>Tarikh</th>
				<th>Program</th>
				<th>Penceramah</th>
				<th width='22%'>Masa</th>
			</thead>";
			
			while ($rekod=mysqli_fetch_array($qr)){	
				$id=$rekod['TAJUK'];
				$url="edit_berita.php?id=".$id;
				$urldelete="delete_berita.php?id=".$id;
				
				echo "<tr>";

				echo "<td>".$rekod['TARIKH']."
				<br>
				
				EDIT
				<a href='$url' class='fui-window' 
				title='Kemaskini $id' 
				data-toggle='tooltip'></a>

				PADAM
				<a href='$urldelete' class='fui-trash' 
				title='Padam $id' 
				data-toggle='tooltip'></a></td>";

				echo "
				</td>";
				echo "<td>".$rekod['TAJUK']."</td>";
				echo "<td>".$rekod['PENCERAMAH']."</td>";
				echo "<td>".$rekod['TIMEBEFORE']." - ".$rekod['TIMEAFTER']."</td>";
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

</body>

<?php 
//include the footer
include ("inc/footer.php");?>