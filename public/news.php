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
          <li><a href="news.html">News</a></li>
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
  
  </header><!-- End Header -->
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
</div>  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h1 class="title2">News</h1>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3">Profesional News Page</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/1.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/2.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/3.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/4.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>categories</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>archive</h4>
                  <ul>
                    <li>
                      <a href="#">07 July 2016</a>
                    </li>
                    <li>
                      <a href="#">29 June 2016</a>
                    </li>
                    <li>
                      <a href="#">13 May 2016</a>
                    </li>
                    <li>
                      <a href="#">20 March 2016</a>
                    </li>
                    <li>
                      <a href="#">09 Fabruary 2016</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                      <li>
                        <a href="#">Portfolio</a>
                      </li>
                      <li>
                        <a href="#">Project</a>
                      </li>
                      <li>
                        <a href="#">Design</a>
                      </li>
                      <li>
                        <a href="#">Website</a>
                      </li>
                      <li>
                        <a href="#">Joomla</a>
                      </li>
                      <li>
                        <a href="#">Html</a>
                      </li>
                      <li>
                        <a href="#">wordpress</a>
                      </li>
                      <li>
                        <a href="#">Masonry</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/1.jpg" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">11 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <!-- End single blog -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/2.jpg" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">7 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <!-- Start single blog -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/3.jpg" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">13 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <!-- End single blog -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/4.jpg" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">1 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <!-- Start single blog -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/5.jpg" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">10 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <!-- End single blog -->
              <div class="blog-pagination">
                <ul class="pagination">
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  </footer><!-- End  Footer -->

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