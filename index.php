<?php 
include ("inc1.php");
?>

<!-- ***********Edit your content STARTS from here******** -->
<h5>Utama</h5>
<hr>
		 
<?php
$query="select tarikh,tajuk,penceramah,timeBefore,timeAfter
from penceramah";
				
$qr=mysqli_query($db,$query);
if($qr==false){//sql error
	echo ("Query cannot be executed!<br>");
	echo ("SQL Error : ".mysqli_error($db));
}
else{//sql successful
}
		
if(mysqli_num_rows($qr)==0){//no record found
	echo ("No record <br>");
}//end no record
else{//there is/are record(s)
echo "
	<h6><b><a>Senarai Program Masjid</a></b></h6>
	<div class='panel panel-default'>
		<table width='100%' class='table table-hover table-bordered'>
			<thead>
				<th width='15%'>Tarikh</th>
				<th>Tajuk</th>
				<th width='26%'>Penceramah</th>
				<th width='22%'>Masa</th>
			</thead>";
				
	function convertDate($date) {
		$date = preg_replace('/\D/','/',$date);
		return date('d-m-Y',strtotime($date));
	}
	date_default_timezone_set("Singapore");
						
	while ($rekod=mysqli_fetch_array($qr)){
		if ($rekod['tarikh']>=date('Y-m-d')){
		$id=$rekod['tarikh'];
					
		echo "<tr>";
			echo "<td> "; echo convertDate($id);" </td>";
			echo "<td>".$rekod['tajuk']."</td>";
			echo "<td>".$rekod['penceramah']."</td>";
			echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']."</td>";
		echo "</tr>";
		}
	}//end display records
echo "</table> </div>";			
}//end record found
$query="select date,title,location,timeBefore,timeAfter,detail_activity
from r_system where sah='sah'
group by date asc";
			
$qr=mysqli_query($db,$query);
if($qr==false){//sql error
	echo ("Query cannot be executed!<br>");
	echo ("SQL Error : ".mysqli_error($db));
}
else{//sql successful
}
		
if(mysqli_num_rows($qr)==0){//no record found
	echo ("No record <br>");
}//end no record
else{//there is/are record(s)		
	echo "
	<h6><b><a>Senarai Aktiviti</a></b></h6>
	<div class='panel panel-default'>
		<table width='100%' class='table table-hover table-bordered'>
			<thead>
				<th width='15%'>Tarikh</th>
				<th>Aktiviti</th>
				<th width='16%'>Tempat</th>
				<th width='22%'>Masa</th>
			</thead>";
									
	while ($rekod=mysqli_fetch_array($qr)){
		if ($rekod['date']>=date('Y-m-d')){
			$id=$rekod['date'];
			$url="view_activity.php?id=".$id;
					
			echo "<tr>";
				echo "<td> "; echo convertDate($id);" </td>";	
				echo "<td><b>".$rekod['title']."</b>";
				echo "<br>".$rekod['detail_activity'];
				echo "</td>";
				echo "<td>".$rekod['location']."</td>";
				echo "<td>".$rekod['timeBefore']." - ".$rekod['timeAfter']."</td>";
			echo "</tr>";
		}				
	}//end display records
echo "</table> </div>";	
}//end record found
?>
 <!-- ***********Edit your content ENDS here******** -->
			</div><!-- end main content -->	
		</div><!-- end row -->
	</div><!-- end container -->
</body>
<?php //include the footer
include ("inc/footer.php");?>