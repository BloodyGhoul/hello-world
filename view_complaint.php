<?php 
include ("inc_r.php"); 
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Aduan</h5>
		<hr>
		<?php
			$id=$_SESSION['no_id'];
			$query="select *
			from aduan where no_id='$id'
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
				echo ("Sila hantar aduan melalui menu sebelah kanan. <br>");
			}//end no record
			else{//there is/are record(s)
			
				echo "
				<div class='panel panel-default'>
				<table width='100%' class='table table-hover table-bordered'>
					<thead>
						<th width='15%'>Tarikh</th>
						<th width='14%'>Masa</th>
						<th>Masalah</th>
						<th>Tempat</th>
						<th>Status</th>
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
						//echo "<td> "; echo convertDate($id);" </td>";	
						echo "<td>".$rekod['prob']."</td>";
						echo "<td>".$rekod['loc']."</td>";
						
						echo "<td>";
						
						if ($rekod['respond']==''){
							echo "Sedang Diproses...";
						}
						else {
							echo $rekod['respond'];
						}
						
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
		include ("inc/sidebar-menu_r.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>
