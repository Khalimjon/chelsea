<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title> @yield('title') </title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{asset('style.css')}}">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="{{asset('css/colors.css')}}">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="{{asset('css/versions.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="{{asset('/css/3dslider.css')}}" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="/js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="{{route('home')}}"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                            @if (!Auth::check())
                                <li class="login-modal">
                                <a href="{{route('login')}}" class="login"><i class="fa fa-user"></i>Login</a>
                                </li>
                                <li>
                                <div class="cart-option">
                                    <a href="{{route('register')}}"><i class="fa fa-shopping-cart"></i>Register</a>
                                </div>
                                </li>
                            @else
                            <li class="login-modal">
                                <a href="{{route('login')}}" class="login"><i class="fa fa-user"></i>Dashboard</a>
                            </li>
                                @endif
                         <!-- end button section -->

                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="{{route('home')}}">Home</a></li>
                                          <li><a href="{{route('about')}}">About</a></li>
                                          <li><a href="{{route('team')}}">Team</a></li>
                                          <li><a href="{{route('news')}}">News</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>Proud of LONDON<br>You <span class="color-blue">London is BLUE</span></h3>
                              <button href="{{route('about')}}" class="btn btn-primary btn-lg">Read More</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                            <h3>Proud of LONDON<br>You <span class="color-blue">London is BLUE</span></h3>
                              <button href="{{route('about')}}" class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <<h3>Proud of LONDON<br>You <span class="color-blue">London is BLUE</span></h3>
                              <button href="{{route('about')}}" class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!-- /.carousel -->
            <div class="news">
               <div class="container">
                  <div class="heading-slider">
                     <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Contrary to popular belief, Lorem Ipsum is not simply random text.", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."]'>
                     <span class="wrap"></span>
                     </a>
                     </h1
                     <span class="wrap"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ---------------------------------------------------------------------------------------------- -->

      @yield('content')

      <!-- ---------------------------------------------------------------------------------------------- -->
      <footer id="footer" class="footer">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="full">
                    <div class="footer-widget">
                       <div class="footer-logo">
                          <a href="#"><img src="{{asset('images/footer-logo.png')}}" alt="#" /></a>
                       </div>
                       <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                       <ul class="social-icons style-4 pull-left">
                          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                          <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-2">
                 <div class="full">
                    <div class="footer-widget">
                       <h3>Menu</h3>
                       <ul class="footer-menu">
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="team.html">Our Team</a></li>
                          <li><a href="news.html">Latest News</a></li>
                          <li><a href="matche.html">Recent Matchs</a></li>
                          <li><a href="blog.html">Our Blog</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="full">
                    <div class="footer-widget">
                       <h3>Contact us</h3>
                       <ul class="address-list">
                          <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                          <li><i class="fa fa-phone"></i> 123 456 7890</li>
                          <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="full">
                    <div class="contact-footer">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="footer-bottom">
           <div class="container">
              <p>Copyright © 2018 GameInfo.All rights reserved.</p>
           </div>
        </div>
     </footer>
     <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
     <!-- ALL JS FILES -->
     <script src="js/all.js"></script>
     <!-- ALL PLUGINS -->
     <script src="js/custom.js"></script>
  </body>
</html>
