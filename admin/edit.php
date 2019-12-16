
<?php 
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();
$login = Session::get('login');
if ($login == false) {
 header("Location:../signin.php");
}

$id = Session::get('AdminId');
include_once $filepath."/../lib/Database.php";
$db = new Database;

?>
<?php
include_once $filepath."/../class/Register.php";
$rg = new Register();

if (!isset($_GET['infoid']) || ($_GET['infoid']) == NULL) {
  echo "<script> window.location='index.php'</script>";
} else {
  $id = $_GET['infoid'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/main.js"></script>  
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
                $information = $rg->editinfo($id);
                if ($information) {
                  
                 ?>
                 <form action="" method="post" enctype="multipart/form-data" id="edit" data-url="../ajax/registration.php?id=<?php echo $information->id ?>" >

                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="full_name_bangla">Full Name(Bangla)*</label>
                        <input type="text" id="full_name_bangla" class="form-control" name="full_name_bangla" value="<?php echo $information->full_name_bangla ?>"  >
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="full_name_english">Full Name(English)*</label>
                        <input type="text" id="full_name_english" class="form-control" name="full_name_english" placeholder="Full name" value="<?php echo $information->full_name_bangla ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="present_address">Present Address*</label>
                        <textarea id="present_address" class="form-control" name="present_address"><?php echo $information->present_address ?></textarea>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="permanent_address" required>Permanent Address*</label>
                        <textarea id="permanent_address" class="form-control" name="permanent_address"><?php echo $information->permanent_address?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="user_profile_picture">Profile Picture*</label>
                        <input type="file" id="user_profile_picture" class="form-control" name="user_profile_picture" value="<?php echo $information->user_profile_picture?>">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cell_number">Cell Number*</label>
                        <input id="cell_number" class="form-control" name="cell_number" value="<?php echo $information->cell_number?>"> 
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">              
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $information->email?>" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="occupation">Occupation*</label>
                        <input type="text" id="occupation" class="form-control" name="occupation" placeholder="Occupation" value="<?php echo $information->occupation?>" >
                      </div>
                    </div>
                  </div> 


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="designation">Designation*</label>
                        <input type="text" id="designation" class="form-control" name="designation" value="<?php echo $information->designation?>" >
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="office_name">Name of institution*</label>
                        <input type="text" id="office_name" class="form-control" name="office_name" value="<?php echo $information->office_name?>" >
                      </div>
                    </div>
                  </div>           
                  
                  
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name_of_degree">Name of degree*</label>
                        <select name="name_of_degree" id="name_of_degree" class="form-control">
                          <option value="MPhil">MPhil</option>
                          <option value="PHD">PHD</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="topic_of_research">Research title</label>
                        <input type="text" class="form-control" name="topic_of_research" id="topic_of_research" placeholder="Research Title" value="<?php echo $information->topic_of_research?>" >
                      </div>
                    </div>

                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="session">Session*</label>
                      <select name="session" id="session" class="form-control" >
                        <option value>Select</option>
                        
                        
                        
                        <option value="1974-1975">1974-1975</option>
                        
                        
                        
                        <option value="1975-1976">1975-1976</option>
                        
                        
                        
                        <option value="1976-1977">1976-1977</option>
                        
                        
                        
                        <option value="1977-1978">1977-1978</option>
                        
                        
                        
                        <option value="1978-1979">1978-1979</option>
                        
                        
                        
                        <option value="1979-1980">1979-1980</option>
                        
                        
                        
                        <option value="1980-1981">1980-1981</option>
                        
                        
                        
                        <option value="1981-1982">1981-1982</option>
                        
                        
                        
                        <option value="1982-1983">1982-1983</option>
                        <option value="1983-1984">1983-1984</option>
                        <option value="1984-1985">1984-1985</option>
                        <option value="1985-1986">1985-1986</option>
                        <option value="1986-1987">1986-1987</option>
                        <option value="1987-1988">1987-1988</option>
                        <option value="1988-1989">1988-1989</option>
                        <option value="1989-1990">1989-1990</option>
                        <option value="1990-1991">1990-1991</option>
                        <option value="1991-1992">1991-1992</option>
                        <option value="1992-1993">1992-1993</option>
                        <option value="1993-1994">1993-1994</option>
                        <option value="1994-1995">1994-1995</option>
                        <option value="1995-1996">1995-1996</option>
                        <option value="1996-1997">1996-1997</option>
                        <option value="1997-1998">1997-1998</option>
                        <option value="1998-1999">1998-1999</option>
                        <option value="1999-2000">1999-2000</option>
                        <option value="2000-2001">2000-2001</option>
                        <option value="2001-2002">2001-2002</option>
                        <option value="2002-2003">2002-2003</option>
                        <option value="2003-2004">2003-2004</option>
                        <option value="2004-2005">2004-2005</option>
                        <option value="2005-2006">2005-2006</option>
                        <option value="2006-2007">2006-2007</option>
                        <option value="2007-2008">2007-2008</option>
                        <option value="2008-2009">2008-2009</option>
                        <option value="2009-2010">2009-2010</option>
                        <option value="2010-2011">2010-2011</option>
                        <option value="2011-2012">2011-2012</option>
                        <option value="2012-2013">2012-2013</option>
                        <option value="2013-2014">2013-2014</option>
                        <option value="2014-2015">2014-2015</option>
                        <option value="2015-2016">2015-2016</option>
                        <option value="2016-2017">2016-2017</option>
                        <option value="2017-2018">2017-2018</option>
                        <option value="2018-2019">2018-2019</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name_of_superviser">Name of superviser</label>
                        <input type="text" class="form-control" name="name_of_superviser" id="name_of_superviser"  value="<?php echo $information->name_of_superviser?>" >
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="crest">Recived Crest in previous convention?*</label>
                        <select name="crest" id="crest" class="form-control" >
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="recived_awarde">Awards</label>
                        <input type="text" name="recived_awarde" id="recived_awarde" class="form-control" value="<?php echo $information->recived_awarde?>">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="number_of_publication">Number of articles*</label>
                        <input type="text" name="number_of_publication" id="number_of_publication" value="<?php echo $information->number_of_publication?>" class="form-control"  >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="number_of_article">Number of books*</label>
                        <input type="text" name="number_of_article" id="number_of_article" value="<?php echo $information->number_of_article?>" class="form-control"  >
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="list_of_publication">List of articles</label>
                        <textarea id="list_of_publication" class="form-control" name="list_of_publication"><?php echo $information->list_of_publication?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="list_of_books">List of books</label>
                        <textarea name="list_of_books" id="list_of_books" class="form-control"><?php echo $information->list_of_books?>
                      </textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="signup">Update</button>
                
              </form>
            <?php } ?>
            
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
