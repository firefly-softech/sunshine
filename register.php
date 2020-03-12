




<?php include('header.php') ?>
<!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="irs-inner-heading">
                        <h2>Register</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index.php">HOME</a> > <a href="#">Register</a>
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
	<div class="row">
	   <div class="col-md-12 col-sm-6" >
			<div style="border: 1px brown solid; margin-top: 50px;"class="irs-account-col">
                  
				    <h3 style="color:#b51b10;font-weight: bold;">create a new account</h3>
                <form  id="contact_form_two" name="contact_form" action="insert.php" method="$_GET" >
				<div class="col-md-6 col-sm-6">
                    <input  id="form_first_name" name="form_first_name" class="form-control" placeholder="First Name*" required="required" data-error="First Name." type="text">
					<input id="form_email" name="form_email" class="form-control" placeholder="Email*" required="required" data-error="Email Name." type="text">
					  <select id="form_course" name="form_course" class="form-control" required="required" >
					  <option value="">Courses*</option>
          <option value="Dialysis Therapist">Dialysis Therapist</option>
          <option value="Biomedical Instrumentation">Biomedical Instrumentation</option>
        </select>
					
					<!--<input id="user_password2" name="user_password2" type="password" class="form-control" placeholder="Password*" required="required" data-error="User Name." value="">-->
				</div>
				<div class="col-md-6 col-sm-6">
                    <input id="form_last_name" name="form_last_name" class="form-control" placeholder="Last Name*" required="required" data-error="Last Name." type="text">		
					<input id="form_user_name2" name="form_mobile_no" class="form-control" placeholder="Mobile No*" required="required" data-error="User Name." type="text">
					<select id="form_education" name="form_education" class="form-control" required="required" >
					  <option value="">Education*</option>
						  <option value="XII pass">XII pass</option>
						  <option value="Diploma/Degree">Diploma/Degree</option>
						</select>
					<!--<input id="user_password_confirm" name="user_password_confirm" type="password" class="form-control" placeholder="Password Confirm*" required="required" data-error="Password Confirm." value="">	-->	              
                </div>
				<textarea name="form_message" class="form-control"  style= "margin:0px 15px; height:170px; "  placeholder="Message*" required="required" data-error="Message"></textarea>
				
                <button class="btn btn-default irs-big-btn"style=" border: 1px brown solid; margin-left:20px;background-color: #b51b10;" type="submit">register</button>
                </form><!--form close-->
            </div><!--irs-account-col-->
		</div><!--col-md-12-->
	</div><!--row-->
</div>	<!--container-->			
<?php include('footer.php') ?>
	