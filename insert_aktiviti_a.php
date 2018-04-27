<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		
		<h5>Kemaskini Cadangan</h5>
		<hr>
		<?php
				
			$query="select *
			from r_system WHERE sah=''
			group by date desc,timeBefore desc";
				
			$qr=mysqli_query($db,$query);
			
			if($qr==false){//sql error
				echo ("Query cannot be executed!<br>");
				echo ("SQL Error : ".mysqli_error($db));
			}
			else{//sql successful
			//echo ("Query successfully executed!<br>");
			}
		
			if(mysqli_num_rows($qr)==0){//no record found
				echo ("Tiada cadangan <br>");
			}//end no record
			else{//there is/are record(s)
			
				echo "
				<div class='panel panel-default'>
				<table width='100%' class='table table-hover table-bordered'>
					<thead>
						<th>Cadangan</th>
						<th width='20%'>Pencadang</th>
						<th>Tempat</th>
						<th width='12%'>Tarikh</th>
						<th width='17%'>Masa</th>
						<th>Pengesahan</th>
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
						$title=$rekod['title'];
						echo "<td><b>".$rekod['title']." : </b><br>".$rekod['detail_activity']."</td>";
						echo "<td><b>".$rekod['no_id']." : </b><br>".$rekod['name']."</td>";
						echo "<td>".$rekod['location']."</td>";
						
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
						$timeBefore=$rekod['timeBefore'];
						$timeAfter=$rekod['timeAfter'];
						//$d=mktime($time);
						//echo "Created date is " . date("h:i:sa", $d);
						//echo "Created date is " . date($time);
						echo "<td>".$timeBefore." - ".$timeAfter."</td>";
						$approval="approval.php?id=".$rekod['title'];
						$reject="reject.php?id=".$rekod['title'];
						echo "<td>
						
						<a href='$approval' title='Terima ".$rekod['title']."' 
						data-toggle='tooltip'><span class='fui-check'></span></a>&emsp;
						
						<a href='$reject' title='Tolak ".$rekod['title']."' 
						data-toggle='tooltip'><span class='fui-cross'></span></a>
						";
						
						echo "</td>";
						//echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']." ".$rekod['timeAMPM']."</td>";
					echo "</tr>";
					
				}//end display records
				echo "</table>";
				echo "</div>";
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
