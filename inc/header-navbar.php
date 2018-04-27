<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Community Tun Teja Rawang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Loading Flat UI Pro -->
  <link href="css/flat-ui-pro-test.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png">
  
  <style>

	.navbar-inverse {
		background-color: purple;
	}
	
  </style>

</head>

<body>

<!-- Static navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	  <div class="navbar-collapse collapse">

       <ul class="nav navbar-nav">
        
        <?php

        if(isset($_SESSION['id_no'])){

          $ajk="ajk_a.php";
						$program="program_a.php";
						$berita="berita_a.php";
						$contact="contact_a.php";
						$aktiviti="insert_aktiviti_a.php";
						$aduan="insert_complaint_a.php";
						$profil="profil_a.php";
						
						echo "
							<li><a href='$profil' target='_parent'>Senarai Penghuni</a></li>
							<li><a href='$aduan' target='_parent'>Senarai Aduan</a></li>
							<li><a href='$aktiviti' target='_parent'>Senarai Cadangan</a></li>
							<li><a href='$ajk' target='_parent'>Senarai Jawatankuasa</a></li>
							<li><a href='$berita' target='_parent'>Kemaskini Program Masjid</a></li>
							<li><a href='$contact' target='_parent'>Mesej</a></li>
							<li><a href='logout.php' target='_parent'>Keluar <span class='fui-export'></span></a></li>
							";
        }

        else if(isset($_SESSION['no_id'])){

          $main="main_r.php";
						$ajk="ajk_r.php";
						$program="program_r.php";
						$berita="berita_r.php";
						$contact="contact_r.php";
						$aktiviti="status_activity.php";
						$aduan="view_complaint.php";
						$profil="profil.php";
						
						echo "
							<li><a href='$main' target='_parent'>Utama</a></li>
							<li><a href='$ajk' target='_parent'>Senarai Jawatankuasa</a></li>
							<li><a href='$program' target='_parent'>Program Lepas</a></li>
							<li><a href='$contact' target='_parent'>Hubungi Kami</a></li>
							<li><a href='$aktiviti' target='_parent'>Aktiviti</a></li>
							<li><a href='$aduan' target='_parent'>Aduan</a></li>
							<li><a href='$profil' target='_parent'>Profil 
							";
						echo $_SESSION['no_id'];
            echo "</a></li>";
        }

        else {

          echo "
            <li><a href='index.php'' target='_parent'>Utama</a></li>
            <li><a href='ajk.php' target='_parent'>Senarai AJK</a></li>
            <li><a href='program.php' target='_parent'>Program Lepas</a></li>
            <li><a href='contact.php' target='_parent'>Hubungi Kami</a></li>
            <li><a href='logOpt.php' target='_parent'>Log In</a></li>
            <li><a href='signup.php'' target='_parent'>Sign Up</a></li>
          ";
        }

        ?>

       </ul>
          
	  </div>
  </div>
</div><!-- end nav-bar-inverse -->