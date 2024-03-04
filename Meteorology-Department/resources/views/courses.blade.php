<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          <a href="#" class="logo">
            <span class="logo-mini"><b>D</b>N</span>
            <span class="logo-lg"><b>Department</b>Name</span>
          </a>
          <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="user-header">
                      <p>
                        {{ Auth::user()->name }} - Admin
                        <small>Member since {{ Auth::user()->created_at }}</small>
                      </p>
                      <div>
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <!-- /.row -->
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
              </ul>
            </div>
          </nav>
        </header>



        <aside class="main-sidebar">
            <section class="sidebar">
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                
                <!--Dashboard-->
                <li class=>
                  <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>

                <!--Faculty-->
                <li class="">
                  <a href="{{ url('/faculty') }}">
                    <i class="fa fa-edit"></i> <span>Faculty</span>
                  </a>
                </li>

                <li class="">
                  <a href="{{ url('/staff') }}">
                    <i class="fa fa-edit"></i> <span>Staff</span>
                  </a>
                </li>

                <!--Courses-->
                <li class="active">
                  <a href="{{ url('/courses') }}">
                    <i class="fa fa-tasks"></i>
                    <span>Course</span>
                  </a>
                </li>

                <!--Department Library-->
                <li>
                  <a href="{{ url('/departmentlibrary') }}">
                    <i class="fa fa-bank"></i> <span>Department Library</span>
                  </a>
                </li>

                <!--Google Schooler-->
                <li class="">
                  <a href="{{ url('/paper') }}">
                    <i class="fa fa-pie-chart"></i>
                    <span>Google Schooler</span>
                  </a>
                </li>

                <!--Pdf Book-->
                <li class="">
                  <a href="{{ url('/book') }}">
                    <i class="fa fa-book"></i>
                    <span>PDF Books</span>
                  </a>
                </li>

                <li class="">
                  <a href="{{ url('/video') }}">
                    <i class="fa fa-book"></i>
                    <span>Video</span>
                  </a>
                </li>

                <!--Notice-->
                <li class="">
                  <a href="{{ url('/notice') }}">
                    <i class="fa fa-edit"></i>
                    <span>Notice</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/event') }}">
                    <i class="fa fa-edit"></i> <span>Event</span>
                  </a>
                </li>
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>



          <div class="content-wrapper">

            <section class="content-header">
              <h1>
                Course
              </h1>
              <button type="button" id="btn_add" name="btn_add" class="btn btn-info btn-sm"><i class="fa fa-save"></i></button>
            </section>

            <div class="row">
              <section class="col-lg-6 connectedSortable">
                <div class="box box-info">
                  <div class="box-header">
                    <i class="  fa fa-tasks"></i>
                    <h3 class="box-title">Term : 1 Theory</h3>
                    <div class="pull-right box-tools">
                      
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>                    
                    </div>
                  
                  <div class="box-body"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        
                          <th>Title</th>
                          <th>Name</th>
                          <th>Credit</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                         
                      <tbody id="courses-list" name="courses-list">
                        @foreach ($courses as $course)
                         @if($course->type=="Theory" && $course->term==1)
                        <tr id="course{{$course->id}}">
                          
                          <td>{{$course->title}}</td>
                          <td>{{$course->name}}</td>
                          <td>{{$course->credit}}</td>
                          
                          <td>
                            <button class="btn btn-warning btn-detail open_modal" value="{{$course->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-delete delete-course" value="{{$course->id}}"><i class="fa fa-trash"></i> </button>
                          </td>
                        </tr>
                         @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
            

              <section class="col-lg-6 connectedSortable">
                <div class="box box-info">
                  <div class="box-header">
                    <i class="  fa fa-tasks"></i>
                    <h3 class="box-title">Term : 1 Practical</h3>
                    <div class="pull-right box-tools">                  
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>                    
                    </div>
                  </div>
                  
                  <div class="box-body"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>Title</th>
                          <th>Name</th>
                          <th>Credit</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                         
                      <tbody id="courses-list" name="courses-list">
                        @foreach ($courses as $course)
                         @if($course->type=="Practical"  && $course->term==1)
                        <tr id="course{{$course->id}}">
                          
                          <td>{{$course->title}}</td>
                          <td>{{$course->name}}</td>
                          <td>{{$course->credit}}</td>
                          
                          <td>
                            <button class="btn btn-warning btn-detail open_modal" value="{{$course->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-delete delete-course" value="{{$course->id}}"><i class="fa fa-trash"></i> </button>
                          </td>
                        </tr>
                         @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
            </div>


            <div class="row">
              <section class="col-lg-6 connectedSortable">
                <div class="box box-info">
                  <div class="box-header">
                    <i class="fa fa-tasks"></i>
                    <h3 class="box-title">Term : 2 Theory</h3>
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>           
                    </div> 
                  </div>
                  
                  <div class="box-body"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Name</th>
                          <th>Credit</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                         
                      <tbody id="courses-list" name="courses-list">
                        @foreach ($courses as $course)
                         @if($course->type=="Theory" && $course->term==2)
                        <tr id="course{{$course->id}}">
                          
                          <td>{{$course->title}}</td>
                          <td>{{$course->name}}</td>
                          <td>{{$course->credit}}</td>
                          
                          <td>
                            <button class="btn btn-warning btn-detail open_modal" value="{{$course->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-delete delete-course" value="{{$course->id}}"><i class="fa fa-trash"></i> </button>
                          </td>
                        </tr>
                         @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
            

              <section class="col-lg-6 connectedSortable">
                <div class="box box-info">
                  <div class="box-header">
                    <i class="fa fa-tasks"></i>
                    <h3 class="box-title">Term : 2 Practical</h3>
                    <div class="pull-right box-tools">                     
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>  
                  </div>
                  
                  <div class="box-body"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>Title</th>
                          <th>Name</th>
                          <th>Credit</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                         
                      <tbody id="courses-list" name="courses-list">
                        @foreach ($courses as $course)
                         @if($course->type=="Practical"  && $course->term==2)
                        <tr id="course{{$course->id}}">
                          
                          <td>{{$course->title}}</td>
                          <td>{{$course->name}}</td>
                          <td>{{$course->credit}}</td>
                          
                          <td>
                            <button class="btn btn-warning btn-detail open_modal" value="{{$course->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-delete delete-course" value="{{$course->id}}"><i class="fa fa-trash"></i> </button>
                          </td>
                        </tr>
                         @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
            </div>






              
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Course</h4>
                    </div>
                    <div class="modal-body">

                      <form id="frmCourses" name="frmCourses" class="form-horizontal" novalidate="">
                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Term</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="term" name="term" placeholder="Term" value="">
                              <option>1</option>
                              <option>2</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="type" name="type" placeholder="type" value="">
                              <option>Theory</option>
                              <option>Practical</option>
                            </select>
                          </div>
                        </div>
                      
                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="title" name="title" placeholder="Title" value="">
                          </div>
                        </div>

                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="name" name="name" placeholder="Name" value="">
                          </div>
                        </div>
                 
                        <div class="form-group">
                          <label for="inputDetail" class="col-sm-3 control-label">Credit</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="credit" name="credit" placeholder="Credit" value="">
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                      <input type="hidden" id="course_id" name="course_id" value="0">
                    </div>
                  </div>
                </div>
              </div>
            
        </div>
        <meta name="_token" content="{!! csrf_token() !!}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
        <script src="{{asset('js/ajaxscript.js')}}"></script>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>

      </body>
</html>