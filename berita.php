<?php 
//include the database connectivity setting
include ("inc/dbconn.php");
//include the navigation bar
include ("inc/header-navbar.php");
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
		 <h5>Berita/Info Terkini</h5>
		 <hr>
		 
				<?php
				
				$query="select date,title,location,timeBefore,timeAfter 
				from r_system
				group by date asc";
				
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
			
			echo "
			<div class='panel panel-default'>
			<table width='100%' class='table table-hover table-bordered'>
				<thead>
					<th>Tarikh</th>
					<th>Tajuk</th>
					<th>Tempat</th>
					<th>Masa</th>
				</thead>";
			
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
				echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']."</td>";
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
		include ("inc/sidebar-menu.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->

</body>
<?php 
//include the footer
include ("inc/footer.php");?>