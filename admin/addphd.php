<?php include('header.php'); ?>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="adminhome.php">Home</a><span>«</span></li>
									<li>Ph.D Scholars<span></span></li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Ph.D Scholars Information</h2>

									<div class="agile-grids">	
				<!-- validation -->
				<div class="inner_content_w3_agile_info two_in">
					  

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															<?php 
																error_reporting(0);
																$msg1=$_GET['msg1'];
																if($msg1=='success')
																echo "<script type='text/javascript'>alert('Recorded.....!');</script>";
															?>
															 <h3 class="w3_inner_tittle two">Form </h3>
																	<div class="form-body">
																		<form action="phdinsert.php" method="post" enctype="multipart/form-data" > <div class="form-group"> 
																		<label for="exampleInputEmail1">Scholars Name</label> 
																		<input type="text" class="form-control" required id="exampleInputEmail1" name="sname" placeholder="Scholars Name"> </div>
																		<div class="form-group"> 
																		<label for="exampleInputEmail1">Admission No</label> 
																		<input type="text" class="form-control" id="exampleInputEmail1" required name="AdmissionNo" placeholder="Admission No"> </div> 																		
																		<div class="form-group"> <label for="exampleInputPassword1">Supervisor Name</label> 
																		<input type="text" class="form-control" id="exampleInputPassword1" required name="suname" placeholder="Supervisor Name"> </div>
																		<div class="form-group"> <label for="exampleInputPassword1">Joining Date</label> 
																		<input type="date" class="form-control" id="exampleInputPassword1" required name="jdate" placeholder="Course Duration"> </div>																		
																		<div class="form-group"> <label for="exampleInputPassword1">Part-time/Regular</label> 
																		<input type="text" class="form-control" id="exampleInputPassword1" required name="typ" placeholder="Part-time/Regular"> </div>
																		<div class="form-group"> <label for="exampleInputPassword1">Fellowship</label> 
																		<input type="text" class="form-control" id="exampleInputPassword1" required name="Fellowship" placeholder="Fellowship"> </div>
																		<div class="form-group"> <label for="exampleInputPassword1">Status</label> 
																		<input type="text" class="form-control" id="exampleInputPassword1" required name="sts" placeholder="Status"> </div>
																		  </div>  
																		<button type="submit" class="btn btn-default">Submit</button> </form> 
																	</div>

															</div>
																
													</div> 
														<!--//forms-->											   
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
				
<div class="copyrights">
<p>Copy Right © 2021 Gayatri Vidya Parishad College of Engineering (Autonomous). All Rights Reserved.   </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	<!-- input-forms -->
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>