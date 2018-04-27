<?php 
include ("inc_r.php"); 
?>

		<!-- ***********Edit your content STARTS from here******** -->
		
		<h5>Cadangan aktiviti</h5>
		<hr>
		Isi butiran berkaitan aktiviti yang akan dilangsungkan<br>
		<form class="form" role="form" name="" action="" method="GET"><br>
			  Tajuk :
			  <input class="form-control" name="title" 
			   type="text" 
			  placeholder=""><br>
			  Tempat :
			  <input class="form-control" name="loc" type="text" 
			  placeholder=""><br>
			  Tarikh :
			  <input class="form-control" name="date" type="date" 
			  placeholder=""><br>
				<table>
					<tr>
						<td>Masa bermula :&emsp;</td>
						<td>Jam&emsp;</td>
						<td>
							<select class="form-control" width="10%" name="hour" type="int">
								<?php 
									for($i=1; $i<=9; $i++) {
										echo "<option> 0".$i."</option>";
									}
									for($i=10; $i<=12; $i++) {
										echo "<option>".$i."</option>";
									}
								?>
							</select>
						</td>
						<td>&emsp;Minit&emsp;</td>
						<td>
							<select class="form-control" width="10%" name="min" type="int">
								<?php 
									for($i=0; $i<=9; $i=$i+5) {
										echo "<option> 0".$i."</option>";
									}
									for($i=10; $i<60; $i=$i+5) {
										echo "<option>".$i."</option>";
									}
								?>
							</select>
						</td>
						<td>&emsp;AM / PM&emsp;</td>
						<td>
							<select class="form-control" name="AMPM" type="text">
							  <option>AM</option>
							  <option>PM</option>
							</select>
						</td>
					</tr>
				</table>
			<br>
				<table>
					<tr>
						<td>Masa berakhir :&emsp;</td>
						<td>Jam&emsp;</td>
						<td>
							<select class="form-control" width="10%" name="hour2" type="int">
								<?php 
									for($i=1; $i<=9; $i++) {
										echo "<option> 0".$i."</option>";
									}
									for($i=10; $i<=12; $i++) {
										echo "<option>".$i."</option>";
									}
								?>
							</select>
						</td>
						<td>&emsp;Minit&emsp;</td>
						<td>
							<select class="form-control" width="10%" name="min2" type="int">
								<?php 
									for($i=0; $i<=9; $i=$i+5) {
										echo "<option> 0".$i."</option>";
									}
									for($i=10; $i<60; $i=$i+5) {
										echo "<option>".$i."</option>";
									}
								?>
							</select>
						</td>
						<td>&emsp;AM / PM&emsp;</td>
						<td>
							<select class="form-control" name="AMPM2" type="text">
							  <option>AM</option>
							  <option>PM</option>
							</select>
						</td>
					</tr>
				</table>
				<br>
			  Penjelasan lebih lanjut :
			  <textarea class="form-control" name="detail_activity" type="text" 
			  placeholder="" rows="4"></textarea><br>
			  <input class="btn btn-embosed btn-primary" type="submit" 
			  name="btnupdate" value="Hantar">
			  <a href="" class="btn btn-embosed btn-primary" type="clear" 
			  value="">Padam</a><br>

		</form>
		<hr>
		<?php 

		$posted=false;
			
		if(isset($_GET['title'])){//jika ada kontent dalam borang
			
			
			//nanti padam bwh echo $_SESSION['no_id'];
			//$name=$_SESSION['name'];
			$no_id=$_SESSION['no_id'];
			
			$query="select *
			from resident
			where no_id='$no_id'";
				
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
				while ($rekod=mysqli_fetch_array($qr)){
					$name=$rekod['name'];
				}
				
			}//end record found
			$sah='';
			$title=$_GET['title'];
			$loc=$_GET['loc'];
			$date=$_GET['date'];
			
			$timeBefore=$_GET['hour'].":".$_GET['min']." ".$_GET['AMPM'];
			
			$timeAfter=$_GET['hour2'].":".$_GET['min2']." ".$_GET['AMPM2'];
			$detail_activity=$_GET['detail_activity'];

			$sql="insert into r_system
			(name,no_id,title, location, date, timeBefore, timeAfter, detail_activity, sah)
			values 
			('$name','$no_id','$title','$loc','$date','$timeBefore','$timeAfter','$detail_activity', '$sah')";
			$rs=mysqli_query($db, $sql);
			if($rs==true){//berjaya simpan dalam table
				$posted=true;
				//echo "Cadangan aktiviti telah dihantar. ";
				echo "<a href='status_activity.php'> <b><u>Lihat senarai</u></b></a>";
			}else{//tak berjaya masukkan rekod
				//echo mysqli_error($db);
			}
		}
		else{
			echo "<br>";
		}
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['title']) ) {
				echo "<script type='text/javascript'>alert('Cadangan aktiviti telah dihantar!!')</script>";
			}
			else
				echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
			}
			
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
