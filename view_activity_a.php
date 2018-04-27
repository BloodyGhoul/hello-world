<?php 
include ("inc/check-session.php");
//include the database connectivity setting
include ("inc/dbconn.php");
//include the navigation bar
include ("inc/header-navbar_a.php");?>

<head>

<style>

	body {
		background-color: silver;
	}
	.col-md-9{
		color: black;
	}
	.timeline-heading{
		color: black;
	}
	.timeline-body{
		color: black;
	}
	.text-muted{
		color: grey;
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
		 <h5>Aktiviti</h5>
		 <hr>
		 
				<?php
				$id=$_GET['id'];	//capture name value pair
				
				$sql="select * 
				from r_system
				where date='$id'";
				
				$qr=mysqli_query($db,$sql);
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
				$id=$rekod['no_id'];
				$url="viewstaff.php?id=".$id;
			
			echo "
			<div class='panel panel-default'>
				<ul class='timeline'>
					
						<div class='timeline-badge'></div>
                            <div class='timeline-panel'>
                                <div class='timeline-heading'>
                                    <h4 class='timeline-title'>";
									echo "<td>".$rekod['title']."</h4>
                                        <p><small class='text-muted'>
										Bertempat di ";
										echo "<td>".$rekod['location']."</td>
										pada ";
										echo "<td>".$rekod['date']."</td>
										 (Jam ";
										echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']." ".$rekod['timeAMPM'].")</td></small>
                                        </p>
                                </div>
                                    <div class='timeline-body'>
                                        <p>";
										echo "<td>".$rekod['detail_activity']."</td></p>
                                    </div>
									<div class='timeline-badge'>
									<p><small class='text-muted'>
									Oleh ";
									echo "<td>".$rekod['name']."</td>
									</small></p>
                            </div>
					</div>
                    
				</ul>";
			
				
			echo "</div>";
		}
		}//end record found
	?>
		 
		 <!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		include ("inc/sidebar-menu_a.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>