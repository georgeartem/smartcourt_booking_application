<?php
// $Id$

require "defaultincludes.inc";
checkAuthorised();
print_header($day, $month, $year, $area, isset($room) ? $room : "");


		echo "	 <div class=\"chart\">
		               <h3>Court Utilization Stats</h3>
		                <div class=\"diagram\">
		                  <canvas id=\"canvas\" height=\"220\" width=\"220\"> </canvas>
		                  <h4><span>April</span><br />2016</h4>   
		                 </div>
		                     
		             				
						<div class=\"chart_list\">
			           	  <ul>
			           	  	<li><a href=\"#\" class=\"red\">Reserved<p class=\"percentage\">21<em>%</em></p></a></li>
			           	  	<li><a href=\"#\" class=\"purple\">Available<p class=\"percentage\">48<em>%</em></p></a></li>
			           	  	<li><a href=\"#\" class=\"yellow\">Occupied<p class=\"percentage\">9<em>%</em></p></a></li>
			           	  	<li><a href=\"#\" class=\"blue\">Non-Reservable<p class=\"percentage\">32<em>%</em></p></a></li>
			           	  	<div class=\"clear\"></div>	
			           	  </ul>
			           </div>
			           <script>
						var doughnutData = [
								{
									value: 21,
									color:\"#E64C65\"
								},
								{
									value : 48,
									color : \"#11A8AB\"
								},							
								{
									value : 32,
									color : \"#4FC4F6\"
								},	
								{
									value : 9,
									color : \"#FCB150\"
								},							
							
							];				
							var myDoughnut = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Doughnut(doughnutData);					
					</script>
		          </div>
		      </div>
			  </div>
			  <div class=\"clear\"></div>";
			  
			  

output_trailer();