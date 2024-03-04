<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event</title>
    <link rel="stylesheet" href="client/css/bootstrap.min.css">
    <link rel="stylesheet" href="client/css/font-awesome.min.css">
    <link rel="stylesheet" href="client/css/slick.css">
    <link rel="stylesheet" href="client/css/owl.carousel.css">
    <link rel="stylesheet" href="client/css/animate.min.css">
    <link rel="shortcut icon" type="client/img/icon" href="client/images/icon_2.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karma:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="client/css/event.css">
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
            <div class="du_logo hidde-xs hidden-sm">
                <a href="#"><img src="images/icon_2.png" height="52" width="35" alt=""></a>
            </div>
             </div>
            </div>
         </div>
         <!--end of menu-->
         <div class="banner_heading text-center">
             <h3>EVENT</h3>
         </div>
      </div>
   </section>
   <!--end of banner-->
  <section id="event">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col col-sm-12 col-md-12">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach ($events as $event)
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="{{$event->id}}">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$event->id}}" aria-expanded="true" aria-controls="collapse{{$event->id}}">
                    {{$event->heading}}
                  </a>
                </h4>
              </div>
              
              <div id="collapse{{$event->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="{{$event->id}}">
                <div class="panel-body event_text">
                  <div class="event_banner_img">
                    <img src="/uploads/image/{{$event->image}}" class="img-responsive" alt="">
                  </div>
                  <ul>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{$event->date}}</li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{$event->place}}</li>
                  </ul>
                  <p>{{$event->body}}</p>
                  <div class="row">
                    <div class="sponsor text-center">
                      <h4>SPONSORED BY</h4>
                      @foreach($sponsers as $sponser)
                        @if( $event->id==$sponser->sponser_id)
                        <div class="col-xs-6 col-sm-3 brand"><img src="/images/{{$sponser->filename}}" class="img-responsive" height="100" width="150" alt="sp"></div>
                        @endif  
                      @endforeach 
                      </div>
                    </div>






                    
                    <div class="row">
                      <div class="accomodation text-center text-uppercase">
                        <h4>Nearby Accommodation</h4>
                          <div class="col-xs-6 col-sm-3 accom">
                            <a href="https://www.panpacific.com" target="_blank"><img src="client/images/hotel1.jpg" class="img-responsive" alt="sp"></a>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                                 
                          <div class="col-xs-6 col-sm-3 accom">
                            <a href="http://www.ruposhibanglahotel.com" target="_blank"><img src="client/images/hotel2.jpg" class="img-responsive" alt="sp"></a>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                                 
                          <div class="col-xs-6 col-sm-3 accom">
                            <a href="http://www.farshotelbd.com" target="_blank"><img src="client/images/hotel3.jpg" class="img-responsive" alt="sp"></a>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                                 
                          <div class="col-xs-6 col-sm-3 accom">
                            <a href="https://www.hotel71.com.bd" target="_blank"><img src="client/images/hotel4.jpg" class="img-responsive" alt="sp"></a>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>




            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6">
                   <div class="message">
                        <h3>Get Registered Now</h3>
                        {!! Form::open(['url' => '/c_event', 'method' => 'post', 'files' => 'false']) !!}                          
                          <div class="dd">
                              <input type="text" name="eve_mem_name" id="eve_mem_name" class="name" placeholder="Your Name"> 
                           </div>
                           <div class="dd">
                              <input type="text" name="eve_mem_designation" id="eve_mem_designation" class="name" placeholder="Your Designation"> 
                           </div>
                           <div class="dd">
                              <input type="text" name="eve_mem_institute" id="eve_mem_institute" class="name" placeholder="Name of Your Institution"> 
                           </div>
                            <div class="jj">
                               <input type="text" name="eve_mem_country" id="eve_mem_country" class="name" placeholder="Your Country"> 
                            </div>
                            <div class="ff">
                               <input type="email" name="eve_mem_mail" id="eve_mem_mail" class="name" placeholder="Your Email"> 
                            </div>
                            <button type="submit" class="btn btn-primary name" id="btn-save" value="add">Save changes</button>
                      <input type="hidden" id="event_id" name="event_id" value="{{$event->id}}">
                        {!! Form::close() !!}
                        
                    </div>
               </div>
           </div>


                  </div>
                </div>
              </div>
              @endforeach             
                    </div>
               </div>
           </div>
       </div>
   </section>
   <!--end of main event-->
   <section id="marquee">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 cl">
                   <div class="main_marquee">
                       <div class="col-xs-12 col-sm-6 col-md-3">
                         <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event1.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event2.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event3.JPG" class="img-responsive" height="150" width="100%" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event4.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-3">
                           <div class="event_whole">
                             <div class="event_img">
                              <img src="event_images/event5.JPG" class="img-responsive" alt="mar">
                          </div>
                          <div class="event_img_caption">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius voluptatibus, velit libero adipisci dolorum, nobis sint, ullam nemo ipsa qui, quas doloribus accusamus! Temporibus expedita rerum velit dolorum aliquid.</p>
                          </div>
                         </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--end of marquee-->

   <!--end of registration-->
   <section id="full_footer">
        <div class="full_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs hidden-sm">
                       <div class="logo">
                           <a href=""><img src="images/icon_1.png" alt="logo"></a>
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
    <script src="client/js/event.js"></script>
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