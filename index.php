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
				font-size: 1.6em;
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
				font-size: 1.8em;
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
    body { padding-top: 55px; }

#myCarousel .carousel-caption {
    left:0;
    right:0;
    bottom:0;
    text-align:left;
    padding:10px;
    background:rgba(0,0,0,0.6);
    text-shadow:none;
}

#myCarousel .list-group {
    position:absolute;
    top:0;
    right:0;
}
#myCarousel .list-group-item {
    border-radius:0px;
    cursor:pointer;
}
#myCarousel .list-group .active {
    background-color:#eee;  
}

@media (min-width: 992px) { 
    #myCarousel {padding-right:33.3333%;}
    #myCarousel .carousel-controls {display:none;}  
}
@media (max-width: 991px) { 
    h1{
        font-size: 1.55em;
      }
    .carousel-caption p,
    #myCarousel .list-group {display:none;} 
}
.hidden {
  display: none;
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

<!-- Division 1-->
<div style="background-image: url('img/stars.jpg');">
	<div class="container-fluid" style="background-color:#eceff1; margin-left: 0.5em;margin-right: 0.5em;height:11em;opacity:0.9;" >
		<div class="row">
			<!-- Division 1.1 LOGO-->
			<div id="div1-1" class="col-xs-1" style="padding: 0px;margin-right: 1em;">
					<img class="img-responsive" src="img/logo.png" alt="logo" height=100 width=120 style="position: relative;left:7%;margin-top:1em;">
				<div id="div1-1_link" style="text-align: center;margin-top:2em;margin-left: 0.5em;">
					<div>
						<h5><a class="nav-link" href="#" target="_blank">Contact us</a></h5>
					</div>
					<div>
						<h5><a class="nav-link" href="#" target="_blank">About us</a></h5>
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
				<div><h4 class="centerify"><a class="nav-link" href="#" target="_blank">Contact Us</a></h4></div>
				<div><h4 class="centerify"><a class="nav-link" href="#" target="_blank">About Us</a></h4></div>
			</div>
		</div>
		
    </div>
  </div>
    
        <!-- Carosal-->
        <div style="background-color: darkmagenta;padding-top: 1em;padding-bottom: 1em;margin-top: 0.5em;background-image: url('img/elec2.jpg');">
            <div class="container" style="opacity: 0.85;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          
            <div class="item active">
              <img src="http://via.placeholder.com/760x400/ffffff?text=Project%20images">
               <div class="carousel-caption">
                <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </a></h4>
                
              </div>
            </div><!-- End Item -->
     
             <div class="item">
              <img src="http://via.placeholder.com/760x400/ffffff?text=Project%20images">
               <div class="carousel-caption">
                <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="http://via.placeholder.com/760x400/ffffff?text=Project%20images">
               <div class="carousel-caption">
                <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="http://via.placeholder.com/760x400/ffffff?text=Project%20images">
               <div class="carousel-caption">
                <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
                
              </div>
            </div><!-- End Item -->

            <div class="item">
              <img src="http://via.placeholder.com/760x400/ffffff?text=Project%20images">
               <div class="carousel-caption">
                <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
                
              </div>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4" style="padding-left: 1em;">
          <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active" style="background-color: silver;"><h4>Lorem ipsum dolor sit amet consetetur sadipscing  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur </h4></li>
          <li data-target="#myCarousel" data-slide-to="1" class="list-group-item" style="background-color: silver;"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
          <li data-target="#myCarousel" data-slide-to="2" class="list-group-item" style="background-color: silver;"><h4>temporsssssssssss invdssssdddddidunt ut labore et dolore</h4></li>
          <li data-target="#myCarousel" data-slide-to="3" class="list-group-item" style="background-color: silver;"><h4>magna aliqudddddddddyam erat, sed diam voluptua</h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-color: silver;"><h4>tempor inviddddddddddunt ut labore et dolore magna aliquyam erat</h4></li>
        
        </ul>

          <!-- Controls -->
          <div class="carousel-controls">
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>

        </div><!-- End Carousel -->
    </div>
</div>
        <!-- Carosal End-->

<div class="container-fluid" style="background-color: ghostwhite;background-image: url('img/elec1.jpg');">
    <div class="row">
      <!-- Division 2-->
      <div class="col-sm-12" style="background-color: black;color: ghostwhite;opacity: 0.9;">
        <h1  style="text-align: center;margin-top: 0.1em;padding-top: 0.5em;">Recent Events</h1>
        <br>
        <br>
       <ul style="margin-bottom: 0em;padding-left: 1.5em;">

        <li class="hidden" style="list-style-type: none;">
           <div class="row">

            <div class="col-sm-8" >
                         <h2>Event title 1</h2>
                         <h4>Date</h4>
                         <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="http://via.placeholder.com/150X150" class="img-circle" alt="Cinque Terre" width="170" height="170" style="margin-left: 18%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2>Event title 2</h2>
                         <h4>Date</h4>
                         <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="http://via.placeholder.com/150X150" class="img-circle" alt="Cinque Terre" width="200" height="200" style="margin-left: 14%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;margin-bottom:0.1em;padding-bottom:0.2em;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2>Event title 3</h2>
                         <h4>Date</h4>
                         <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="http://via.placeholder.com/150X150" class="img-circle" alt="Cinque Terre" width="220" height="220" style="margin-left: 12%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>   
      </ul>
      </div>
    </div>
  </div>
    <!-- Division 3-->
    <div style="background-image: url('img/elec3.png');">
    <div class="container-fluid" style="background-color: #FFD96A; opacity:0.9;">
     <div class="row">
      
      <div class="col-sm-12"  >
        <h1 style="text-align:center;margin-top: 0.1em;padding-top: 0.5em;">About Us</h1>
    
      </div>
    </div>
   <div class="row">
      <div class="col-sm-8" >
             <h1>Prof. Dhananjay Gadre</h1>
             <h2>Director,CEDT</h2>
             <div class="row">
                <div class="col-sm-12" style="padding-left: 20%;">
                    <h4>Dhananjay V. Gadre (New Delhi, India) completed his MSc (electronic science) from the University of Delhi and M.Engr (computer engineering) from the University of Idaho, USA. In his professional career of 25 years, he has taught at the SGTB Khalsa College, University of Delhi, worked as a scientific officer at the Inter University Centre for Astronomy and Astrophysics (IUCAA), Pune, and since 2001, has been with the Electronics and Communication Engineering Division, Netaji Subhas Institute of Technology, New Delhi, currently as an associate professor. He is also associated with the global Fablab network and is a faculty at the Fab Academy. Professor Gadre is the author of several professional articles and five books. One of his books has been translated into Chinese and another one into Greek.  <a href="#">Read More </a></h4>
                </div>
             </div>
      </div>
      <div class="col-sm-4" >
             <img src="http://via.placeholder.com/250X250" class="img-circle" alt="Cinque Terre" width="250" height="250" style="margin-left: 10%;"> 
      </div>
  </div>
  <div class="centerify" style="color: green;font-size: 4em;font-family: 'Vollkorn', serif;text-align: center;">~~~</div>


    <div class="row">

      <div class="col-sm-4 border" style="text-align: center;padding: 1em;">
        <a href="http://epaper.prabhatkhabar.com/c/18623553" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Our effort gets covered by <br> leading daily</h4>
      </div>

      <div class="col-sm-4 border" style="text-align: center;padding: 1em;">
        <a href="https://www.ketto.org/sevasetu-citizen-care" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Our effort gets covered by <br> leading daily</h4>
      </div>

      <div class="col-sm-4" style="text-align: center;padding: 1em;">
        <a href="http://sevasetu.org/category/citizen-care/" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Our effort gets covered by <br> leading daily</h4>
      </div>
      
    </div>
    

  </div>
</div>
    <footer class="footer p-t-1">
        <div class="container">
                <nav class="navbar" style="background:transparent; color: black;">
                      <div class="row">
                        <div class="col-sm-8 h6"> <h1 style="color: whitesmoke;opacity: 0.6;margin-top: 0px;">CEDT</h1> </div>
                      <div class="col-sm-2 "> <a class="nav-item nav-link" href="http://sevasetu.org/" target="_blank"><h4 style="color: ghostwhite;"><u>About Us</u></h4></a></div>
                      <div class="col-sm-2 "> <a class="nav-item nav-link" href="http://sevasetu.org/"><h4 style="color: ghostwhite;"><u>Join Us</u></h4></a></div>

                      </div>
                      <h6 style="color: silver;margin: 0px;">© 2017 cedtnsit.in</h6>
                </nav>
        </div>
    </footer>
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
                var clickEvent = false;
    $('#myCarousel').carousel({
        interval:   4000    
    }).on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');     
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.list-group').children().length -1;
            var current = $('.list-group li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.list-group li').first().addClass('active'); 
            }
        }
        clickEvent = false;
    });
    $("ul li.hidden").each(function(i) {
     $(this).delay(1000 * i).queue(function(nxt) {
     $(this).removeClass('hidden');
     nxt();
  });
     $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    // Do something
      });
});
	});
$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
    $('#myCarousel .list-group-item').outerHeight(triggerheight);
});
</script>
</html>
