<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Contact form submission failed</title>
	<meta name="description" content="">
	<meta name="robots" content="noindex"/>
	<?php include('header.php') ?>

<body id="contact">

<!-- internet explorer countdown -->
<!--[if lt IE 8]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie7countdown.com/ie-users-info"><img src="http://www.theie7countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->

<header>
<div class="row">
	<div class="grid_12" >
		<div id="logo" >
			<a href="http://www.wycombe-dentists.com"><img src="images/logo.png" alt="logo" /></a>
		</div>
	</div>
</div>

<?php include('includes/nav.php') ?>

</header>

<div class="rowspace"></div>

<section class="row" style="min-height:460px;" >
	<div class="grid_7" >		
		<h1><u>Send form error.</u></h1>
		<p>Sorry there has been a problem submitting the form.</p>
		<p>Please ensure you have ticked the "I'm not a robot" reCaptcha.</p>
		<p>Click <a href="#" onclick="history.go(-1);return false;">here</a> to try again.</p>
		<p>If the problem persists please telephone us on <?php include('includes/telno.php') ?>.</p>			
	</div>
	
	<div class="grid_5">
		<img src="images/theteam.jpg" alt="Our Staff" style="width:100%; margin-top:60px;"/>
	</div>
</section>
	
<?php include('footer.php') ?>

</body>
</html>