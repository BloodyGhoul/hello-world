<?php 
include ("inc/check-session_a.php");
//include the database connectivity setting
include ("inc/dbconn.php");
//include the navigation bar
include ("inc/header-navbar_a.php");
?>

<head>

<style>

	body {
		background-color: silver;
	}
	.col-md-9{
		color: black;
	}
	.panel-default{
		color: black;
	}
  </style>


</head>

<body>

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
		 <!--<img src="img/banner2.png" width="850" height="250"/> nnti msukkn banner -->
		 <h5>Program</h5>
		 <hr>
		 <br>
		 
		 
		 <h5>2012</h5>
		 
		 <hr>
		 
		 <h5>2011</h5>
		 
		 <br>
		 <h4>Hari Berbuka Puasa dan Bubur Lambuk</h4>
		 
		 <table border="0">
			<tr align="center">
				<td><a href="#"><img src="img/2011/bukaNbubur-7ogos2011/1.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/bukaNbubur-7ogos2011/2.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/bukaNbubur-7ogos2011/3.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/bukaNbubur-7ogos2011/4.jpg" width="200" height="100"/></a></td>
			</tr>
			<tr align="center">
				<td><a href="#"><img src="img/2011/bukaNbubur-7ogos2011/5.jpg" width="200" height="100"/></a></td>
			</tr>
		 </table>
		 <br>
		 <p>
		 Program : Hari berbuka puasa dan bubur lambuk telah diadakan pada
		 7 Ogos 2011 bertempat di bawah Blok Cempaka. 
		 </p>
		 <br>
		 
		 <h4>Hari Sukaneka</h4>
		 
		 <table border="0">
			<tr align="center">
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/1.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/2.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/3.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/4.jpg" width="200" height="100"/></a></td>
			</tr>
			<tr align="center">
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/5.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/6.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/7.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/8.jpg" width="200" height="100"/></a></td>
			</tr>
			<tr align="center">
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/9.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/10.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/11.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/12.jpg" width="200" height="100"/></a></td>
			</tr>
			<tr align="center">
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/13.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/14.jpg" width="200" height="100"/></a></td>
				<td><a href="#"><img src="img/2011/sukaneka-26jun2011/15.jpg" width="200" height="100"/></a></td>
			</tr>
		 </table>
		 <br>
		 <p>
		 Program : Hari Sukaneka Persatuan Penduduk Blok Dahlia dan Cempaka telah diadakan pada
		 26 Jun 2011 bertempat di padang bersebelahan Blok Cempaka. Terdapat 16 acara yang telah
		 dipertandingkan. Cabutan bertuah mengikut no. rumah juga turut diadakan.
		 Yang paling menarik perhatian adalah hadiah bagi peraduan Teka Biji Labu iaitu sebuah 
		 BASIKAL FIXIE. Turut dirasmikan oleh Tuan Md. Sabri bin Md. Taib (Ahli Majlis Zon 19).
		 </p>
		 
		 
		 <hr>
		 
		 
		 <?php
				
				$query="select date,title,location,name 
				from r_system
				where complaint=''";
				
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
				
				$id=$rekod['date'];
				$url="view_activity.php?id=".$id;
				
				echo "<tr>";
				echo "<td> $id </td>";	
				echo "<td>".$rekod['title'];
				echo "&emsp;"."
				<a href='$url' class='fui-window' 
				title='Untuk maklumat lanjut berkaitan ".$rekod['title']."' 
				data-toggle='tooltip'></a>
				</td>";
				echo "<td>".$rekod['location']."</td>";
				echo "<td>".$rekod['name']."</td>";
				echo "</tr>";
				
				echo "<hr>";
			}//end display records
			
		}//end record found
				?>
		 
		 <!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		include ("inc/sidebar-menu.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->

</body>
<?php 
//include the footer
include ("inc/footer.php");?>