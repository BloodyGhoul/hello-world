<?php 
include ("inc/check-session.php");
//include the database connectivity setting
include ("inc/dbconn.php");
//include the navigation bar
include ("inc/header-navbar.php");?>

<head>

<style>

	body {
		background-color: silver;
	}
	table{
		color: black;
	}
	.panel-heading, h5,h6,p, form{
		color: black;
	}
  </style>


</head>

<div class="content">
<br><br>
<!--
<img src="img/banner2.png" width="" height="250"/> ICON
--><img src="img/logo.png" width="250" height="250"/>
<!--
<img src="img/banner2.png" width="850" height="250"/> BANNER
--><img src="img/banner3pics.png" width="972" height="250"/>

</div>

<div class="container">
	<br>
  <div class="row">
	  <div class="col-md-9" name="maincontent" id="maincontent">
		<!-- ***********Edit your content STARTS from here******** -->
		
		<?php 
		
			$no_id=$_SESSION['no_id'];	//capture name value pair
			echo"<h5>Kemaskini ".$no_id."</h5>
			<hr>";
			
			$sql="SELECT * FROM resident
				WHERE no_id='$no_id'";
			$rs=mysqli_query($db, $sql);	//run sql
			$rec=mysqli_fetch_array($rs);
			
		?>
		<form class="form" role="form" name="" action="" method="GET">

		<p>(Sila edit maklumat untuk disimpan)<br></p>

              NO ID : 
              <input class="form-control" name="no_id" type="text" readonly
			  value="<?php echo $rec['no_id']; ?>"><br>
              Nama : 
              <input class="form-control" name="name" type="text"
			  value="<?php echo $rec['name']; ?>"><br>
			  Umur : 
			  <input class="form-control" name="umur" type="text" 
			  placeholder=""
			  value="<?php echo $rec['umur']; ?>"><br>
              Alamat : 
			  <input class="form-control" name="address" type="text" 
			  placeholder=""
			  value="<?php echo $rec['address']; ?>"><br>
              No Telefon : 
              <input class="form-control" name="no_phone" type="text" 
			  placeholder=""
			  value="<?php echo $rec['no_phone']; ?>"><br>
              Status Penghuni : 
              <input class="form-control" name="status" type="text" 
			  placeholder=""
			  value="<?php echo $rec['status']; ?>"><br>
			
			<?php
			  if ($rec['status']=="Penyewa"){
				  echo "
				  Nama Tuan Rumah : 
					<input class='form-control' name='owner' type='text' 
					placeholder=''
					value=".$rec['owner']."><br>
				  ";
			  }
			  ?>
			  
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" 
			  name="btnupdate"
			  value="KEMASKINI">
			  
			  <a class="btn btn-embosed btn-primary"  href='profil.php'> KEMBALI</a><br>

<!-- Jenis Kenderaan : 
			  <select class="form-control" name="kenderaan">
				<option value='<?php //echo $rec['kenderaan']; ?>'> <?php //echo $rec['kenderaan']; ?></option>
				<option value='Motor'> Motor</option>
				<option value='Kereta'> Kereta</option>
				<option value='Lori'> Lori</option>
				<option value='Van'> Van</option>
			  </select><br>
			  No Daftar Kenderaan : 
              <input class="form-control" name="noDaftar" type="text" 
			  placeholder=""
			  value="<?php //echo $rec['noDaftar']; ?>"><br>
			  -->
		</form>
		
		<?php 

		$posted=false;
		
		//kalau dpt error
		//$btnupdate=$_GET['btnupdate'];
		if(($_GET['btnupdate'])=='KEMASKINI'){
		////onlywhen user click UPDATE button
        $no_id=$_GET['no_id'];
		$name=$_GET['name'];
		$umur=$_GET['umur'];
		$address=$_GET['address'];
		$no_phone=$_GET['no_phone'];
		$status=$_GET['status'];
		$owner=$_GET['owner'];
		$btnupdate=$_GET['btnupdate'];
		
		//the sql command for update
			$sql="UPDATE resident SET
			no_id='$no_id', 
			name='$name',
			umur='$umur',
			address='$address',
			no_phone='$no_phone',
            status='$status',
			owner='$owner'
			WHERE no_id='$no_id' ";
			$rs=mysqli_query($db, $sql);	//run sql
			//$rec=mysqli_fetch_array($rs);
			if($rs==true){//berjaya simpan dlm table
			$posted=true;
			echo "<br>";
				//echo "<p>Rekod bagi $no_id telah DIKEMASKINI!</p>";
				//echo "<a href='forminsert.php'>Insert another record.";
			}
		}
		else {
			echo "";
		}
			
		?>

		<?php
			if( $posted ) {
			if( $result=isset($_GET['btnupdate']) ) {
				echo "<script type='text/javascript'>alert('Rekod bagi $no_id berjaya DIKEMASKINI!!')</script>";
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
