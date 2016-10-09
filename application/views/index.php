<?php $this->load->helper('form') ?>
<div class="row">
        <div class="col-md-12 header">
        <div class="col-md-2">
            
        </div>
            <div class="jumbotron col-md-4">
                <div class="col-md-2">
                    <img class="" src="<?php echo base_url('assets/images/ico.jpg'); ?>" style="border-radius:300px;width: 300px;box-shadow: 0px 0px 20px #FFF">
                </div>
            </div>
<div class="col-md-2">
            
        </div>
            <div class = "col-md-4">
                <form class="form-horizontal login" action="/verify" method="post" role="form">
                    <h2 class="sign">
                        <b>Sign in</b>
                    </h2>
                    <?php echo $this->session->flashdata('message') ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                     <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                       <button class="btn btn-primary" type="submit">Sign in</button>
                    </div>
                </div>
                </form>
            </div>
          <br>
        </div>
    </div>

     <div class="row">
        <div class="col-md-12 bg-panel">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Goal</h3><hr/>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Mission</h3><hr/>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Vision</h3><hr/>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================================================================== -->