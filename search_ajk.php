<?php 
include ("inc_r.php"); 
?>

		  <!-- ***********Edit your content STARTS from here******** -->
		<h5 class="panel-heading">Cari AJK</h5>
		<br>
        Sila masukkan nama/jawatan<br>
		<form name="formsearch" action="" method="GET" 
			class="form-inline" role="form" >
			  
			  <input class="form-control" name="staffname" 
			  type="text" placeholder="Nama/Jawatan AJK...">
			  <input class="btn btn-embosed btn-info" 
			  type="submit" value="Cari">

		</form>
		<hr>
		<?php
		//capture textbox data
		if(isset($_GET['staffname'])){
			$key=$_GET['staffname'];
		}else{//tiada data dlm textbox
			
			$key="Tiada kata carian...";
		}
		//Create SQL query, add WHERE clause to narrow listing
		$query="select ALAMAT, NAMA, JAWATAN, NO_PHONE, EMEL
		from a_system
		where NAMA like '%$key%' OR JAWATAN like '%$key%'";
		
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
			echo "Sila masukkan kata carian.";
		}
		else{//there is/are record(s)
			echo ("Telah jumpa ".mysqli_num_rows($qr)." rekod bagi carian tersebut: $key...<br>");
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				<thead>
					<th>NAMA</th>
					<th>JAWATAN</th>
					<th>NO TELEFON</th>
					<th>EMEL</th>
                    <th>ALAMAT</th>
				</thead>";
			
			while ($rekod=mysqli_fetch_array($qr)){
				
				echo "<tr>";
				echo "<td>".$rekod['NAMA']."</td>";
				echo "<td>".$rekod['JAWATAN']."</td>";
				echo "<td>0".$rekod['NO_PHONE']."</td>";
				echo "<td>".$rekod['EMEL']."</td>";
				echo "<td>".$rekod['ALAMAT']."</td>";
				echo "</tr>";
			}//end display records
			echo "</table>
			</div>";
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
