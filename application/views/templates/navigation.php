<?php
  /*$result   = getEmpInfo($_SESSION['id']);
  $row      = mysql_fetch_row($result);
  $name     = $row[2]." ".$row[4];*/
 ?>
<div class="container-fluid main-body">

    <!-- ============================== header & navigation ============================ -->
    <div class="row">
        <nav class="navbar nav-head" role="navigation" style="background-color:#561703">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <img class="img-logo" src="<?php echo base_url('assets/images/ico.jpg'); ?>" style="border-radius: 50px;box-shadow: 0px 0px 10px #FFF"><h2 class="hd-title"><a class="title" href="<?php echo base_url(); ?>">SILFS Management System</a></h2>
                    </div>
                </div>

                <!-- <div class="collapse navbar-collapse pull-right" id = "header1">
                    <ul class="nav navbar-nav top-sign navbar-right">
                        <li class="logout"><a href="/logout">Logout</a></li>
                    </ul>
                    <p class="navbar-text top-sign2 navbar-right">SY: &nbsp;&nbsp;&nbsp;&nbsp; Term:</p>
                  <p class="navbar-text top-sign2 navbar-right">Signed in as 
                      <a href="index.php?page=home" class="navbar-link"><?php //echo $_SESSION['uname']; ?></a>
                    </p>
                  <p class="navbar-text navbar-right">
                    <img src="<?php echo base_url('assets/images/sample.jpg'); ?>" alt="<?php //echo $name; ?>" class="img-rounded profile_pic">
                  </p>
                </div> -->
            </div>
        </nav>
    </div>
    
    <div class="row">
        <div class="col-md-3 side-bar-menu hidden-print">
            <div class="collapse navbar-collapse" >
                <div class="panel-heading" style="border-radius:0px"><h4><?php echo "Dashboard"?></h4></div>
                  <?php if ($this->session->userdata('position') == 1): ?>
                     <li class="list-group-item ">
                        <a class="menu <?= $nav == 'employee' ? 'active' : '' ?>" href="/add_employee">
                            <span class="glyphicon glyphicon-user"></span>&nbsp; &nbsp; Add Employee
                        </a>
                    </li>
                  <?php endif ?>        
                 
                  <li class="list-group-item ">
                      <a class="menu <?= $nav == 'add_announcement' ? 'active' : '' ?>" href="/add_announcement">
                          <span class="glyphicon glyphicon-align-center"></span>&nbsp; &nbsp; Add Announcement
                      </a>
                  </li>
                   <li class="list-group-item ">
                      <a class="menu <?= $nav == 'upload' ? 'active' : '' ?>" href="/view_upload">
                          <span class="glyphicon glyphicon-cloud-upload"></span>&nbsp; &nbsp; Upload File
                      </a>
                  </li>
                  <li class="list-group-item ">
                      <a class="menu <?= $nav == 'logout' ? 'active' : '' ?>" href="/logout">
                          <span class="glyphicon glyphicon-off"></span>&nbsp; &nbsp; Logout
                      </a>
                  </li>
            </div>
        </div>
    </div>

    <!-- =============================================================================== -->
    <!-- changing semester modal -->
    