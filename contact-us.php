<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Contact Amersham Hill Dental Clinic</title>
	<meta name="description" content="">
	<?php include('header.php') ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>

<body id="contact">

<!-- internet explorer countdown -->
<!--[if lt IE 8]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie7countdown.com/ie-users-info"><img src="http://www.theie7countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->

<header>
	<?php include('includes/logo.php') ?>
	<?php include('includes/nav.php') ?>
</header>

<div class="rowspace"></div>

<section class="row" style="min-height:460px;" >
	<div class="grid_6" >
		
		<h1><u>Contact us</u></h1>
		<p>If you would like to make an appointment or discuss a course of treatment please contact us via the following form or telephone us on <?php include('includes/telno.php') ?>.</p>	
		
		<div id="enquiry_form">
	   
			<form action="includes/YouGotEmail.php" method="post" enctype="multipart/form-data" name="enquiry_form" >   
		
			 <label>Name: *</label>
				<input type="text" name="name" maxlength="25" class="required"/><br/>
			  
			 <label>Telephone: *</label>
				<input type="text" name="tel" maxlength="16" class="required" /><br/>
			  
			 <label>Email: *</label> 
				<input type="text" name="email" class="required email" /><br/>
			
			<label>Message: *</label> 
				<textarea name="message" id="message" cols="30" rows="5" class="required" ></textarea><br/> 

			<div class="g-recaptcha" data-sitekey="6LcWzlIUAAAAAEBI2du443l9I8sZrTyi1EGb0iC1"></div>
			
			<div class="submitbutton">
				<input name="btnSubmit" type="submit" value = "Submit" />
			</div>
			
			</form>
			
		</div><!-- end form -->
		
	</div>
	
	<div class="grid_6">
		<img src="images/premises.jpg" alt="practice external view" style="width:100%; max-width:460px; margin-top:80px;"/>
	</div>
</section>
	
<?php include('footer.php') ?>

</body>
</html>