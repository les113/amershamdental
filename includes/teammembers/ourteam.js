/* script for our team page */
	$(document).ready(function(){	
		/* disables function in safari (but not chrome) because of safari float problem */
		if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) 
		{
		   return false;         
		}
		// on page load hide bios
		$('.teamMemberBio').hide();	
		// open first bio
		$('.teamMemberBio').first().addClass('bioactive').slideToggle(1000);
		// reveal bio when image clicked
		$('.teamMemberName, .teamMemberPhoto img, .teamMemberPhotoWide img').click(function(e){
			e.preventDefault(); /* prevent default action of jumping to top of page on click event*/
			$('.bioactive').hide(1000);
			$(this).parent().next('.teamMemberBio').addClass('bioactive').slideToggle(1000);
		});
	});
	

