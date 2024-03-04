<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" href="client/css/bootstrap.min.css">
    <link rel="stylesheet" href="client/css/font-awesome.min.css">
    <link rel="stylesheet" href="client/css/slick.css">
    <link rel="stylesheet" href="client/css/owl.carousel.css">
    <link rel="stylesheet" href="client/css/animate.min.css">
    <link rel="shortcut icon" type="client/img/icon" href="client/images/icon_2.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karma:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="client/css/about_us.css">
    <!-- Prepared By Md. Fajael Ibne Bashar -->
  </head>
  <body>
    <header>
      <div class="main_header hidden-xs hidden-sm">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-right part">
              <ul class="communication">
                <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;towhida_rashid@du.ac.bd</a></li>
              </ul>
            </div>
            
            <div class="col-sm-2 text-center part">
              <ul class="communication">
                <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88-01711-014610</a></li>
              </ul>
            </div>
                     
            <div class="col-sm-2 text-right hidden-xs">
              <ul class="social_media">
                <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="http://www.du.ac.bd/home" data-toggle="tooltip" data-placement="bottom" title="DU Website" target="_blank"><i class="fa fa-universal-access" aria-hidden="true"></i></a></li>
                <li><a href="https://www.msn.com/en-us/weather/today/dhakadhakabangladesh/we-city?q=dhaka&form=PRWLAS&iso=BD&el=erUH%2fhfJrrB2dnzg9uWGfg%3d%3d" data-toggle="tooltip" data-placement="bottom" title="Weather news" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--end of header-->
     
    <section id="full_banner">
      <div class="banner">
        <div class="full_menu">
          <div class="menu_padd">
            <div class="container cnt for_logo">
              <nav class="navbar navbar-default menu">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header nav_brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><h4>DEPARTMENT OF<br>METEOROLOGY</h4></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse menu_option" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right menu_link">
                      <li><a href="{{ url('/') }}" class="active">HOME</a></li>
                      <li><a href="{{ url('/about_us') }}" target="_blank">ABOUT US</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/ms_course') }}" target="_blank">M.Sc. in Meteorology</a></li>
                        </ul>
                      </li>
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIBRARY<span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                          <li><a href="{{ url('/dept_library') }}" target="_blank">Dept. Library</a></li>
                          <li><a href="{{ url('/pdf_book') }}" target="_blank">PDF Books</a></li>
                          <li><a href="{{ url( '/google_scholar') }}" target="_blank">Google Scholar</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ url('/c_faculty')}}" target="_blank">FACULTY</a></li>
                      <li><a href="{{ url('/c_research')}}" target="_blank">RESEARCH</a></li>
                      <li><a href="contact.html" target="_blank">CONTACT US</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
              
              <div class="du_logo">
                <a href="#"><img src="client/images/icon_2.png" height="52" width="35" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <!--end of menu-->
           
        <div class="banner_heading text-center">
          <h3>ABOUT US</h3>
        </div>
      </div>
    </section>
     <!--end of banner-->
     
    <section id="welcome">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="welcome_meterology common_heading  text-center text-uppercase">
              <h1>welcome to <span class="red">department of meteorology</span></h1>
            </div>
            <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quod quia voluptatum ipsam dignissimos ullam accusamus,<br> optio ipsum perferendis nemo.</p>
          </div>
        </div>
             
        <div class="row">
          <div class="col-sm-4">
            <div class="tsthobe wow fadeInUp" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.3s">
              <div class="postn"><i class="fa fa-magnet edu_icon" aria-hidden="true"></i></div>
              <h4 class="prof_edu">PROFESSIONAL TRAINING</h4>
              <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="tsthobe wow fadeInUp" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.3s">
              <div class="postn"><i class="fa fa-book edu_icon" aria-hidden="true"></i></div>
              <h4 class="prof_edu">WEATHER FORECASTING</h4>
              <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
            </div>
          </div>
                 
          <div class="col-sm-4">
            <div class="tsthobe wow fadeInUp" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.3s">
              <div class="postn"><i class="fa fa-pencil edu_icon" aria-hidden="true"></i></div>
              <h4 class="prof_edu">METEOROLOGICAL EDUCATION</h4>
              <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of welcome meterology depatment-->
     
    <section id="jquery_counter_up">
      <div class="container">
        <div class="counter-up">
          
          <div class="row">
            <div class="col-sm-3">
              <div class="counter1 text-center">
                <div class="counter_icon"><i class="fa fa-user counter_icon_design" aria-hidden="true"></i></div>
                <h1 class="cnt_up_heading"><span class="counter">8</span></h1>
                <p class="cnt_up_heading">TEACHERS</p>
              </div>
            </div>
            
            <div class="col-sm-3">
              <div class="counter1 text-center">
                <div class="counter_icon"><i class="fa fa-users counter_icon_design" aria-hidden="true"></i></div>
                <h1 class="cnt_up_heading"><span class="counter">20</span></h1>
                <p class="cnt_up_heading">STUDENTS</p>
              </div>
            </div>
                     
            <div class="col-sm-3">
              <div class="counter1 text-center">
                <div class="counter_icon"><i class="fa fa-calendar counter_icon_design" aria-hidden="true"></i></div>
                <h1 class="cnt_up_heading"><span class="counter">2</span></h1>
                <p class="cnt_up_heading">YEARS EXPERIENCE</p>
              </div>
            </div>
                     
            <div class="col-sm-3">
              <div class="counter1 text-center">
                <div class="counter_icon"><i class="fa fa-trophy counter_icon_design" aria-hidden="true"></i></div>
                <h1 class="cnt_up_heading"><span class="counter">0</span></h1>
                <p class="cnt_up_heading">AWARDS</p>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!--end of jquery counterup-->
    <!--end of our teachers-->
     
    <section id="full_footer">
      <div class="full_footer">
        <div class="container">
          
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <div class="logo">
                <a href=""><img src="client/images/icon_2.png" height="100" width="70" alt="logo"></a>
              </div>
              
              <div class="monogram">
                <h4>department of meteorology</h4>
                <h5>faculty of earth and environmental science</h5>
                <h6>university of dhaka</h6>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-4">
              <div class="footer_box">
                <ul class="footer_opt">
                  <h3>Useful Links</h3>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Notice</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;News</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Courses</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Events</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Teachers</a></li>
                  <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;FAQ</a></li>
                </ul>
              </div>
            </div>
                      
            <div class="col-xs-12 col-sm-4">
              <div class="footer_box">
                <ul class="footer_opt ">
                  <h3>About Us</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo provident, tempora cum laudantium, id qui perspiciatis maiores maxime culpa eaque.</p>
                  <h3>Follow Us</h3>
                  <ul class="follow">
                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <footer>
      <div class="last">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <p class="text-center">Copyright © 2018 Department of Meteorology | All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
      
    <button class="top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
      <!--end of all-->
    <script src="client/js/jquery-2.1.3jquery.min.js"></script>
    <script src="client/js/bootstrap.min.js"></script>
    <script src="client/js/slick.min.js"></script>
    <script src="client/js/jquery.counterup.min.js"></script>
    <script src="client/js/jquery.sliphover.min.js"></script>
    <script src="client/js/waypoints.min.js"></script>
    <script src="client/js/isotope.pkgd.min.js"></script>
    <script src="client/js/jquery.stellar.min.js"></script>
    <script src="client/js/particles.js"></script>
    <script src="client/js/app.js"></script>
    <script src="client/js/wow.min.js"></script>
    <script src="client/js/about_us.js"></script>
    <script>
        $(function(){
           new WOW().init(); 
        });
    </script>
    <script>
        $(function(){
            $(window).stellar({
                responsive: true,
            });
        });
    </script>
    <script>
    $("#container").sliphover();
    </script>
  </body>
</html>