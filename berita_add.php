<?php 
include ("inc_a.php");
?>

<!-- ***********Edit your content STARTS from here******** -->
<h5>Tambah Program Masjid</h5>
<hr>
<form class="form" role="form" name="" action="" method="GET"><br>

Tarikh :
<input class="form-control" name="tarikh" 
  type="date" 
  placeholder=""><br>

Tajuk Program (HURUF BESAR) :
<input class="form-control" name="tajuk" type="text" 
  placeholder=""><br>

Nama Penceramah (HURUF BESAR) :
<input class="form-control" name="penceramah" type="text" 
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

<hr>

<input class="btn btn-embosed btn-primary" type="submit" 
  value="SIMPAN">
  <a href="berita_a.php" 
  class="btn btn-embosed btn-primary">KEMBALI</a>

<br>

</form>
		 
<?php
	
	$posted=false;

	if(isset($_GET['tajuk'])){	

		$tarikh=$_GET['tarikh'];
		$tajuk=$_GET['tajuk'];
		$penceramah=$_GET['penceramah'];
		$timeBefore=$_GET['hour'].":".$_GET['min']." ".$_GET['AMPM'];
		$timeAfter=$_GET['hour2'].":".$_GET['min2']." ".$_GET['AMPM2'];
								
		$sql="insert into penceramah
		(TARIKH,TAJUK, PENCERAMAH, TIMEBEFORE, TIMEAFTER)
		values 
		('$tarikh','$tajuk','$penceramah','$timeBefore','$timeAfter')";
		$rs=mysqli_query($db, $sql);
		if($rs==true){//berjaya simpan dalam table
			
			$posted=true;
			echo "<br>";
				
		}
		
		else{//tak berjaya masukkan rekod
			 mysqli_error($db);
			 echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
			 echo "<br><p>Sila pastikan tarikh diisi.</p>";
		}
	}
	else{
		//echo "Sila isi semua maklumat di atas<br>";
	}
?>

<?php
	if( $posted ) {
		if( $result=isset($_GET['tajuk']) ) 
			echo "<script type='text/javascript'>alert('Program $tajuk berjaya DITAMBAH!!')</script>";
		else
			echo "<script type='text/javascript'>alert('Tidak berjaya!')</script>";
		}
?>
		 
<!-- ***********Edit your content ENDS here******** -->
		
</div><!-- end main content -->	

<?php
	//include the sidebar menu
?>

</div><!-- end row -->

</div><!-- end container -->

</body>
<?php 
//include the footer
include ("inc/footer.php");?>