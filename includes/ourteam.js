/* script for our team page */
	$(document).ready(function(){	
		/* disables function in safari (but not chrome) because of safari float problem */
		if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) 
		{
		   return false;         
		}
		$('.teamMemberBio').hide();		
		$('.teamMemberName, .teamMemberPhoto img, .teamMemberPhotoWide img').click(function(e){
			e.preventDefault(); /* prevent default action of jumping to top of page on click event*/
			$('.bioactive').hide(750);
			$(this).parent().next('.teamMemberBio').addClass('bioactive').slideToggle(750);
		});
	});
	

