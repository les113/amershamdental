
	<meta name="author" content="Lamtha2 Web Design, Aylesbury">
	<meta name="msapplication-TileColor" content="#A30046"/><!-- this works -->
	<meta name="msapplication-TileImage" content="images/metro-tile.png"/><!-- this doesnt! -->
	<meta name="format-detection" content="telephone=no"><!-- remove default styling of telno links applied by iphone!!! -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- jquery -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		
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

	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:500' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<link href="css/base.css" rel="stylesheet" >
	
	<!-- CSS resp layout -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<link href="css/grids.css" rel="stylesheet" >
	<link href="css/style-resp.css" rel="stylesheet" > 

	<link href="includes/easyValidate/styles/easyValidate.default.css" rel="stylesheet">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">

</head>