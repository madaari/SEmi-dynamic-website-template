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
    .scrollToTop{
  width:100px; 
  height:130px;
  padding:10px; 
  text-align:center; 
  background: whiteSmoke;
  font-weight: bold;
  color: #444;
  text-decoration: none;
  position:fixed;
  top:75px;
  right:40px;
  display:none;
  background: url('arrow_up.png') no-repeat 0px 20px;
}
.scrollToTop:hover{
  text-decoration:none;
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
               <li><a href="#Wiki">Home</a></li>
              <li><a href="#Wiki">Wiki</a></li>
              <li><a href="#Events">Events</a></li>
              <li><a href="#Events">Our Team</a></li>
            </ul>
          </nav>
        </div>
      </div>
</header>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////Main page start ///////////////////////////////////////////////////-->
<!-- Division 1-->
<div style="background-image: url('img/stars.jpg');">
	<div class="container-fluid" style="background-color:#eceff1; margin-left: 0.5em;margin-right: 0.5em;height:11em;opacity:0.9;" >
		<div class="row">
			<!-- Division 1.1 LOGO-->
			<div id="div1-1" class="col-xs-1" style="padding: 0px;margin-right: 1em;">
					<img class="img-responsive" src="img/logo.png" alt="logo" height=100 width=120 style="position: relative;left:7%;margin-top:1em;">
				<div id="div1-1_link" style="text-align: center;margin-top:2em;margin-left: 0.5em;">
					<div>
						<h5><a class="nav-link" href="contactus.php" target="_blank">Contact us</a></h5>
					</div>
					<div>
						<h5><a class="nav-link" href="#" target="_blank">About us</a></h5>
					</div>
				</div>
			</div>
			<!-- Division 1.2 HEADER-->
			<div id="div1-2" class="col-xs-9" style="text-align:center;">
				<h1 style="position: relative ;margin-top: 1%;font-weight: bold;">Centre for Electronic Design and Technology</h1>
				<h2 style="position: relative ;margin-top: 1%;">Block 4, Netaji Subash Institute of Technology</h2>
				<h2 style="position: relative ;margin-top: 1%;margin-bottom: 0.5%;">Dwarka, New Delhi</h2>
			</div>
			<div id="div1-3" class="col-xs-1" >
				<br>
				<div><h4 class="centerify"><a class="nav-link" href="contactus.php" target="_blank">Contact Us</a></h4></div>
				<div><h4 class="centerify"><a class="nav-link" href="#" target="_blank">About Us</a></h4></div>
			</div>
		</div>
		
    </div>
  </div>
    
        <!-- Carosal-->
        <div style="background-color: darkmagenta;padding-top: 1em;padding-bottom: 1em;margin-top: 0.5em;background-image: url('img/elec2.jpg');">
            <div class="container" style="opacity: 0.90;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          
            <div class="item active">
              <img src="https://hackster.imgix.net/uploads/attachments/361400/p1020495_edited_bKZizy24D0.JPG?auto=compress%2Cformat&w=760&h=400&fit=min" height=400 width=760>
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Raspberry Pi Thermal Camera:</strong><br>A portable, battery-powered thermal camera using a Raspberry Pi and an AMG8833 thermal camera sensor. </a></h4>
                
              </div>
            </div><!-- End Item -->
     
             <div class="item">
              <img src="https://hackster.imgix.net/uploads/attachments/356077/pedal-pi-image_hOV1czsX8m.jpg?auto=compress%2Cformat&w=760&h=400&fit=min">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Pedal-Pi: Programmable Guitar Pedal</strong><br>This programmable guitar pedal works with the Raspberry Pi ZERO board and it is made to experiment with sounds and learn about digital audio</a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="https://hackster.imgix.net/uploads/attachments/353780/image1_x9K9v9VM3t.png?auto=compress%2Cformat&w=760&h=400&fit=min">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Getting Started in Android Things with Raspberry Pi</strong><br>Let's get started in Android Things with Raspberry Pi by blinking.</a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="https://hackster.imgix.net/uploads/attachments/363094/store-40-novastarter-detail-1_erL4lcuq2v.jpg?auto=compress%2Cformat&w=760&h=400&fit=min">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Hologram Nova Starter Kit</strong><br></a></h4>
                
              </div>
            </div><!-- End Item -->

            <div class="item">
              <img src="https://hackster.imgix.net/uploads/attachments/358799/img_4798_qw9Y0BQOzi.JPG?auto=compress%2Cformat&w=760&h=400&fit=min">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Add Cellular to a Raspberry Pi with Hologram Nova</strong><br>Connect your Raspberry Pi to the world through cellular with the Hologram Nova.</a></h4>
                
              </div>
            </div><!-- End Item -->

              <div class="item">
              <img src="https://hackster.imgix.net/uploads/attachments/354170/dsc_7772_4u9wDCBRNl.JPG?auto=compress%2Cformat&w=760&h=400&fit=min">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong>Laser Pointer Panther Tank</strong><br>Build a robotic Panther tank that can use a laser pointer to play with a cat! It also uses a custom controller with Bluetooth.</a></h4>
                
              </div>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4" style="padding-left: 1em;">
          <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active" style="background-color: silver;"><h4><strong>Raspberry Pi Thermal Camera:</strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="1" class="list-group-item" style="background-color: silver;"><h4><strong>Pedal-Pi: Programmable Guitar Pedal</strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="2" class="list-group-item" style="background-color: silver;"><h4><strong>Getting Started in Android Things with Raspberry Pi</strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="3" class="list-group-item" style="background-color: silver;"><h4><strong>Hologram Nova Starter Kit</strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-color: silver;"><h4><strong>Add Cellular to a Raspberry Pi with Hologram Nova</strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-color: silver;"><h4><strong>Laser Pointer Panther Tank</strong></h4></li>
        
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
                         <h2>Earth Day: Planet Pulse</h2>
                         <h4>October 29, 2016</h4>
                         <h4>This is the planet we live on and it supports more than six billion humans and countless animals and plants. With climate change and pollution threatening our living environment, more people than ever are coming together to help and protect our only home.
With low-cost advanced technologies available for us today, there has never been a better time to show support for environmental protection.
Intel and Hackster have joined hands to lead this important challenge on Earth Day 2017, with an aim to encourage people to invent things that will benefit the planet, with focus on all university students worldwide!  <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="https://hackster.imgix.net/uploads/attachments/292945/earth-vitals-animated_3szapwBUG7.gif?auto=compress%2Cformat&w=150&h=150&fit=max" class="img-circle" alt="Cinque Terre" width="170" height="170" style="margin-left: 18%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2>Sensing a Smarter, Safer and Greener Life</h2>
                         <h4>Dec 26, 2016</h4>
                         <h4>This new Infineon contest calls on enterprise and professional developers to join us and build industrial applications using one of two very powerful products. Infineon’s DPS310 is a miniaturized digital barometric pressure sensor that offers high accuracy, low current consumption, and Infineon's BGT24LTR11N16 24GHz Radar with smart motion tracking, direction, proximity, speed detection and more. <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="https://hackster.imgix.net/uploads/attachments/300521/infineon-logo_svg_wUTo0SKwFQ.png?auto=compress%2Cformat&w=680&h=510&fit=max" class="img-circle" alt="Cinque Terre" width="200" height="200" style="margin-left: 14%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;margin-bottom:0.1em;padding-bottom:0.2em;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2>China-U.S. Young Maker Competition! </h2>
                         <h4>April 18, 2016</h4>
                         <h4>We're calling upon all U.S-based Makers who have the ideas and skills that can change the world. Join our challenge and build innovative projects that solve real problems, while competing against other tinkerers from China on a quest to become the ultimate global Maker.<br>

Use Intel hardware and submit projects that have impact in these areas:<br>

    Community Development <br>

    Education <br>

    Energy <br>

    Environmental Protection<br>

 <a href="#">Read More </a></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="https://hackster.imgix.net/uploads/attachments/300380/untitled_3_CWUWIRJim0.jpeg?auto=compress%2Cformat&w=680&h=510&fit=max" class="img-circle" alt="Cinque Terre" width="220" height="220" style="margin-left: 12%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>   
      </ul>
      <a href="#" style="text-align: end;"><h2>View all...</h2></a>
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
                    <h4>Dhananjay V. Gadre (New Delhi, India) completed his MSc (electronic science) from the University of Delhi and M.Engr (computer engineering) from the University of Idaho, USA. In his professional career of 25 years, he has taught at the SGTB Khalsa College, University of Delhi, worked as a scientific officer at the Inter University Centre for Astronomy and Astrophysics (IUCAA), Pune, and since 2001, has been with the Electronics and Communication Engineering Division, Netaji Subhas Institute of Technology, New Delhi, currently as an associate professor.  <a href="#">Read More </a></h4>
                </div>
             </div>
      </div>
      <div class="col-sm-4" >
             <img src="https://i1.wp.com/cepd.in/images/gadresir.jpg?resize=250%2C250" class="img-circle" alt="Cinque Terre" width="250" height="250" style="margin-left: 10%;"> 
      </div>
  </div>
  <div class="centerify" style="color: green;font-size: 4em;font-family: 'Vollkorn', serif;text-align: center;">~~~</div>


    <div class="row">

      <div class="col-sm-4 border" style="text-align: center;padding: 1em;">
        <a href="#" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Name 1 <br> Designation<br>Work discription</h4>
      </div>

      <div class="col-sm-4 border" style="text-align: center;padding: 1em;">
        <a href="#" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Name 2 <br> Designation<br>Work discription</h4>
      </div>

      <div class="col-sm-4" style="text-align: center;padding: 1em;">
        <a href="#" target="_blank"><img src="http://via.placeholder.com/100X100" style="height: 7em;"></a>
        <h4 style="color: #00695c;">Name 3 <br> Designation<br>Work discription</h4>
      </div>
      
    </div>
    
    <a href="#" style="text-align: end;"><h2>Our Team...</h2></a>
  </div>
</div>
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////Main page end ///////////////////////////////////////////////////-->
<div>
<a href="#" class="scrollToTop" style="display: none;height: ;height: 4em;padding: 0px;width: 6em;margin: 0px;"><img src="img/top.png" width=50% ></a>
</div>
    <footer class="footer p-t-1">
        <div class="container">
                <nav class="navbar" style="background:transparent; color: black;">
                      <div class="row">
                        <div class="col-xs-8 h6"> <h1 style="color: whitesmoke;opacity: 0.6;margin-top: 0px;">CEDT</h1> </div>
                        <div class="col-xs-4"><h2 style="color: whitesmoke;opacity:0.6;margin-top:10px">© 2017 cedtnsit.in</h2></div>
                      </div>
                      
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
     $(this).delay(1500 * i).queue(function(nxt) {
     $(this).removeClass('hidden');
     nxt();
  });
     $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    // Do something
      });
     $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},1000);
    return false;
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
