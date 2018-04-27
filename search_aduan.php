<?php 
include ("inc_a.php");
?>

		  <!-- ***********Edit your content STARTS from here******** -->
		<h5>Cari Aduan Mengikut Kategori</h5>
		<form name="formsearch" action="" method="GET" 
			class="form-inline" role="form" >
			  
			  <select class="form-control" name="aduan">
				<option value='Umum'> Umum</option>
				<option value='Kebersihan'> Aduan Berkaitan Kebersihan</option>
				<option value='Sosial'> Aduan Berkaitan Sosial</option>
				<option value='Parkir'> Aduan Berkaitan Parkir</option>
				<option value='Warga asing'> Aduan Berkaitan Warga Asing</option>
				<option value='Vandalisme'> Aduan Berkaitan Vandalisme</option>
			  </select>
			  <input class="btn btn-embosed btn-info" 
			  type="submit" value="Cari">

		</form>
		<hr>
		<?php
		//capture textbox data
		if(isset($_GET['aduan'])){
			$key=$_GET['aduan'];
		}
        else{//tiada data dlm textbox
			
			$key="<p>Tiada kata carian...</p>";
		}
		//Create SQL query, add WHERE clause to narrow listing
		$query="select *
		from aduan
		where kategori like '%$key%'";
		
		//Execute the query
		$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			
			//echo ("Tiada rekod bagi carian tersebut: $key...");
		}//end no record
		else if($key==""){
			echo "<p>Sila masukkan kata carian.</p>";
		}
		else{//there is/are record(s)
			echo ("<p>Telah jumpa ".mysqli_num_rows($qr)." rekod bagi carian tersebut: $key...</p>");
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
		<br><br><br>
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
