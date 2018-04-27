<?php include ("inc_a.php"); ?>
		  <!-- ***********Edit your content STARTS from here******** -->
		<h5>Cari Status (Penyewa/Pemilik)</h5>   
		<form name="formsearch" action="" method="GET" 
			class="form-inline" role="form" >
			  <select class="form-control" name="status">
				<option value='Penyewa'> Penyewa</option>
				<option value='Pemilik'> Pemilik</option>
			  </select>
			  <input class="btn btn-embosed btn-info" 
			  type="submit" value="Cari">
		</form>
		<hr>
		<?php
		//capture textbox data
		if(isset($_GET['status'])){
			$key=$_GET['status'];
		}
        else{//tiada data dlm textbox
		}
		//Create SQL query, add WHERE clause to narrow listing
		$query="select *
		from resident
		where status like '%$key%'";
		//Execute the query
		$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
		}
		if(mysqli_num_rows($qr)==0){//no record found
		}//end no record
		else if($key==""){
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
  </div><!-- end row -->
</div><!-- end container -->
<?php include ("inc/footer.php");?>