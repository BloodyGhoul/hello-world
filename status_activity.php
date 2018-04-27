<?php 
include ("inc_r.php"); 
?>

		 <!-- ***********Edit your content STARTS from here******** -->
		 <!-- <img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 
		 <h5>Aktiviti</h5>
		 <hr>
		 
				<?php	

				function convertDate($date) {
					$date = preg_replace('/\D/','/',$date);
					return date('d-m-Y',strtotime($date));
				}

                $no_id=$_SESSION['no_id'];

				$query="select * 
				from r_system where no_id = '$no_id' AND sah= 'sah' ";
				
				$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			//echo ("Tiada cadangan yang dihantar. Sila hantar cadangan melalui menu sebelah kanan.  <br>");
		}//end no record
		else{//there is/are record(s)
			$rekod=mysqli_fetch_array($qr);
			if($rekod['sah']=='sah' AND $rekod['date']>date('Y-m-d')){
				
			echo "
			<h6><b><a>Senarai Aktiviti yang Diterima</a></b></h6>
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				<thead>
					<th width='15%'>Tarikh</th>
					<th>Aktiviti</th>
					<th width='20%'>Tempat</th>
					<th width='22%'>Masa</th>
                    <th>Status</th>
				</thead>";
				
			

			date_default_timezone_set("Singapore");
						
			while ($rekod=mysqli_fetch_array($qr)){
				if ($rekod['date']>=date('Y-m-d')){
				
					$id=$rekod['date'];
					$url="view_activity_r.php?id=".$id;
					
					echo "<tr>";
					echo "<td> "; echo convertDate($id);" </td>";	
					echo "<td><b>".$rekod['title']."</b>";
					echo "<br>".$rekod['detail_activity'];
					echo "</td>";
					echo "<td>".$rekod['location']."</td>";
					echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']."</td>";
                    echo "<td><a class='fui-check'></a></td>";
					echo "</tr>";
				}
			}//end display records
			echo "</table> </div>";
			}
			else{

			}
			
		}//end record found

				$query="select *
				from r_system where no_id = '$no_id' AND sah= '' ";
				
				$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			echo ("Sila hantar cadangan aktiviti melalui menu sebelah kanan.  <br>");
		}//end no record
		else{//there is/are record(s)
			
			echo "
			<h6><b><a>Senarai Aktiviti yang Dihantar</a></b></h6>
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				<thead>
					<th width='15%'>Tarikh</th>
					<th>Aktiviti</th>
					<th width='16%'>Tempat</th>
					<th width='22%'>Masa</th>
                    <th>Status</th>
				</thead>";

			while ($rekod=mysqli_fetch_array($qr)){
				if ($rekod['date']>=date('Y-m-d')){
				
					$id=$rekod['date'];
					$url="view_activity_r.php?id=".$id;
					
					echo "<tr>";
					echo "<td> "; echo convertDate($id);" </td>";	
					echo "<td><b>".$rekod['title']."</b>";
					echo "<br>".$rekod['detail_activity'];
					echo "</td>";
					echo "<td>".$rekod['location']."</td>";
					echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']."</td>";
                    echo "<td> Sedang Diproses...</td>";
					echo "</tr>";
				}
			}//end display records
			echo "</table> </div>";
			
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

</body>

<?php 
//include the footer
include ("inc/footer.php");?>