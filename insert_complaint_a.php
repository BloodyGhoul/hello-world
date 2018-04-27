<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Senarai Aduan
		 &emsp;<a href="search_aduan.php" class="btn btn-info">Kategori <span class="fui-search"></span></a></h5>
		<hr>
		<?php
				
			$query="select *
			from aduan
			group by date desc,time desc";
				
			$qr=mysqli_query($db,$query);
			
			if($qr==false){//sql error
				echo ("Query cannot be executed!<br>");
				echo ("SQL Error : ".mysqli_error($db));
			}
			else{//sql successful
			//echo ("Query successfully executed!<br>");
			}
		
			if(mysqli_num_rows($qr)==0){//no record found
				echo ("No record <br>");
			}//end no record
			else{//there is/are record(s)
			
				echo "
				<div class='panel panel-default'>
				<table width='100%' class='table table-hover table-bordered'>
					<thead>
						<th width='15%'>Tarikh</th>
						<th width='14%'>Masa</th>
						<th width='13%'>No ID</th>
						<th>Masalah</th>
						<th>Tempat</th>
						<th>Edit Status</th>
					</thead>";
				
				function convertDate($date) {
							$date = preg_replace('/\D/','/',$date);
							return date('d-m-Y',strtotime($date));
						}
						
				while ($rekod=mysqli_fetch_array($qr)){
					//$id=$rekod['date'];
					
					//$url="view_activity.php?id=".$id;
					//echo convertDate($date);
					echo "<tr>";
						//echo "<td> "; echo convertDate($id);" </td>";	
						
						$id=$rekod['date'];
						echo "<td>".convertDate($id)."</td>";
						/**
						echo "&emsp;"."
						<a href='$url' class='fui-window' 
						title='Untuk maklumat lanjut berkaitan ".$rekod['title']."' 
						data-toggle='tooltip'></a>
						</td>";
						**/
						//echo "</td>";
						//$d=mktime($time);
						//echo "Created date is " . date("h:i:sa", $d);
						//echo "Created date is " . date($time);
						echo "<td>".$rekod['time']."</td>";
						echo "<td>".$rekod['no_id']."</td>";
						echo "<td>".$rekod['prob']."</td>";
						echo "<td>".$rekod['loc']."</td>";
						
						$respond='respond.php?id='.$rekod['prob'];
						echo "<td>".$rekod['respond']."&emsp;<a href='$respond'><span class='fui-new'></span></a></td>";
						//echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']." ".$rekod['timeAMPM']."</td>";
					echo "</tr>";
					
				}//end display records
				echo "</table>";
				echo "</div>";

				include ("print.php");
				
			}//end record found
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
