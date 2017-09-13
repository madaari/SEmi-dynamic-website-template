<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/device_specific.css">
	<link rel="stylesheet" href="css/common.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		CEDT 
	</title>
	<meta name="description" content="Official website of Center of Embedded Design and Technology">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">

		h4{
			font-size: 1.3em;
		}
		h5{
			font-size: 1.2em;
		}

		@media screen and (min-width:320px) and (max-width:700px) and (orientation:portrait) {
		
	  		body{font-size: 10px;}
	  		.border{
	  			border-right-width: 0px;
	  			border-bottom-style: dotted;
				border-block-end-width: 1px;
				margin-block-end: 1px;
	  		}
	  		.btn_no{
			margin-top:5% ;
			}	
			.centerify{
			text-align: center;
			}

			h1{
				font-size: 1.7em;
			}
			h2{
				font-size: 1.2em;
			}
                      .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              transition:left .4s;
          }
          .side-collapse-container.out{
              left:150px;
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:200px;
              position:fixed;
              overflow:hidden;
              transition:width .4s;
          }
          .side-collapse.in {
              width:0;
          }
		}

	@media screen and (min-width:320px) and (max-width:700px) and (orientation:landscape) {
		
	  		body{font-size: 12px;}
	  		.border{
	  			border-right-width: 0px;
	  			border-bottom-style: dotted;
				border-block-end-width: 1px;
				margin-block-end: 1px;
	  		}
	  		.btn_no{
			margin-top:5% ;
			}
			.centerify{
			text-align: center;
			}

			h1{
				font-size: 2em;
			}
			h2{
				font-size: 1.5em;
			}
            .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              transition:left .4s;
          }
          .side-collapse-container.out{
              left:150px;
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:200px;
              position:fixed;
              overflow:hidden;
              transition:width .4s;
          }
          .side-collapse.in {
              width:0;
          }

	}
	</style>
</head>
<body style="background-color: ghostwhite;">
    <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="navbar-inverse side-collapse in">
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#Wiki">Wiki</a></li>
              <li><a href="#Team">Team</a></li>
              <li><a href="#Projects">Projects</a></li>
              <li><a href="#Events">Events</a></li>
            </ul>
          </nav>
        </div>
      </div>
</header>
<hr>
<hr>
<!-- Division 1-->
	<div class="container-fluid" style="background-color:#eceff1; margin-left: 0.5em;margin-right: 0.5em;height:11em;" >
		<div class="row">
			<!-- Division 1.1 LOGO-->
			<div id="div1-1" class="col-xs-1" style="padding: 0px;margin-right: 1em;">
					<img class="img-responsive" src="img/logo.png" alt="logo" height=100 width=120 style="position: relative;left:7%;margin-top:1em;">
				<div id="div1-1_link" style="text-align: center;margin-top:2em;margin-left: 0.5em;">
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/contribute-now/" target="_blank">Contact us</a></h5>
					</div>
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/" target="_blank">About us</a></h5>
					</div>
				</div>
			</div>
			<!-- Division 1.2 HEADER-->
			<div id="div1-2" class="col-xs-9" style="text-align:center;">
				<h1 style="position: relative ;margin-top: 1%;font-weight: bold;">Center of Embedded Design and Technology</h1>
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
        <!-- Nav bar-->



   
</body>
<script>

	$(document).ready(function(){
		var $window=$(window);		
		function checkWidth(){

			if ($window.width() <= 700) {
				$('#div1-3').removeClass('col-xs-1').addClass('col-xs-0');
				$('#div1-3').remove();
				$('#div1-3').detach();
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
        var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
	});

</script>
</html>
