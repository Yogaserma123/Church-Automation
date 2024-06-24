<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PROFILE PAGE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
                    
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Family Members</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('family')}}">New Family</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('edit')}}">Edit/Delete</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('report')}}">Family Report</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Attandance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('attendanceentry')}}">Entry Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('attendancedelete')}}">Edit/Delete</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">EVENTS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('event_entry')}}">New Entry</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('event_list')}}">Edit/Delete</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('event_report')}}">Weekly/Monthly</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Receipt</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('blank')}}">New Receipt</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('404')}}">Report</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Voucher</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('500')}}">New Voucher</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('login')}}">Edit/Delete</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">DayBook</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('register')}}"> Register </a></li>
                </ul>
            </div>
          </li>          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Family Entry Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">                                            
                                          <label class="col-sm-2 col-form-label">Family No:</label>
                                            <div class="col-sm-2">

  

                                                <input type="text" class="form-control" id='fh1' placeholder="" value="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Head Name</label>
                                            <div class="col-sm-2">
                                                <input type="text"  id="fh2" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Family Photo:</label>
                                            <div class="col-sm-2">
                      <input type="file" class="form-control" placeholder="" id="fh3">  
                      <br>                    
                                            </div>                                         
                                            <div class="col-sm-2">                                             
                      <button type="button" id="btn_next" class="btn btn-primary" style="float:right;">ADD NEW</button>    

                      </div>                                                                                                            
                                          </div><br><br>
                    
                                          <div class="form-row">                                            
                                           <label class="col-sm-2 col-form-label">SL.No:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" placeholder="" id="fa1" name="slno">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Name </label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" placeholder="" id="fa2">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Gender</label>
                      <div class="col-sm-2">
                                                <input type="radio" id="fa3" value="Male" name="h1" class=""> Male    
                                                <br>
                                                <input type="radio" id="fa3" value="Female" name="h1" class=""> Female
                                            </div>                                                                                                                                                                
                                        </div><br>


                    <div class="form-row">                                            
                                          <label class="col-sm-2 col-form-label">Relation:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="fa4" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Occupation:</label>
                                            <div class="col-sm-2">
                                                <input type="text"  id="fa5" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">DOB:</label>
                                            <div class="col-sm-2">
                                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="fa6" placeholder="">
                                            </div>                                                                                                                                                              
                                        </div>   
                                        <br>
                                        <div class="form-row">                                            
                                          <label class="col-sm-2 col-form-label">Marriage.Date:</label>
                                            <div class="col-sm-2">
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="fa7" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Baptism.Date:</label>
                                            <div class="col-sm-2"> 
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="fa8" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Mobile:</label>
                                            <div class="col-sm-2">
                                            <input type="text" id="fa9" class="form-control" placeholder="">
                                            </div>                                                                                                                                                              
                                        </div>    
                                        <br>
                                        <div class="form-row">                                            
                                          <label class="col-sm-2 col-form-label">Aadhaar No:</label>
                                            <div class="col-sm-2">
                                                <input type="text" id="fa10" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Joining.Date:</label>
                                            <div class="col-sm-2">
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="fa11" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Status:</label>
                                            <div class="col-sm-2">
                                           <select name="" class="form-control" id="fa12">
                      <option value="y">Y</option>
                      <option value="m">M</option>
                      <option value="c">C</option></select>
                                            </div>                                               
                                        </div>    

                                        <br>
                                        <div class="form-row">                                            
                                          <label class="col-sm-2 col-form-label">Are you saved?</label>
                                            <div class="col-sm-2">
                                                <input type="radio" id="fa13" name="a1" value="Yes" class=""> Yes    
                                                <input type="radio" id="fa13" name="a1" value="No" class=""> No
                                            </div>
                                            <label class="col-sm-2 col-form-label">Photo:</label>
                                            <div class="col-sm-2">
                                                <input type="file" id="fa14" class="form-control" placeholder="">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Street:</label>
                                            <div class="col-sm-2">
                                            <input type="text" id="fa15" class="form-control" placeholder="">
                                            </div> 
                                   <br>

                       
                      <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Family Member</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px" border="2">
                                        <thead>
                                            <tr>
                        <th>#</th>
                                                <!-- <th>F.No</th> -->
                                                <th>Sl.No</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Relation</th>
                                                <th>Occupation</th>
                        <th>DOB</th>
                                                <th>Marriage</th>
                                                <th>Batism</th> 
                                                <th>Mobile</th>
                                                <th>Aadhaar</th>
                                                <th>Joining</th>
                        <th>Status</th>
                                                <th>Saved</th>
                                                <th>Photo</th>                                                
                                                <th>Street</th>
                                                <!-- <th>REMARKS</th> -->
                                                <!-- <th>ACTION</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                      </tr>
                                        </tbody>
                                    </table>
                                </div>
                
                <br>
                <a href=""><button  style="float:right;" type="button" class="btn btn-success" id="btnconfirm">CONFIRM</button></a>
                    

                            </div>
                        </div>
          </div>
                    </form>

                                </div>
                            </div>
                        </div>
          </div>
                </div>
            </div>
        </div>
                         
   
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <script>
         $(document).ready(function(){
      // alert("page load");
             $("#btn_next").click(function(){
        // alert("17 columns");
                 var fa1 = $("#fa1").val(); //slno
         var fa2 = $("#fa2").val(); //name
         var fa3 =  $("input[name='h1']:checked").val();  //    gender   
                 var fa4 = $("#fa4").val();//relationship
         var fa5 = $("#fa5").val(); //occupation
         var fa6 =  $("#fa6").val();//dob      
                 var fa7 = $("#fa7").val();//marriagedate
         var fa8 = $("#fa8").val();//baptism
         var fa9 =  $("#fa9").val(); //mobile    
         var fa10 = $("#fa10").val();//aadhaar no
         var fa11 =  $("#fa11").val(); //joining date      
                 var fa12 = $("#fa12").val(); //status
         var fa13 = $("input[name='a1']:checked").val(); // are you saved   
         var fa14 =  $("#fa14").val();  //photo
         var fa15 =  $("#fa15").val();  //street
        //  var fa14 =  $("#fa14").val();                        
        var row_data = "<tr><td id='td_delete'><div class='d-flex'><a style='cursor:pointer;color:white;' class='btn btn-primary shadow btn-xs sharp mr-1'>X</a></div></td><td class='faa1'>"+fa1+"</td><td class='faa2'>"+fa2+"</td><td class='faa3'>"+fa3+"</td><td class='faa4'>"+fa4+"</td><td class='faa5'>"+fa5+"</td><td class='faa6'>"+fa6+"</td><td class='faa7'>"+fa7+"</td><td class='faa8'>"+fa8+"</td><td class='faa9'>"+fa9+"</td><td class='faa10'>"+fa10+"</td><td class='faa11'>"+fa11+"</td><td class='faa12'>"+fa12+"</td><td class='faa13'>"+fa13+"</td><td class='faa14'>"+fa14+"</td><td class='faa15'>"+fa15+"</td></tr>"; 
        $("tbody").append(row_data);
        // alert("working fa14:"+fa14);       
        $("#fa1").val('');
        $("#fa2").val('');        
        $("#fa4").val('');
        $("#fa5").val('');
        $("#fa6").val('');  
        $("#fa7").val('');
        $("#fa8").val('');        
        $("#fa9").val('');
        $("#fa10").val('');
        $("#fa11").val('');                       
        $("#fa12").val('');
        $("#fa14").val('');
        $("#fa15").val(''); 

         
             });        
         });    
      </script>


<script>
$("table").on('click', '#td_delete', function() {
    var currentRow = $(this).closest("tr");
    // alert("DOE");
    if (confirm('Are you sure ?')) {
        $(this).closest("tr").remove();
    }
});
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){

      var fno = $("#fh1").val();
    var fh2 = $("#fh2").val();
    var fh3 = $("#fh3").val();    
      var faa1 = [];
      var faa2 = []; 
      var faa3 = [];
      var faa4 = [];
      var faa5 = []; 
      var faa6 = [];
      var faa7 = [];
      var faa8 = []; 
      var faa9 = [];
      var faa10 = [];
      var faa11 = []; 
      var faa12 = [];
      var faa13 = [];
      var faa14 = []; 
      var faa15 = [];               
      $(".faa1").each(function(){
        faa1.push($(this).text());
      });
      // alert(ar1);

      $(".faa2").each(function(){
        faa2.push($(this).text());
      });

      $(".faa3").each(function(){
        faa3.push($(this).text());
      });
      $(".faa4").each(function(){
        faa4.push($(this).text());
      });
      // alert(ar1);

      $(".faa5").each(function(){
        faa5.push($(this).text());
      });

      $(".faa6").each(function(){
        faa6.push($(this).text());
      });
      $(".faa7").each(function(){
        faa7.push($(this).text());
      });
      // alert(ar1);

      $(".faa8").each(function(){
        faa8.push($(this).text());
      });

      $(".faa9").each(function(){
        faa9.push($(this).text());
      });       
      $(".faa10").each(function(){
        faa10.push($(this).text());
      });
      // alert(ar1);

      $(".faa11").each(function(){
        faa11.push($(this).text());
      });

      $(".faa12").each(function(){
        faa12.push($(this).text());
      });  
      $(".faa13").each(function(){
        faa13.push($(this).text());
      });
      // alert(ar1);

      $(".faa14").each(function(){
        faa14.push($(this).text());
      });

      $(".faa15").each(function(){
        faa15.push($(this).text());
      });    
      alert("AJAX-1");
      $.ajax({
        url:"http://127.0.0.1:8000/family_insert",
        method:"GET",
        data:{fh2:fh2, fh3:fh3, fno:fno, faa1:faa1, faa2:faa2, faa3:faa3, faa4:faa4, faa5:faa5, faa6:faa6, faa7:faa7, faa8:faa8, faa9:faa9, faa10:faa10, faa11:faa11, faa12:faa12, faa13:faa13, faa14:faa14, faa15:faa15},
        success:function(response){
          alert("Ajax 2");
          window.location.href="{{route('goto_dropdown')}}"
        }
      });
      
    });
  });
</script>
  </body>
</html>