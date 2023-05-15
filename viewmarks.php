
<?php include('uheader.php'); ?>
		<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.html">Home</a><span>«</span></li>
									<li>Marks<span></span></li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					
					  <h2 class="w3_inner_tittle">Marks Details</h2>

									<div class="agile-grids">	
				<!-- validation -->
				<div class="inner_content_w3_agile_info two_in">
					<?PHP
include("database.php");
											 
	
	

	$sql_sel="SELECT * FROM marks ";
	$res_sel=mysqli_query($con,$sql_sel);
	while($row_sel=mysqli_fetch_array($res_sel))
	{
	
	?> 
					<ul><li><a href="hod/marks/<?PHP echo $row_sel['marks']; ?>" target="_blank">
						<span class="glyphicon glyphicon-play"></span><?PHP echo $row_sel['des']; ?></a></li><br>
					</ul>  
							<?PHP } ?>
				    </div>
													
				
					
					
					
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>