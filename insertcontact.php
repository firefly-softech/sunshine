

<?php
include("connection.php");
include("header.php");




$name=$_GET['form_name'];
	  $mobile=$_GET['form_mobile'];
	 $email=$_GET['form_email'];

	 $message=$_GET['form_message'];
	$query1= "insert into contact_details (c_name,c_mobile,c_email,c_message) 
	values('$name','$email','$mobile','$message')";
	if(mysqli_query($conn,$query1))
	{
		echo '<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-6" >
					<div style="border: 1px brown solid; margin:70px;"class="irs-account-col">
							<h3 style="color:#b51b10;margin-left:50px;"> Thank You! For contacting Us.</h3>
							<p style="margin-left:50px;font-size:18px;"> Our representitive will contact you soon.</p><br>
							<i class="fa fa-home" style="margin-left:50px;font-size:20px;color:#b51b10;"></i><a href="index.php">Back to home</a></p>
						
						</div> 
						</div>
					</div>
			</div>	';
		
		
		
		
		//echo "contact data inserted succesfully";
		
	}
	else
	{
		echo "error";
	}
	include("footer.php");
?>