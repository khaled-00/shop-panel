
        <!-- MAIN CONTENT WRAPPER -->
        <div id="main-content-wrapper" class="content-wrapper ">

            <div class="row">
                <div class="col-lg-4 ">
                    <ul class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>

            </div>
            <!-- main -->
            <div class="content">
                <div class="main-header">
                    <h2>Profile</h2>
                    <em>user profile page</em>
                </div>
                <div class="main-content">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
                        <li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>

                        <li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> Settings</a></li>
                    </ul>
                    <!-- END NAV TABS -->
                    <div class="tab-content profile-page">
                        <!-- PROFILE TAB CONTENT -->
                        <div class="tab-pane profile active" id="profile-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="user-info-left">
                                        <img src="<?php echo base_url()?>rec/assets/img/profile-avatar.png" alt="Profile Picture" />
                                        <h2> <?php echo $session['name'] ?> <i class="fa fa-circle green-font online-icon"></i><sup class="sr-only">online</sup></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="user-info-right">
                                        <div class="basic-info">
                                            <h3><i class="fa fa-square"></i> Basic Information</h3>
                                            <p class="data-row">
                                                <span class="data-name">Name</span>
                                                <span class="data-value"><?php echo $session['name'] ?></span>
                                            </p>
                                            
                                            <p class="data-row">
                                                <span class="data-name">Gender</span>
                                                <span class="data-value">Male</span>
                                            </p>
                                            
                                            <p class="data-row">
                                                <span class="data-name">Last Login</span>
                                                <span class="data-value"><?php echo $session['last_login'] ?></span>
                                            </p>
                                            <p class="data-row">
                                                <span class="data-name">Date Joined</span>
                                                <span class="data-value"><?php echo $session['date_created'] ?></span>
                                            </p>
                                        </div>
                                        <div class="contact_info">
                                            <h3><i class="fa fa-square"></i> Contact Information</h3>
                                            <p class="data-row">
                                                <span class="data-name">Email</span>
                                                <span class="data-value"><?php echo $session['email'] ?></span>
                                            </p>
                                            <p class="data-row">
                                                <span class="data-name">Phone</span>
                                                <span class="data-value"><?php echo $session['mobile'] ?></span>
                                            </p>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE TAB CONTENT -->

                        <!-- SETTINGS TAB CONTENT -->
                        <div class="tab-pane settings" id="settings-tab">
                            <form class="form-horizontal" method="post" role="form">
                                <fieldset>
                                    <h3><i class="fa fa-square"></i> Change Password</h3>
                                    <div class="form-group">
                                        <label for="old-password" class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" id="old-password" name="c_password" class="form-control">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password2" class="col-sm-3 control-label">Repeat Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" id="password2" name="re_password" class="form-control">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <h3><i class="fa fa-square"></i> Main information</h3>
                                    
                                     <div class="form-group">
                                        <label for="password2" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name" class="form-control" value="<?php echo $session['name'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password2" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="email" name="email" class="form-control" value="<?php echo $session['email'] ?>">
                                        </div>
                                    </div>

                                </fieldset>

                                <button class="btn btn-custom-primary text-center" type="submit" name="submit"> Save Changes</button>
                            </form>
                            
                        </div>
                        <!-- END SETTINGS TAB CONTENT -->
                    </div>
                </div>
            </div>
            <!-- /main -->
            
