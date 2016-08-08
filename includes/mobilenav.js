/* mobile nav menu */
	jQuery(document).ready(function($){
		checkwindowsize();  //calls window size check on page load to determine which nav menu to show		
		$(window).resize(function() { //calls window size check on page resize
			checkwindowsize();
		});	
		function checkwindowsize(){	// hides appropriate menu dep on initial window size
			if($(window).width()< 768){
			$('.mainmenu').hide();
			};
			if($(window).width()> 768){
			$('.mainmenu').show();
			};
		};			
		$('.mobmenubutton').click(function(){   //	toggles mob menu visibility when mobmenubutton clicked
			$('.mainmenu').slideToggle(function(){
				});
		});			
	});	