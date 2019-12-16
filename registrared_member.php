  
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Alumni Association :: IBS Rajshahi University</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
 <script src="https://use.fontawesome.com/c9761159b2.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 <link rel="stylesheet" href="//cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script src="js/main.js"></script>

</head>
<body>	
  <section >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">IBS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="registrared_member.php">নিবন্ধনকৃতদের তালিকা</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registration.php">নিবন্ধন করুন</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">যোগাযোগ করুন</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signin.php">লগইন করুন</a>
                </li>
              </ul>

              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <span style="color: rgba(0,0,0,.5); padding: 0 .5rem;"><i class="fa fa-envelope"></i> suppor@ibs.com</span>
                </li>
                <li class="nav-item">
                  <span style="color: rgba(0,0,0,.5); padding: 0 .5rem;"><i class="fa fa-phone"></i> 01750-00000000</span>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h3>All Members!</h3>
            </div>
            <div class="card-body">
              <table class="table"> 
                <thead>
                  <tr>
                    <th width="5%">id</th>
                    <th width="20%">Image</th>
                    <th width="15%">Name</th>
                    <th width="15%">Name Of Degree</th>
                    <th width="15%">Membership Type</th>
                    <th width="15%">Cell Number</th>
                    <th width="15%">Session</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php
                  $filepath = realpath(dirname(__FILE__));
                  include_once ($filepath.'/class/Register.php');
                  $rg = new Register();
                  $memberlist = $rg->MemberList();
                  if ($memberlist) {
                    $i=0;
                    while ($row = $memberlist->fetch_object()) {
                      $i++;
                      ?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><img src="<?php echo $row->user_profile_picture; ?>" alt="" width="70" height="50" ></td> 
                        <td><?php echo $row->full_name_english; ?>  </td>
                        <td><?php echo $row->name_of_degree; ?> </td>
                        <td><?php echo $row->checkboxlist; ?> </td>
                        <td><?php echo $row->cell_number; ?> </td>
                        <td><?php echo $row->session; ?> </td>
                      </tr>    
                    <?php } } ?>
                  </tbody> 
                </table>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>

    <section class="bg-primary" style="padding: 80px 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center; color: #fff; font-family: sans-serif;">&copy; 2019 IBS RU, Powered by Stack IT. All rights reserved</p>
          </div>
        </div>
      </div>
    </section>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#table_id').DataTable({
          responsive: true
        });
      } );
    </script>
    
    
  </body>
  </html>

