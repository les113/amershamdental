<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Our Team | Amersham Hill Dental Clinic</title>
	<meta name="description" content="">
	<?php include('header.php') ?>

<body id="team">

<!-- internet explorer countdown -->
<!--[if lt IE 8]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie7countdown.com/ie-users-info"><img src="http://www.theie7countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->

<header>
	<?php include('includes/logo.php') ?>
	<?php include('includes/nav.php') ?>
</header>

<div class="rowspace"></div>

<section class="row">
	<div class="grid_12" >
		<h1><u>Meet the team</u></h1>
		<p>We are very proud of our team at Amersham Hill Dental Clinic. The entire team is highly experienced and keeps up with the latest dental techniques and developments, to ensure the best quality care for our patients.</p>
	</div>	
</section>

<div class="row" >
	<div id="team-members" class="grid_12 teamMembers" >
			<!-- team data from ext json -->
	</div>	
</div>

<?php include('footer.php') ?>

<!--team json data-->
<script src="includes/teammembers/team-json-data.js"></script>
<script src="includes/teammembers/team-build-entries.js"></script>
	
<!-- hide team members bios -->
<script src="includes/teammembers/ourteam.js" type="text/javascript" ></script>
</body>
</html>