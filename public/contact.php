<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REFORM – The Palestinian Association for Empowerment and Local Development</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://reform.ps/wp-content/uploads/cropped-reform-favicon-192x192.png" rel="icon">
  <link href="https://reform.ps/wp-content/uploads/cropped-reform-favicon-192x192.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eolivx - v2.2.0
  * Template URL: https://bootstrapmade.com/eolivx-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  
	.modal-login {		
		color: #636363;
		width: 350px;
		margin: 80px auto 0;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: ##3EC1D5;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #60c7c1;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><img src="https://reform.ps/wp-content/uploads/reform-logo-new-white-RGB.svg"  alt=""></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="https://reform.ps/wp-content/uploads/reform-logo-new-white-RGB.svg" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <!-- <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="blog.html">Blogs</a></li>
          <li><a href="#blog">News</a></li>
          <li><a href="contact.html">Contact</a></li>
          <div style="
              float: right;
    margin-right: -15%;">
           <li><a style="display:inline;color:#fff" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-user" aria-hidden="true"></i>
            Login</a> / <a href="create2.html" style="display:inline;color:#fff" type="button" ><i class="fa fa-ticket" aria-hidden="true"></i>
            Tazkara</a>  </li>
        </div>
      </nav><!-- .nav-menu -->
     
    </div>

  </header>
  <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" style="background:#3EC1D5" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>  <!-- End Header -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- ======= Slider Section ======= -->
 <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Pricing Table</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>basic <br /> <span>$80 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check cross">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check cross">Free domin</li>
                <li class="check cross">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check cross">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">top sale</span>
              <h3>standard <br /> <span>$110 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check cross">Free domin</li>
                <li class="check">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check cross">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>premium <br /> <span>$150 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check">Free domin</li>
                <li class="check">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
        </div>
      </div>
    </div>End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <main id="main">

    <!-- ======= Blog Header ======= -->
  
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10%">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>
                    Call:+970 22 96 66 46
                    <br>
                    <span>E : info[at]reform.ps</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    Email: info@example.com<br>
                    <span>Web: www.example.com</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Location:Tirawi Bldg, 2nd Floor, Al-Masyoon
                    <br>
                    <span>Ramallah, Palestine</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>              <!-- End Map -->
            </div>

        <script>(function () {
                  var setting = {"height":538,"width":803,"zoom":8,"queryString":"Palestine","place_id":"ChIJ2b1miNLyHBURhvZm0QGgF-4","satellite":false,"centerCoord":[31.888305110276946,34.89207605478903],"cid":"0xee17a001d166f686","lang":"en","cityUrl":"/israel/tel-aviv","cityAnchorText":"Map of Tel Aviv, Israel, Israel","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"334680"};
                  var d = document;
                  var s = d.createElement('script');
                  s.src = 'https://1map.com/js/script-for-user.js?embed_id=334680';
                  s.async = true;
                  s.onload = function (e) {
                    window.OneMap.initMap(setting)
                  };
                  var to = d.getElementsByTagName('script')[0];
                  to.parentNode.insertBefore(s, to);
                })();</script><a href="https://1map.com/map-embed">1 Map</a></div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
    <div class="footer-area" style="background: rgba(0, 0, 0, 0.8);">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><img src="https://reform.ps/wp-content/uploads/reform-logo-new-white-RGB.svg" alt="" class="img-fluid"></h2>
                </div>

                <p style="color: #fafefe;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li style="color:#fafefe">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li style="color:#fafefe">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li style="color:#fafefe">
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li style="color:#fafefe">
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p>Tel: +123 456 789</p>
                  <p>Email: contact@example.com</p>
                  <p>Working Hours:9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head" style="color: #fff;">
                <h4>EXPLORE</h4>
                <!-- <div class="flicker-img">
                  <ul>
                    <li><a href="">Resources</a></li>
                  </ul>
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div> -->
                <div class="footer-contacts">
                  <i class="fa fa-adjust fa-lg"></i><a style="color:  #fff;" href="">&nbsp;&nbsp; Resources</a><br><br>
                  <i class="fa fa-adjust fa-lg "></i><a style="color: #fff;" href="">&nbsp;&nbsp; Read our Blog</a><br><br>
                  <i class="fa fa-adjust fa-lg "></i><a style="color:  #fff;" href="">&nbsp;&nbsp; Browse our Gallery</a><br><br>
                  <i class="fa fa-adjust fa-lg "></i><a style="color: #fff;" href="">&nbsp;&nbsp; Watch our Videos</a><br><br>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/appear/jquery.appear.js"></script>
  <script src="assets/vendor/knob/jquery.knob.js"></script>
  <script src="assets/vendor/parallax/parallax.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>