<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/device_specific.css">
	<link rel="stylesheet" href="css/common.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		CEDT 
	</title>
	<meta name="description" content="Official website of Center of Electronic Design and Technology">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Division 1-->
	<div class="container-fluid" style="background-color:#eceff1; margin-left: 0.5em;margin-right: 0.5em;" >
		<div class="row">
			<!-- Division 1.1 LOGO-->
			<div id="div1-1" class="col-xs-1" style="padding: 0px;margin-right: 1em;">
					<img class="img-responsive" src="img/logo.png" alt="logo" height=100 width=75 style="position: relative;left:7%;margin-top:1em;">
				<div id="div1-1_link" style="text-align: center;">
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/contribute-now/" target="_blank">Contact us</a></h5>
					</div>
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/" target="_blank">About Us</a></h5>
					</div>
				</div>
			</div>
			<!-- Division 1.2 HEADER-->
			<div id="div1-2" class="col-xs-9" style="text-align:center;">
				<h1 style="position: relative ;margin-top: 1%;font-weight: bold;">Center of Electronic Design and Technology</h1>
				<h2 style="position: relative ;margin-top: 1%;">Block 4, Netaji Subash Institute of Technology</h2>
				<h2 style="position: relative ;margin-top: 1%;margin-bottom: 0.5%;">Dwarka, New Delhi</h2>
			</div>
			<div id="div1-3" class="col-xs-1" >
				<br>
				<div><h4 class="centerify"><a class="nav-link" href="http://sevasetu.org/contribute-now/" target="_blank">Contact Us</a></h4></div>
				<div><h4 class="centerify"><a class="nav-link" href="http://sevasetu.org/" target="_blank">About Us</a></h4></div>
			</div>
		</div>
		<hr>
</div>
</body>
<script>

	$(document).ready(function(){
		var $window=$(window);		
		function checkWidth(){

			if ($window.width() <= 700) {
				$('#div1-3').removeClass('col-xs-1');
				$('#div1-3').remove();
	            $('#div1-1').removeClass('col-xs-1').addClass('col-xs-2');
	            $('#title').removeClass('decMargin');
	            $('#areaofwork').removeClass('decMargin');
	            $('#relatedlinks').removeClass('decMargin');
        	}
        	else{
        		$('#div1-1_link').remove();
        		$('#title').addClass('decMargin');
           		
            	//$('#mob-progress-bar').remove();
        	};
        	
		}
		checkWidth();
		$(window).resize(checkWidth);
	});

</script>
</html>
