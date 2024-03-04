<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" href="client/css/bootstrap.min.css">
    <link rel="stylesheet" href="client/css/font-awesome.min.css">
    <link rel="stylesheet" href="client/css/slick.css">
    <link rel="stylesheet" href="client/css/owl.carousel.css">
    <link rel="stylesheet" href="client/css/animate.min.css">
    <link rel="shortcut icon" type="client/img/icon" href="client/images/icon_2.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karma:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="client/css/contact.css">
    <!-- Prepared By Md. Fajael Ibne Bashar & Arafat Ahmed Tanim -->
</head>
<body>
   <header>
       <div class="main_header">
           <div class="container">
               <div class="row">
                   <div class="col-sm-8 text-right part hidden-xs hidden-sm">
                       <ul class="communication">
                           <li><a href="https://www.google.com/gmail/about/#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;towhida_rashid@du.ac.bd</a></li>
                       </ul>
                   </div>
                   <div class="col-sm-2 text-center part hidden-xs hidden-sm">
                       <ul class="communication">
                           <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88-01711-014610</a></li>
                       </ul>
                   </div>
                   <div class="col-xs-12 col-sm-2 text-right">
                       <ul class="social_media">
                           <li><a href="http://bmd.gov.bd/?/home/" data-toggle="tooltip" data-placement="bottom" title="BMD" target="_blank"><i class="fa fa-sun-o" aria-hidden="true"></i></a></li>
                           <li><a href="http://www.imd.gov.in/pages/main.php" data-toggle="tooltip" data-placement="bottom" title="IMD" target="_blank"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.msn.com/en-us/weather/today/dhakadhakabangladesh/we-city?q=dhaka&form=PRWLAS&iso=BD&el=erUH%2fhfJrrB2dnzg9uWGfg%3d%3d" data-toggle="tooltip" data-placement="bottom" title="Weather news" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i></a></li>
                           <li><a href="http://www.du.ac.bd/home" data-toggle="tooltip" data-placement="bottom" title="DU Website" target="_blank"><i class="fa fa-universal-access" aria-hidden="true"></i></a></li>
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
                          <a class="navbar-brand brand_size" href="index.html"><h4>DEPARTMENT OF<br>METEOROLOGY</h4></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu_option" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right menu_link">
                    <li class="dropdown">
                      <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      
                        <li><a href="{{ url('/paper_submit') }}" target="_blank">Paper Submit</a></li>
                        <li><a href="{{ url('/live_stream')}}" target="_blank">LIVE Streaming</a></li>
                        <li><a href="{{ url('/payment')}}" target="_blank">Payment</a></li>
                        <li><a href="{{ url('/c_staff')}}" target="_blank">Staff</a></li>
                      </ul>
                    </li>
                            
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/ms_course') }}" target="_blank">M.Sc. in Meteorology</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('/c_event') }}" target="_blank">EVENT</a></li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIBRARY<span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                          <li><a href="{{ url('/dept_library') }}" target="_blank">Book List</a></li>
                          <li><a href="{{ url('/pdf_book') }}" target="_blank">PDF Books</a></li>
                          <li><a href="{{ url('/google_scholar')}}" target="_blank">Google Scholar</a></li>
                        </ul>
                    </li>
                            
                    <li><a href="{{ url('/c_faculty')}}" target="_blank">FACULTY</a></li>
                    <li><a href="{{ url('/c_research')}}" target="_blank">RESEARCH</a></li>
                    <li><a href="{{ url('/c_contact') }}" target="_blank">CONTACT US</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="du_logo hidden-xs hidden-sm">
                <a href="#"><img src="client/images/icon_2.png" height="52" width="35" alt=""></a>
            </div>
             </div>
            </div>
         </div>
         <!--end of menu-->
         <div class="banner_heading text-center">
             <h3>CONTACT US</h3>
         </div>
      </div>
   </section>
   <!--end of banner-->
   <section id="contact">
        <div class="container">
            <div class="row full_contact">
                <div class="col-sm-6 col-xs-12">
                    <div class="contact_us">
                        <h3>Contact us</h3>
                        <p>The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.</p>
                        <ul>
                            <li><a href="contact.html" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kazi Motahar Hossain Bhaban, Dhaka-1000</a></li>
                            <li><a href="contact.html" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;+880-2-9661920-73 Extn. 7274(Off.)</a></li>
                            <li><a href="https://www.google.com/gmail/about/#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp; towhida_rashid@du.ac.bd</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="message">
                        <h3>Send Message</h3>
                        {!! Form::open(['url' => '/c_message', 'method' => 'post', 'files' => 'false']) !!}
                           <div class="dd">
                              <input type="text" name="name" id="name" class="name" placeholder="Your Name"> 
                           </div>
                            <div class="ff">
                               <input type="text" name="email" id="email" class="email" placeholder="Your Email"> 
                            </div>
                            <div class="jj">
                               <input type="text" name="sub" id="sub" class="subject" placeholder="Your Subject"> 
                            </div>
                            <div class="gg">
                                <textarea name="mes" id="mes" class="sms" placeholder="Message"></textarea>
                            </div>
                        <button type="submit" class="send">SEND</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of contact-->
    <section>
        <div class="google_map" id="map"></div>
    </section>
    <!--end of map-->
   <section id="full_footer">
        <div class="full_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs hidden-sm">
                       <div class="logo">
                           <a href=""><img src="client/images/icon_1.png" alt="logo"></a>
                       </div>
                       <div class="monogram">
                           <h4>department of meteorology</h4>
                           <h5>faculty of earth and environmental science</h5>
                           <h6>university of dhaka</h6>
                           <h6>dhaka-1000</h6>
                           <h6>Bangladesh</h6>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="footer_box">
                           <ul class="footer_opt">
                            <h3>Useful Links</h3>
                            <li><a href="paper_submit.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Paper Submit</a></li>
                            <li><a href="https://www.msn.com/en-us/weather/today/dhakadhakabangladesh/we-city?q=dhaka&form=PRWLAS&iso=BD&el=erUH%2fhfJrrB2dnzg9uWGfg%3d%3d"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Weather News</a></li>
                            <li><a href="course.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Courses</a></li>
                            <li><a href="http://www.du.ac.bd/home"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;DU Website</a></li>
                            <li><a href="faculty.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Faculty</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;FAQ</a></li>
                        </ul>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer_box">
                           <ul class="footer_opt">
                            <h3>About Us</h3>
                            <p>LIVE AS IF YOU WERE TO DIE TOMORROW. LEARN AS IF YOU WERE TO LIVE FOREVER.</p>
                            <h3>Follow Us</h3>
                            <ul class="follow">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC6ZtMh7TinZHymePbdkWJUQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
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
                    <div class="col-sm-6">
                       <div class="copy_right text-left">
                            <p>Copyright © 2018 Department of Meteorology | All Rights Reserved</p>
                       </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="prepared text-right">
                            <p>Prepared By: Md. Fajael Ibne Bashar & Arafat Ahmed Tanim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button class="top hidden-xs"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
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
    <script src="client/js/contact.js"></script>
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
    <script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.728421, lng: 90.397978},
          zoom: 14,
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#165c64"},{"saturation":34},{"lightness":-69},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#b7caaa"},{"saturation":-14},{"lightness":-18},{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#cbdac1"},{"saturation":-6},{"lightness":-9},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#8d9b83"},{"saturation":-89},{"lightness":-12},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#d4dad0"},{"saturation":-88},{"lightness":54},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-3},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-26},{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"hue":"#c17118"},{"saturation":61},{"lightness":-45},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#8ba975"},{"saturation":-46},{"lightness":-28},{"visibility":"on"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"hue":"#a43218"},{"saturation":74},{"lightness":-51},{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#3a3935"},{"saturation":5},{"lightness":-57},{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"hue":"#cba923"},{"saturation":50},{"lightness":-46},{"visibility":"on"}]}]

        });
          
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(23.728421, 90.397978),
              map: map,
              title: 'Snazzy!'
          });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzjedmSjbzeg4Xfu-GyNBziZI8lRkqE9A&callback=initMap"
    async defer></script>
</body>
</html>