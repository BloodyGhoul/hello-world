<?php 
include ("inc_a.php");
?>

		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Mesej</h5>
		
		<hr>
		<?php
				
			$query="select *
			from contactme";
				
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
						<th>Nama</th>
						<th>Perkara</th>
						<th>Mesej</th>
					</thead>";
				/**
						function convertDate($date) {
							$date = preg_replace('/\D/','/',$date);
							return date('d-m-Y',strtotime($date));
						}
						**/
						
				while ($rekod=mysqli_fetch_array($qr)){
					//$id=$rekod['date'];
					
					//$url="view_activity.php?id=".$id;
					
					echo "<tr>";
						//echo "<td> "; echo convertDate($id);" </td>";	
						echo "<td>".$rekod['nama']."</td>";
						//echo "<td>".$rekod['emel']."</td>";
						echo "<td>".$rekod['perkara']."</td>";
						/**
						echo "&emsp;"."
						<a href='$url' class='fui-window' 
						title='Untuk maklumat lanjut berkaitan ".$rekod['title']."' 
						data-toggle='tooltip'></a>
						</td>";
						**/
						//echo "</td>";
						echo "<td>".$rekod['mesej']."</td>";
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
