<?php



require "defaultincludes.inc";
require_once "mrbs_sql.inc";
checkAuthorised();

// print the page header
print_header($day, $month, $year, $area, isset($room) ? $room : "");

echo "   
	   <div class=\"column_right_grid\">
					<div class=\"newsletter\">
						   <h3>Select a Location</h3>
								<form>
									<span>
									 <i><img src=\"images/events.png\" alt=\"\" /></i>
									 <input type=\"text\" value=\"Location\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Begin Typing...';}\">
									</span>			 	    
									<input type=\"submit\" class=\"my_button\" value=\"Select\">
								</form>
						   </div>
					 </div>
	   
	   
	   
			    <div class=\"column_right_grid calender\">
                      <div class=\"cal1\"> </div>
				   </div>
			
            <!-- close calendar -->
			
			
	<div class=\"column_right_grid sign-in\">
		<div class=\"sign_in\">	
			<h3>Enter Payment Information</h3>
		
			<form id=\"checkout\" method=\"post\" action=\"../Braintree/quickstart.php\">
			
		<div  id=\"payment-form\"></div>
		
		<input type=\"submit\" class=\"my-button\" value=\"Submit Payment\">
		
	</form>
		</div>

		<script src=\"https://js.braintreegateway.com/js/braintree-2.21.0.min.js\"></script>
		<script type=\"text/javascript\">

					var request;
					var response;
						window.onload = function(){
					if(window.XMLHttpRequest) {request = new XMLHttpRequest();}
					else {request = new ActiveXObject(\"Microsoft.XMLHTTP\");}
					request.open(\"GET\", \"../Braintree/quickstart.php?action=tokenRequest\", true);
					request.onreadystatechange=function(){ 
						if (request.readyState===4 && request.status===200)
							{ 
							response = String(request.responseText);
							}
						

					braintree.setup(response, \"dropin\", {
					  container: \"payment-form\", paypal: {
						singleUse: true,
						amount: 10.00,
						currency: 'USD'
					  }
					})
					}
					request.send();
					};

					</script>
	</div>
			
</div> <!-- close wrap -->";
output_trailer();

