
<?php
  $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQWvKmJQrt3-DpE5-8b8zu9rXe4DF7DpTq8JMUYQAukLDR_hwAKGpJK9sUMB62CvXXk7N4hIc9MJGya/pub?gid=0&single=true&output=csv";
  
  $data = get_csv_content($url);
  
  $is_valid = validate_data($data);
  
  $data_to_publish = array(0, 0, 0, 0,0,0);
  
  if($is_valid){
 
  }
  
  function get_csv_content($spreadsheet_url){
    if(!ini_set('default_socket_timeout', 15)) 
    echo "<!-- unable to change socket timeout -->";
    if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $spreadsheet_data[] = $data;
      }
      fclose($handle);
      return $spreadsheet_data;
    }
  }
  
  function validate_data($data){
    return true;
  }

  function remove_html_tags($data_to_publish){
    $data_to_publish[0]=(int)strip_tags($data_to_publish[0]);
    $data_to_publish[1]=(int)strip_tags($data_to_publish[1]);
    $data_to_publish[2]=(int)strip_tags($data_to_publish[2]);
    $data_to_publish[3]=(int)strip_tags($data_to_publish[3]);
    return true;
  }
?>
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
  <meta content="utf-8" http-equiv="encoding">
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
              <img src="<?php echo $data[5][3];?>" height=400 width=760>
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[5][1]; ?></strong><br><?php echo $data[5][2]; ?> </a></h4>
                
              </div>
            </div><!-- End Item -->
     
             <div class="item">
              <img src="<?php echo $data[6][3];?>">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[6][1]; ?></strong><br><?php echo $data[6][2]; ?></a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="<?php echo $data[7][3];?>">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[7][1]; ?></strong><br><?php echo $data[7][2]; ?></a></h4>
                
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="<?php echo $data[8][3];?>">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[8][1]; ?></strong><br><?php echo $data[8][2]; ?></a></h4>
                
              </div>
            </div><!-- End Item -->

            <div class="item">
              <img src="<?php echo $data[9][3];?>">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[9][1]; ?></strong><br><?php echo $data[9][2]; ?></a></h4>
                
              </div>
            </div><!-- End Item -->

              <div class="item">
              <img src="<?php echo $data[10][3];?>">
               <div class="carousel-caption">
                <h4><a href="#" style="color: rgb(255,255,255)"><strong><?php echo $data[10][1]; ?></strong><br><?php echo $data[10][2]; ?></a></h4>
                
              </div>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4" style="padding-left: 1em;">
          <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active" style="background-color: silver;"><h4><strong><?php echo $data[5][1]; ?></strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="1" class="list-group-item" style="background-color: silver;"><h4><strong><?php echo $data[6][1]; ?></strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="2" class="list-group-item" style="background-color: silver;"><h4><strong><?php echo $data[7][1]; ?></strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="3" class="list-group-item" style="background-color: silver;"><h4><strong><?php echo $data[8][1]; ?></strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-color: silver;"><h4><strong><?php echo $data[9][1]; ?></strong></h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-color: silver;"><h4><strong><?php echo $data[10][1]; ?></strong></h4></li>
        
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
                         <h2><?php echo $data[1][1];?></h2>
                         <h4><?php echo $data[1][2];?></h4>
                         <h4><?php echo $data[1][4];?></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="<?php echo $data[1][3];?>" class="img-circle" alt="Cinque Terre" width="170" height="170" style="margin-left: 18%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2><?php echo $data[2][1];?></h2>
                         <h4><?php echo $data[2][2];?></h4>
                         <h4><?php echo $data[2][4];?></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="<?php echo $data[2][3];?>" class="img-circle" alt="Cinque Terre" width="200" height="200" style="margin-left: 14%;"> 
            </div>
          </div>
          <hr style="border-style: dashed;">
        </li>

         <li class="hidden" style="list-style-type: none;margin-bottom:0.1em;padding-bottom:0.2em;">
           <div class="row">
            <div class="col-sm-8" >
                         <h2><?php echo $data[3][1];?></h2>
                         <h4><?php echo $data[3][2];?></h4>
                         <h4><?php echo $data[3][4];?></h4>
            </div>
            <div class="col-sm-4" >
                         <img src="<?php echo $data[3][3];?>" class="img-circle" alt="Cinque Terre" width="220" height="220" style="margin-left: 12%;"> 
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
             <h1><?php echo $data[12][0];?></h1>
             <h2><?php echo $data[12][1];?></h2>
             <div class="row">
                <div class="col-sm-12" style="padding-left: 20%;">
                    <h4><?php echo $data[12][2];?>  <a href="#">Read More </a></h4>
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
