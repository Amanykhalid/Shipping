<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Global Shipping Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('style/images/gss png-01.png') }}">

    <link rel="stylesheet" href="style/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
    <link href="{{ asset('style/assets/css/login-register.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">

	<script src="{{ asset('style/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="style/assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="style/assets/js/login-register.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style/css/magnific-popup.css">

    <link rel="stylesheet" href="style/css/aos.css">

    <link rel="stylesheet" href="style/css/ionicons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="style/css/flaticon.css">
    <link rel="stylesheet" href="style/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('style/css/detiles.css')}}">
	<link rel="stylesheet" href="style/css/style.css">
  </head>
  <style>
	
	.headder {
		background:#fff;
		padding: 10px;
		text-align: center;
	  }
  </style>
  <body>
	<div class="headder">
		<div class="container">
			<div class="row">

			<!-- change color and space between icon and text -->
			<div class="col-sm-1">
				<a href="https://www.qallam.hub-techs.com/store">
				<!-- logo -->
					<img src="{{asset('style/images/gss png-01.png')}}" height="50px" width="70px"  alt="logo" >
				<!-- logo -->
				</a>
			</div>
			  <div class="col-sm-2" style="margin-top: 10px">
				<a href="#"><span class="icon icon-phone"></span><span class="text" style="margin-left: 10px;">(+965) 66549961   </span></a>
			</div>
			<div class="col-sm-2" style="margin-top: 10px">
				
				<a href="#"><span class="icon icon-envelope"></span><span class="text" style="margin-left: 10px;">info@shipxworld.com</span></a>
			</div>

				<!-- add margin-top -->
			  <div style="display: inline-block;margin-top: 10px" id="login" class="offset-sm-4 col-sm-2">
				<a style="display: inline-block" class="btn btn-outline-primary bigg-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
				<a class="btn btn-danger big-register" style="display: inline-block,color: #fff" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
			
				<div class="modal fade login" id="loginModal">
					<div class="modal-dialog login animated">
						<div class="modal-content">
						   <div class="modal-header">
							  <button type="button" style="margin-left: 10px" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							  <h4 class="modal-title">Login with</h4>
						  </div>
						  <div class="modal-body">
							  <div class="box">
								   <div class="content">
									  <div class="social">
										 
										  <a id="google_login" class="circle google" href="#">
											  <i class="fa fa-google-plus fa-fw"></i>
										  </a>
										  <a id="facebook_login" class="circle facebook" href="#">
											  <i class="fa fa-facebook fa-fw"></i>
										  </a>
									  </div>
									  <div class="division">
										  <div class="line l"></div>
											<span>or</span>
										  <div class="line r"></div>
									  </div>
									  <div class="error"></div>
									  <div class="form loginBox">
										  <form method="" action="" accept-charset="UTF-8">
										  <input id="email" class="form-control" type="text" placeholder="Email" name="email">
										  <input id="password" class="form-control" type="password" placeholder="Password" name="password">
										  <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
										  </form>
									  </div>
								   </div>
							  </div>
							  <div class="box">
								  <div class="content registerBox" style="display:none;">
								   <div class="form">
									  <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
									  <input id="email" class="form-control" type="text" placeholder="Email" name="email">
									  <input id="password" class="form-control" type="password" placeholder="Password" name="password">
									  <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
									  <input class="btn btn-default btn-register" type="button" value="Create account" name="commit">
									  </form>
									  </div>
								  </div>
							  </div>
						  </div>
						  <div class="modal-footer">
							  <div class="forgot login-footer">
								  <span>Looking to
									   <a href="javascript: showRegisterForm();">create an account</a>
								  ?</span>
							  </div>
							  <div class="forgot register-footer" style="display:none">
								   <span>Already have an account?</span>
								   <a href="javascript: showLoginForm();">Login</a>
							  </div>
						  </div>
						</div>
					</div>
				</div></div>
			</div>
		  </div>
	</div>
    

    
     @yield('contant')
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <img src="{{asset('style/images/GSS اببيض-01.png')}}" max-width="100%" height="250px" width="250px" alt="">
            </div>
          </div>
        
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> USEFUL LINKS</h2>
              <ul class="list-unstyled">
                <li><a href="#get_rates" class="py-2 d-block font-li">Home</a></li>
				<li><a href="#our_partners" class="py-2 d-block font-li"> Our News</a></li>
				<li><a href="#our_service" class="py-2 d-block font-li">Our Blogs</a></li>
				<li><a href="#our_service" class="py-2 d-block font-li">Our Mythology</a></li>
				<li><a href="#login" class="py-2 d-block font-li">Login / Register</a></li>
                <li><a href="https://www.qallam.hub-techs.com/store/home/contact/" class="py-2 d-block font-li">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon icon-phone font-li"></span><span class="text">(+965) 66549961   </span></a></li>
					<li><a href="#"><span class="icon icon-envelope font-li"></span><span class="text">info@shipxworld.com</span></a></li>
					<li><a style="display: inline-block" href="https://www.instagram.com/shipxworld/"><i class="icon icon-instagram"></i></a> <a style="display: inline-block" href="https://twitter.com/ShipxWorld/"><i class="icon icon-twitter"></i></a> <a  style="display: inline-block"href="https://www.facebook.com/shipxworld/"><i class="icon icon-facebook"></i></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
     
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="{{ asset('style/js/jquery.min.js') }}"></script>
  <script src="style/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="style/js/popper.min.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
  <script src="style/js/jquery.easing.1.3.js"></script>
  <script src="style/js/jquery.waypoints.min.js"></script>
  <script src="style/js/jquery.stellar.min.js"></script>
  <script src="style/js/owl.carousel.min.js"></script>
  <script src="style/js/jquery.magnific-popup.min.js"></script>
  <script src="style/js/aos.js"></script>
  <script src="style/js/jquery.animateNumber.min.js"></script>
  <script src="style/js/bootstrap-datepicker.js"></script>
  <script src="style/js/jquery.timepicker.min.js"></script>
  <script src="style/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="style/js/google-map.js"></script>
  <script src="style/js/main.js"></script>
  <script>
	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#card-slider', {
			perPage    : 2,
			breakpoints: {
				600: {
					perPage: 1,
				}
			}
		} ).mount();
	} );
  </script>
    
  </body>
</html>