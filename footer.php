<div class="rowspace"></div>
	
<footer>
	<div class="row">
		<div class="grid_12" style="padding-top:20px;">
			<div class="row contactTxt">
				<div class="grid_4" >
					<h4>Opening Hours</h4>
					<p>Monday: 8.00am - 6.00pm<br/>
					Tuesday: 8.15am - 4.30pm<br/>
					Wednesday: 8.00am - 5.00pm<br/>
					Thursday: 8.00am - 4.00pm<br/>
					Friday: 8.00am - 2.00pm<br/>
					Sat, Sun & Bank Holidays: closed</p>
				</div>
				<div class="grid_4" >
					<h4>Address</h4>
					<p>Amersham Hill Dental Clinic<br/>
					13 Amersham Hill<br/>
					High Wycombe<br/>
					Bucks<br/>
					HP13 6NR</p>
					<p><span onclick="openBrWindow('https://goo.gl/maps/SBbyu?q=Amersham Hill Dentist Center','terms','width=600,height=600,scrollbars=yes')" ><a href="#">Map</a></span></p>
			
				</div>
				<div class="grid_4">
					<h4>Contact</h4>
					<p><strong>Tel: </strong><?php include('includes/telno.php') ?><br/>
					   <strong>Email: </strong><?php include('includes/email.php') ?></p>

					<!--
					<div class="socialiconsfirst"><a href="#" target="_blank"><span class="facebook"></span></a></div>
					<div class="socialicons"><a href="#" target="_blank"><span class="googleplus"></span></a></div>
					<div class="socialicons"><a href="#" target="_blank"><span class="twitter"></span></a></div>
					<div class="socialicons"><a href="#" target="_blank"><span class="linkedin"></span></a></div>
					-->
					
					<h4>Policies</h4>
					<p><a href="docs/privacy-policy.pdf" target="_blank">Privacy Policy</a><br/>
					<a href="docs/complaints-policy.pdf" target="_blank">Complaints Policy</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="grid_12" >
		<hr/>
		</div>
	</div>		
	<div class="row copyrightTxt">
		<div class="grid_10" style="height:40px;">
			<p>Copyright <?php echo date("Y"); ?> Amersham Hill Dental Clinic</p>
		</div>
		<div class="grid_2" >
			<div><a href="http://www.lamtha2.co.uk" target="_blank"><span class="designedBy"></span></a></div>
		</div>
	</div>
</footer>

<!-- jquery -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>	
		
<!-- To Top scripts -->
<script src="includes/smoothscroll.js" type="text/javascript" ></script>
<script src="includes/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="includes/jquery.ui.totop.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>

<!-- enquiry form validate -->	
<script type="text/javascript" src="includes/easyValidate/js/jquery.easyValidate.js"></script>
<script>
$(function(){
	// DOM READY...
	
	// INIT EASY VALIDATE PLUGIN
	$('#enquiry_form').easyValidate();	
});
</script>

<!-- mobile menu -->
<script  src="includes/mobilenav.js" type="text/javascript" ></script>	

<!-- other scripts -->
<script>
// go back a page	
 function goBack()
   {
   window.history.back()
   }

// popup window 
function openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}	
</script>

<!-- Mobile Specific -->
<script type="text/javascript">
	var browser			= navigator.userAgent;
	var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
	var isMobile		= false;
	if(browser.match(browserRegex)) {
		isMobile			= true;
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){
			window.scrollTo(0,1);
		}
	}
</script>
	
	
<script>
// test jquery
/*
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
*/
</script>

<!-- covid-19 -->
<script>
$(document).ready(function(){

	// setup on page load
	$('.openCovid19').show();
	$('.covid19Msg').hide();

	$('.openCovid19').click(function() {
		//alert( "Handler for .click() called." );
		
		// toggle message
		$('.covid19Msg').toggle(500);

		// change link text
		var text = $('.openCovid19').text();
		$('.openCovid19').text(text == "Read More" ? "Close" : "Read More");
	});
});
</script>

<!-- statcounter -->
<?php include('includes/statcounter.php') ?>