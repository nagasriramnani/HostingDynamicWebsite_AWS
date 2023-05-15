
<?php include('uheader.php'); ?>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.html">Home</a><span>«</span></li>
									<li>course<span></span></li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					
					  <h2 class="w3_inner_tittle">Courses Offered</h2>

									<div class="agile-grids">	
				<!-- validation -->
				<div class="inner_content_w3_agile_info two_in">
				<div class="container">
  
				<table class="table">
					<thead>
						<tr>
						<th>S.No</th>
						<th>Course</th>
						<th>Specialization</th>
						<th>Category</th>
						<th>Course Duration</th>
						<th>Course Type</th>
						<th>Intake</th>
						</tr>
					</thead>
					  
<?PHP
include("database.php");
											 

	$sql_sel="SELECT * FROM course";
	$res_sel=mysqli_query($con,$sql_sel);
	while($row_sel=mysqli_fetch_array($res_sel))
	{
	
	?>  
	
	
	
    <tbody>
           
     
      <tr class="info">
        <td><?PHP echo $row_sel['cid']; ?><br></td>
        <td><?PHP echo $row_sel['cname']; ?></td>
        <td><?PHP echo $row_sel['Specialization']; ?></td>
		<td><?PHP echo $row_sel['Category']; ?><br></td>
        <td><?PHP echo $row_sel['duration']; ?></td>
        <td><?PHP echo $row_sel['typ']; ?></td>
		<td><?PHP echo $row_sel['Intake']; ?></td>
      </tr>
      <?PHP } ?>
      
    </tbody>
  </table>
</div>
	
							
				    </div>
													
				
					
					
					
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>