<?php include('uheader.php'); ?>
<head>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.html">Home</a><span>«</span></li>
									<li>Students Admitted<span></span></li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Students Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Students Details</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>S.No</th>
												<th>Hall Ticket No.</th>
												<th>Student Name</th>
												<th>Course</th>
												<th>Specialization</th>
												<th>Year of Admission</th>
												
												
											  </tr>
											</thead>
											
	<?PHP
include("database.php");
											 
	$Course=$_POST['course'];
	$yoa=$_POST['yoa'];
	
	$Specialization=$_POST['Specialization'];

	

	$sql_sel="SELECT * FROM students where Course='$Course'  and yoa='$yoa' and Specialization='$Specialization'";
	$res_sel=mysqli_query($con,$sql_sel);
	while($row_sel=mysqli_fetch_array($res_sel))
	{
	
	?> 
											<tbody>
											  <tr>
												<td><?PHP echo $row_sel['sno']; ?><br></td>
												<td><?PHP echo $row_sel['hno']; ?><br></td>
												
												<td><?PHP echo $row_sel['suname']; ?></td>
												<td><?PHP echo $row_sel['Course']; ?></td>
												<td><?PHP echo $row_sel['Specialization']; ?></td>
												<td><?PHP echo $row_sel['yoa']; ?></td>
												
											  </tr>
											  <?PHP } ?>
											</tbody>
										  </table>
									
									 
								</div>
							
									  
                              </div>
							  <div class="clearfix"></div>
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
									
				<br><br><br><br><br><br>
<?php include('footer.php'); ?>