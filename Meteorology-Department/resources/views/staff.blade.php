  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
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
                      <div >
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                    <li class="user-body">
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>


        <aside class="main-sidebar">
            <section class="sidebar">
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                  <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>
                <li >
                  <a href="{{ url('/faculty') }}">
                    <i class="fa fa-edit"></i> <span>Faculty</span>
                  </a>
                </li>
                <li class="active">
                  <a href="{{ url('/staff') }}">
                    <i class="fa fa-edit"></i> <span>Staff</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/courses') }}">
                    <i class="fa fa-tasks"></i>
                    <span>Course</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/departmentlibrary') }}">
                    <i class="fa fa-bank"></i> <span>Department Library</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/paper') }}">
                    <i class="fa fa-pie-chart"></i>
                    <span>Google Schooler</span>
                  </a>
                </li>
                <li>
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
                <li>
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
          </aside>



          <div class="content-wrapper">

            <section class="content-header">
              <h1>
                Faculty Members:
              </h1>
              <button type="button" id="btn_add" name="btn_add" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i></button>
            </section>

            <div class="row">
              <section class="col-lg-12 connectedSortable">
                
                <div class="box box-info">
                  <div class="box-header" style="text-align: center">
                    <i class="fa fa-book"></i>
                    <h3 class="box-title">Our Staff</h3>
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  
                  <div class="box-body"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="text-align: center">Image</th>
                          <th style="text-align: center">About</th>
                        </tr>
                      </thead>                      
                      <tbody id="staffs-list" name="staffs-list">
                        @foreach ($staffs as $staff)
                        
                        <tr id="staff{{$staff->id}}" class="table-info">
                          <td style="text-align: center"><img class="" src="/uploads/image/{{$staff->image}}" style="height: 100px; width: 100px; border-radius:50% ; border: 4px solid #d9d9d9 "></td>
                          <td style="text-align: center">{{$staff->name}}</br>{{$staff->des}}</br></td>                     
                          <td style="text-align: center">
                            <button class="btn btn-danger btn-delete delete-staff" value="{{$staff->id}}"><i class="fa fa-trash"></i> </button>
                          </td>
                        </tr>
                                          
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
                        <h4 class="modal-title" id="myModalLabel">Teacher</h4>
                    </div>
                    <div class="modal-body">

                      <form id="frmStaff" name="frmStaff" class="form-horizontal" novalidate="">
                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Image</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control has-error" id="staff_image" name="image">
                          </div>
                        </div>

                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="staff_name" name="staff_name" placeholder="Name">
                          </div>
                        </div>


                        <div class="form-group error">
                          <label for="inputName" class="col-sm-3 control-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="staff_des" name="staff_des" placeholder="Designation">
                          </div>
                        </div>
                 
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                      <input type="hidden" id="staff_id" name="staff_id" value="0">
                    </div>
                  </div>
                </div>
              </div>


        </div>

        <meta name="_token" content="{!! csrf_token() !!}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
        <script src="{{asset('js/ajaxscriptstaff.js')}}"></script>
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