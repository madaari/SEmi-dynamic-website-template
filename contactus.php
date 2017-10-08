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

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////Contact page start ///////////////////////////////////////////////////-->
 <div style="background-image: url('img/elec3.png');">
    <div class="container-fluid" style="background-color: #FFD96A; opacity:0.9;">
        <div class="jumbotron jumbotron-sm well">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
      <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">Join us</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Technical Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Contact details</legend>
            <address>
                <strong>CEDT</strong><br>
                NSIT, Sector-3<br>
                Dwarka, New Delhi<br>
               
                Telephone:(011) 25000117 
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">cedtmail@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
  </div>
</div>
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////Contact page end ///////////////////////////////////////////////////-->
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
