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
			echo"<h5>Kemaskini isi rumah ".$no_id."</h5>
			<hr>";
			
			$sql="SELECT * FROM bil_isi_rumah
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
			  value="<?php echo $rec['nama']; ?>"><br>
              Hubungan : 
			  <input class="form-control" name="hubungan" type="text" 
			  placeholder=""
			  value="<?php echo $rec['hubungan']; ?>"><br>
              Umur : 
              <input class="form-control" name="umur" type="text" 
			  placeholder=""
			  value="<?php echo $rec['umur']; ?>"><br>
              Pekerjaan/Sekolah/Institusi : 
              <input class="form-control" name="pekerjaan" type="text" 
			  placeholder=""
			  value="<?php echo $rec['pekerjaan']; ?>"><br>
			  
			  
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" 
			  name="btnupdate"
			  value="KEMASKINI">
			  
			  <a class="btn btn-embosed btn-primary"  href='profil.php'> KEMBALI</a><br>
		</form>
		
		<?php 
		
		$posted=false;
		//kalau dpt error
		//$btnupdate=$_GET['btnupdate'];
		if(($_GET['btnupdate'])=='KEMASKINI'){
		////onlywhen user click UPDATE button
        $no_id=$_GET['no_id'];
		$name=$_GET['name'];
		$hubungan=$_GET['hubungan'];
		$umur=$_GET['umur'];
		$pekerjaan=$_GET['pekerjaan'];
		$btnupdate=$_GET['btnupdate'];
		
		//the sql command for update
			$sql="UPDATE bil_isi_rumah SET
			no_id='$no_id', 
			nama='$name',
			hubungan='$hubungan',
			umur='$umur',
            pekerjaan='$pekerjaan'
			WHERE no_id='$no_id' ";
			$rs=mysqli_query($db, $sql);	//run sql
			//$rec=mysqli_fetch_array($rs);
			if($rs==true){//berjaya simpan dlm table
				$posted=true;
				//echo "<p>Rekod bagi isi rumah $no_id telah DIKEMASKINI! <a href='profil.php' target='_parent'>Kembali</a></p>";
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
				echo "<script type='text/javascript'>alert('Rekod bagi isi rumah $no_id telah DIKEMASKINI!!')</script>";
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
