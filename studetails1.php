<?php include('uheader.php'); ?>	
	<!-- //navigation -->
	<!-- banner -->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array(7) 
 countryLists["course"] = ["select one"]; 
 countryLists["B.Tech"] = ["Computer Science & Engineering"]; 
 countryLists["IDDMP"] = ['IDDMP with B.Tech. CSE+M.Tech.&M.Sc. in Software Engineering + Full-Time','IDDMP with B.Tech. CSE+M.Tech.&M.Sc. in CSE + Full-Time']; 
 countryLists["IDP"] = ['B.Tech. Computer Science & Engineering + M.Tech. + Full-Time','B.Tech. Computer Science & Engineering + MBA + Full-Time']; 
 countryLists["IIDDMP"] = ['IIDDMP with B.Tech. CSE+M.Tech.&M.Sc.+ Full-Time']; 
 countryLists["MCA"]= ['Master of Computer Application + Full-Time'];
countryLists["M.Tech"]= ['Computer Science + Full-Time','Computer Science & information Engineering + Full-Time','Cyber forensic and information Security + Full-Time'];
countryLists["M.Tech(PTPG)"]= ['Computer Science + Part-Time']; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("country"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
</script>
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
										 
										 
										 
										 
										 
										 
										 
										 
		<div class="w3ls-banner-1"> 
		</div>	
	<!-- contact -->
		
						<form action="studetails.php" method="post" id="demoForm" class="demoForm">
						<div class="row">	
							<div class="col-md-2">
							<h4>Select course*</h4>
							<select id="continent" name="course" onchange="countryChange(this);">
								<option value='course'>Course</option>
								<option value='B.Tech'>B.Tech</option>
								<option value='IDDMP'>IDDMP</option>
								<option value='IDP'>IDP</option>
								<option value='IIDDMP'>IIDDMP</option>
								<option value='M.Tech'>M.Tech</option>
								<option value='M.Tech(PTPG)'>M.Tech(PTPG)</option>
								<option value='MCA'>MCA</option>
							</select>
							</div>
							<div class="col-md-6">
							<h4>Specialization*</h4>
								<select id="country" name="Specialization">
   
								</select>
							
							</div>
							<div class="col-md-2">
							<h4>Date*</h4>
							<select name="yoa">
								<option value="2018-19" 
		  selected = "selected" >2018-19 </option>
    <option value="2017-18" 
		   >2017-18 </option>
    <option value="2016-17" 
		   >2016-17 </option>
    <option value="2015-16" 
		   >2015-16 </option>
    <option value="2014-15" 
		   >2014-15 </option>
    <option value="2013-14" 
		   >2013-14 </option>
    <option value="2012-13" 
		   >2012-13 </option>
    <option value="2011-12" 
		   >2011-12 </option>
    <option value="2010-11" 
		   >2010-11 </option>
    <option value="2009-10" 
		   >2009-10 </option>
    <option value="2008-09" 
		   >2008-09 </option>
    <option value="2007-08" 
		   >2007-08 </option>
    <option value="2006-07" 
		   >2006-07 </option>
    <option value="2005-06" 
		   >2005-06 </option>
    <option value="2004-05" 
		   >2004-05 </option>
    <option value="2003-04" 
		   >2003-04 </option>
    <option value="2002-03" 
		   >2002-03 </option>
    <option value="2001-02" 
		   >2001-02 </option>
    <option value="2000-01" 
		   >2000-01 </option>
    <option value="1999-00" 
		   >1999-00 </option>
    <option value="1998-99" 
		   >1998-99 </option>
    <option value="1997-98" 
		   >1997-98 </option>
    <option value="1996-97" 
		   >1996-97 </option>
    <option value="1995-96" 
		   >1995-96 </option>
    <option value="1994-95" 
		   >1994-95 </option>
    <option value="1993-94" 
		   >1993-94 </option>
    <option value="1992-93" 
		   >1992-93 </option>
    <option value="1991-92" 
		   >1991-92 </option>
    <option value="1990-91" 
		   >1990-91 </option>
    <option value="1989-90" 
		   >1989-90 </option>
    <option value="1988-89" 
		   >1988-89 </option>
    <option value="1987-88" 
		   >1987-88 </option>
    <option value="1986-87" 
		   >1986-87 </option>
    <option value="1985-86" 
		   >1985-86 </option>
    <option value="1984-85" 
		   >1984-85 </option>
    <option value="1983-84" 
		   >1983-84 </option>
    <option value="1982-83" 
		   >1982-83 </option>
    <option value="1981-82" 
		   >1981-82 </option>
    <option value="1980-81" 
		   >1980-81 </option>
    <option value="1979-80" 
		   >1979-80 </option>
    <option value="1978-79" 
		   >1978-79 </option>
    <option value="1977-78" 
		   >1977-78 </option>
    <option value="1976-77" 
		   >1976-77 </option>
    <option value="1975-76" 
		   >1975-76 </option>
    <option value="1974-75" 
		   >1974-75 </option>
    <option value="1973-74" 
		   >1973-74 </option>
    <option value="1972-73" 
		   >1972-73 </option>
    <option value="1971-72" 
		   >1971-72 </option>
    <option value="1970-71" 
		   >1970-71 </option>
    <option value="1969-70" 
		   >1969-70 </option>
    <option value="1968-69" 
		   >1968-69 </option>
    <option value="1967-68" 
		   >1967-68 </option>
    <option value="1966-67" 
		   >1966-67 </option>
    <option value="1965-66" 
		   >1965-66 </option>
    <option value="1964-65" 
		   >1964-65 </option>
    <option value="1963-64" 
		   >1963-64 </option>
    <option value="1962-63" 
		   >1962-63 </option>
    <option value="1961-62" 
		   >1961-62 </option>
    <option value="1960-61" 
		   >1960-61 </option>
    <option value="1959-60" 
		   >1959-60 </option>
							</select>
							</div>
							<div class="col-md-2">
							<div class="container">
  
 
  
							<input type="submit" class="btn btn-info" value="Get">
							</div>
							</div>
							</div>
						</form>
				
	<!-- //contact -->
	</div>
							
									  
                              </div>
							  <div class="clearfix"></div>
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
									
				<br><br><br><br><br><br>
	<!-- footer -->
	

<?php include('footer.php'); ?>