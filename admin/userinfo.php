
<?php 
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();
$id = Session::get('AdminId');
include_once $filepath."/../lib/Database.php";
$db = new Database;
define ('SITE_ROOT', realpath(dirname(__FILE__)));
?>
<?php
$login = Session::get('login');
if ($login == false) {
 header("Location:../signin.php");
}
?>
<?php 
if (isset($_GET['action'])) {
  Session::destroy();
  header('location:../signin.php');
}
?>
<?php 
  /*$filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../class/Register.php');
 */
  ?>
  <!DOCTYPE html>
  <html lang="en">


  <!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Salt Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="node_modules/rickshaw/rickshaw.min.css" />
    <link rel="stylesheet" href="bower_components/chartist/dist/chartist.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.html" />
  </head>
  <body class="sidebar-dark">
    <!-- partial:partials/_settings-panel.html -->
    <div class="settings-panel">
      <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
        </li>
      </ul>
      <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
          <div class="color-tiles">
            <div class="tiles primary" id="primary-theme"></div>
            <div class="tiles success" id="success-theme"></div>
            <div class="tiles warning" id="warning-theme"></div>
            <div class="tiles danger" id="danger-theme"></div>
            <div class="tiles pink" id="pink-theme"></div>
            <div class="tiles info" id="info-theme"></div>
            <div class="tiles dark" id="dark-theme"></div>
            <div class="tiles light" id="light-theme"></div>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sidebar Mode
            </button>
            <div class="dropdown-menu" aria-labelledby="sidebar-color">
              <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
              <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
            </div>
          </div>
          <div class="dropdown d-none d-md-block">
            <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Layouts
            </button>
            <div class="dropdown-menu" aria-labelledby="Layouts-type">
              <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
              <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
              <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
              <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
              <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
              <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
            </div>
          </div>
        </div>
        <!-- layout section tabends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
          <ul class="chat-list">
            <li class="list active">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
            <li class="list">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
            <li class="list">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
            <li class="list">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
            <li class="list">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
            <li class="list">
              <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
            </li>
          </ul>
        </div>
        <!-- chat section tabends -->
      </div>
    </div>
    <!-- partial -->
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/salt_logo.svg" alt="Logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="btn-group d-none d-sm-block">
            <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
            <div class="input-group solid">
              <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
              <input type="text" class="form-control">
            </div>
          </form>
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count bg-warning">7</span>
              </a>
              <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fa fa-birthday-cake text-success fa-fw"></i>
                  <span class="notification-text">Today is John's birthday</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-phone text-danger fa-fw"></i>
                  <span class="notification-text">Call John Doe</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-handshake-o text-primary fa-fw"></i>
                  <span class="notification-text">Meeting Alisa</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-exclamation-triangle text-danger fa-fw"></i>
                  <span class="notification-text">Server space almost full</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-bell text-warning fa-fw"></i>
                  <span class="notification-text">Payment Due</span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-message-outline"></i>
                <span class="count bg-danger">4</span>
              </a>
              <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
                <a class="dropdown-item" href="#">
                  <div class="sender-img">
                    <img src="http://via.placeholder.com/47x47" alt="">
                    <span class="badge badge-success">&nbsp;</span>
                  </div>
                  <div class="sender">
                    <p class="Sende-name">John Doe</p>
                    <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="sender-img">
                    <img src="http://via.placeholder.com/47x47" alt="">
                    <span class="badge badge-success">&nbsp;</span>
                  </div>
                  <div class="sender">
                    <p class="Sende-name">Leanne Jones</p>
                    <p class="Sender-message">Can we schedule a call this afternoon?</p>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="sender-img">
                    <img src="http://via.placeholder.com/47x47" alt="">
                    <span class="badge badge-primary">&nbsp;</span>
                  </div>
                  <div class="sender">
                    <p class="Sende-name">Stella</p>
                    <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="sender-img">
                    <img src="http://via.placeholder.com/47x47" alt="">
                    <span class="badge badge-warning">&nbsp;</span>
                  </div>
                  <div class="sender">
                    <p class="Sende-name">James Brown</p>
                    <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                  </div>
                </a>
                <a href="#" class="dropdown-item view-all">View all</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-info">
              <div class="">
                 <img src="../<?php echo Session::get('image');?>" class="rounded" alt="Cinque Terre" width="70">
              </div>
              <div class="details">
               <p class="user-name"><?php echo Session::get('user_name');?></p>
                
              </div>
            </div>
            <ul class="nav">
              <!--main pages start-->
              <li class="nav-item nav-category">
                <span class="nav-link">Main</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-gauge menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
                <?php 
                  if(Session::get('permision')==1){
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="all_member.php">
                    <i class="mdi mdi-gauge menu-icon"></i>
                    <span class="menu-title">Member List</span>
                  </a>
                </li>
              <?php } ?>
              <li class="nav-item">
                <a class="nav-link" href="userinfo.php">
                  <i class="mdi mdi-puzzle menu-icon"></i>
                  <span class="menu-title">Information</span>
                </a>
              </li>
             

              <li class="nav-item">
                <a class="nav-link" href="?action=logout">
                  <i class="mdi mdi-gauge menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <?php
                if ($id) {
                  $query = "Select * from registration where id='$id'";
                  $result= $db->select($query);
                  $data = $result->fetch_object();
                }
                ?>
                <div class="card">
                  <div class="card-body bg-info">
                    <h2 class="text-center"><?php echo $data->full_name_english?> Information</h2>
                    <img class="rounded mx-auto d-block" src="../<?php echo $data->user_profile_picture; ?>" width="80" alt="photo">
                  </div>
                </div>
                <table class="table">       
                 <tbody>
                   <tr>
                     <td>Full Name(Bangla)</td>
                     <td><?php echo $data->full_name_bangla; ?></td>
                   </tr>
                   <tr>
                     <td>Full Name(English)</td>
                     <td><?php echo $data->full_name_english; ?></td>
                   </tr>
                   <tr>
                     <td>Present Address</td>
                     <td><?php echo $data->present_address; ?></td>
                   </tr>
                   <tr>
                     <td>Permanent Address</td>
                     <td><?php echo $data->permanent_address; ?></td>
                   </tr>
                   <tr>
                     <td>Cell Number</td>
                     <td><?php echo $data->cell_number; ?></td>
                   </tr>
                   <tr>
                     <td>Email</td>
                     <td><?php echo $data->email; ?></td>
                   </tr>
                   <tr>
                     <td>Occupation</td>
                     <td><?php echo $data->occupation; ?></td>
                   </tr>
                   <tr>
                     <td>Designation</td>
                     <td><?php echo $data->designation; ?></td>
                   </tr>
                   <tr>
                     <td>Name of institution</td>
                     <td><?php echo $data->office_name; ?></td>
                   </tr>
                   <tr>
                     <td>Name of degree</td>
                     <td><?php echo $data->name_of_degree; ?></td>
                   </tr>
                   <tr>
                     <td>Research title</td>
                     <td><?php echo $data->topic_of_research; ?></td>
                   </tr>
                   <tr>
                     <td>Session</td>
                     <td><?php echo $data->session; ?></td>
                   </tr>
                   <tr>
                     <td>Year of award</td>
                     <td><?php echo $data->awarded; ?></td>
                   </tr>
                   <tr>
                     <td>Name of superviser</td>
                     <td><?php echo $data->name_of_superviser; ?></td>
                   </tr>
                   <tr>
                     <td>Recived Crest</td>
                     <td><?php echo $data->crest; ?></td>
                   </tr>
                   <tr>
                     <td>Awards</td>
                     <td><?php echo $data->recived_awarde; ?></td>
                   </tr>
                   <tr>
                     <td>Number of articles</td>
                     <td><?php echo $data->number_of_publication; ?></td>
                   </tr>
                   <tr>
                     <td>Number of books</td>
                     <td><?php echo $data->number_of_article; ?></td>
                   </tr>
                   <tr>
                     <td>List of articles</td>
                     <td><?php echo $data->list_of_publication; ?></td>
                   </tr>
                   <tr>
                     <td>List of books</td>
                     <td><?php echo $data->list_of_books; ?></td>
                   </tr>
                   <tr>
                     <td>Total To Be Paid</td>
                     <td><?php echo $data->total_to_be_paid; ?></td>
                   </tr>
                   <tr>
                     <td>Payment Type</td>
                     <td><?php echo $data->payment_type; ?></td>
                   </tr>
                   <tr>
                     <td>Transiction Id/Reference Id</td>
                     <td><?php echo $data->ref_id; ?></td>
                   </tr>
                   <tr>
                     <td></td>
                     <td><a href="edit.php?infoid=<?php echo $data->id?> " class="btn btn-sm btn-success">Edit Profoile</a></td>
                   </tr>

                 </tbody>
               </table>
             </div>
           </div>
         </div>        
       </div>
     </div>
   </div>
   <!-- content-wrapper ends -->
   <!-- partial:partials/_footer.html -->
   <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="float-right">
        <a href="#">Salt Admin</a> &copy; 2017
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- row-offcanvas ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="node_modules/flot/jquery.flot.js"></script>
<script src="node_modules/flot/jquery.flot.resize.js"></script>
<script src="node_modules/flot/jquery.flot.categories.js"></script>
<script src="node_modules/flot/jquery.flot.pie.js"></script>
<script src="node_modules/rickshaw/vendor/d3.v3.js"></script>
<script src="node_modules/rickshaw/rickshaw.min.js"></script>
<script src="bower_components/chartist/dist/chartist.min.js"></script>
<script src="node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/settings.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard_1.js"></script>
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
