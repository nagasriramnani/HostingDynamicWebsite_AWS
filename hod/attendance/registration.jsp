<%@ include file="header.jsp"%>	
	<!-- //navigation -->
	<!-- banner -->

<style type="text/css">

form.demoForm {
    margin: 2em 0 3em;
}

form.demoForm select {
    vertical-align: top;
    margin-right: 1em;
}

select#choices {
    min-width: 140px;
}

</style>
<% if(request.getParameter("unm")!=null){
	  out.println("<script>alert('Duplicate Username or Email entery Occured')</script>");
}%>
		<div class="w3ls-banner-1"> 
		</div>	
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3l-heading">
					<h2 class="w3ls_head">Registration</h2>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-7 agileits_mail_grid_left">
						<form action="register1.jsp" method="post" id="demoForm" class="demoForm">
							<h4>Your Name*</h4>
							<input type="text" name="nm" placeholder="Name..." required="">
							<h4>User Name*</h4>
							<input type="text" name="unm" placeholder="User Name..." required="">
							<h4>Password*</h4>
							<input type="password" name="pwd" placeholder="Password..." required="">
							<h4>Gender</h4>
							<select  name="gen" required>
								<option value="Male">Male</option>
								<option value="FeMale">FeMale</option>
							</select>
							<h4>Your Email*</h4>
							<input type="email" name="eid" placeholder="Email..." required="">
							<h4>Your Phone Number*</h4>
							<input type="text" name="cno" pattern="[0-9]{10,10}" placeholder="Phone..." required="">
							<h4>Branch*</h4>
							<select  name="branch">
								<option value="Mumbai">Mumbai</option>
								<option value="Delhi">Delhi</option>
								<option value="Pune">Pune</option>
							</select>
							<h4>Department*</h4>
							<select name="category">
								<option value="Engineering">Engineering</option>
								<option value="Accounting">Accounting</option>
								<option value="Marketing">Marketing</option> 
							</select>
							<h4>SubDepartment*</h4>
								<select name="choices[]" id="choices"  >
   
								</select>
							<h4>Experience*</h4>
							<select name="exp">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
	 							<option value="9">9</option>
		 						<option value="10">10</option>
							</select>


							<input type="submit" value="Register">
						</form>
					</div>
					
				</div>
			</div>
		</div>
	<!-- //contact -->
	<!-- footer -->
	<script type="text/javascript">
/*
From JavaScript and Forms Tutorial at dyn-web.com
Find information and updates at http://www.dyn-web.com/tutorials/forms/
*/

// removes all option elements in select list 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['demoForm'].elements['category'].onchange = function(e) {
    // name of associated select list
    var relName = 'choices[]';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'choices[]': {
        
        // names match option values in controlling select list
       Engineering: {
            // optgroup labe
                text: ['Designing','Programming','Testing'],
                value: ['Designing','Programming','Testing']
            },
   
       Accounting: {
            // example without optgroups
            text: ['Payroll','Investment'],
            value: ['Payroll', 'Investment']
        },
			Marketing: {
            // example without optgroups
            text: ['Financial','H.R'],
            value: ['Financial','H.R']
        },
		
		
        mrktaaaaa: {
            'Download Demos': {
                // example without values
                text: ['Iframes', 'PHP to JS', 'Unobtrusive JS']
            },
            
            'No Download': {
                text: ['Object Literals', 'Initializing JS', 'JS Errors']
            }
        }
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['demoForm'];
    
    // reference to controlling select list
    var sel = form.elements['category'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'choices[]';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>

	<%@ include file="footer.jsp"%>