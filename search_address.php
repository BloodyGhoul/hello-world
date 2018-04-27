<?php 
include ("inc_a.php");
?>

		  <!-- ***********Edit your content STARTS from here******** -->
		<h5>Cari Alamat</h5>   
		<form name="formsearch" action="" method="GET" 
			class="form-inline" role="form" >
			  
			  <input class="form-control" name="alamat" 
			  type="text" placeholder="Alamat...">
			  <input class="btn btn-embosed btn-info" 
			  type="submit" value="Cari">
        

		</form>
		<hr>
		<?php
		//capture textbox data
		if(isset($_GET['alamat'])){
			$key=$_GET['alamat'];
		}
		else if(!isset($_GET['alamat'])){//tiada data dlm textbox
			
			$key="";
		}
        else{//tiada data dlm textbox
			
			$key="<p>Tiada kata carian...</p>";
		}
		//Create SQL query, add WHERE clause to narrow listing
		$query="select *
		from resident
		where address like '%$key%'";
		
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
			echo ("<p>Tiada rekod bagi carian tersebut: $key...</p>");
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
					<th>Nama</th>
					<th>Alamat</th>
					<th>Status Penghuni</th>
					<th>Bangsa</th>
				</thead>";

			while ($rekod=mysqli_fetch_array($qr)){

				$id=$rekod['no_id'];
				$urlview="view_profil.php?id=".$id;

				echo "<tr>";
				echo "<td>".$rekod['name']."
				<br>LIHAT
				<a href='$urlview' class='fui-window' 
				title='Lihat $id' 
				data-toggle='tooltip'></a></td>";
				echo "<td>".$rekod['address'];
				echo "<td>".$rekod['status'];
				echo "<td>".$rekod['race'];
				echo "</tr>";
			}//end display records
			echo "</table>";
			echo "</div>";
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
