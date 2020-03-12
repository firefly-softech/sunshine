




<?php
include("connection.php");
include("header.php");
	 $firstname=$_GET['form_first_name'];
	 $lastname=$_GET['form_last_name'];
	 $email=$_GET['form_email'];
	 $mob=$_GET['form_mobile_no'];
	 $course=$_GET['form_course'];
	 $education=$_GET['form_education'];
	 $message=$_GET['form_message'];
	
	$query= "insert into registration_details (s_firstname,s_lastname,s_email,s_mob,s_course,s_education,s_message) 
	values('$firstname','$lastname','$email','$mob','$course','$education','$message')";
	if(mysqli_query($conn,$query))
	{
		echo '<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-6" >
					<div style="border: 1px brown solid;"class="irs-account-col">
							<h3 style="color:#b51b10;"> congrulation!</h3>
							<p> Your Registration completed successfullly.</p>
						
						</div>
						</div>
					</div>
			</div>	';
		
		
		
		
		//echo "record inserted succesfully";
		
	}
	else
	{
		echo "error";
	}
	
	
	
	include("footer.php");
?>