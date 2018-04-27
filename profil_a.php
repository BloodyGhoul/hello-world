<?php 
include ("inc_a.php");
?>

		 <!-- ***********Edit your content STARTS from here******** -->
		 <!-- <img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 
		 <h5>Senarai Penghuni 
		 <br><br><h4>Carian : 
		 &emsp;<a href="search_resident.php" class="btn btn-info">Nama <span class="fui-search"></span></a>
		 &emsp;<a href="search_address.php" class="btn btn-info">Alamat <span class="fui-search"></span></a>
		 &emsp;<a href="search_status.php" class="btn btn-info">Status <span class="fui-search"></span></a>
		 &emsp;<a href="search_race.php" class="btn btn-info">Bangsa <span class="fui-search"></span></a>
		 </h4></h5>
		 <hr>
		 
		 
				<?php
				$query="select *
				from resident";
				
				$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			
		}//end no record
		else{//there is/are record(s)

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