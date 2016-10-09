<div class="row" style="margin-top: 5%">
        <nav class="navbar nav-head" role="navigation" style="background-color:#561703;height: 40px">
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
                        <img class="img-logo" src="<?php echo base_url('assets/images/ico.jpg'); ?>" style="border-radius: 50px;box-shadow: 0px 0px 10px #FFF;margin-top: 5px"><h2 class="hd-title"><a class="title" href="<?php echo base_url(); ?>">SILFS Management System</a></h2>
                    </div>
                </div>

                <div class="collapse navbar-collapse pull-right" id = "header1">
                     <ul class="nav navbar-nav navbar-right">
                        <li ><a href="/organization" style="color:#FFFF6F">Organizational Chart</a></li>
                        <li ><a href="/request" style="color:#FFFF6F" class="<?= $nav == 'request' ? 'li_active' : '' ?>">Request</a></li>
                        <li ><a href="/view_announcement" style="color:#FFFF6F" class="<?= $nav == 'view_ann' ? 'li_active' : '' ?>">Announcement</a></li>


                     </ul>
                </div>
            </div>
        </nav>
    </div>
