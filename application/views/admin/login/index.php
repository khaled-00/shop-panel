<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="<?php  echo base_url() ?>/rec/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/rec/css/pages/login.css" />
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="" autocomplete="on" method="post">
                                <h3 class="black_bg">
                                    Login</h3>
                                <p>
                                        <?php 
                                        if(form_error('email'))
                                        {
                                        echo' <ul>';    
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('email').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                    <label style="margin-bottom:0px;" for="username" class="uname"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E- mail
                                    </label>
                                    <input id="username" name="email" required type="email" placeholder="e-mail" />
                                </p>
                                <p>
                                        <?php 
                                        if(form_error('password'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('password').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                
                                <p class="login button">
                                    <input type="submit" name="submit" value="Login" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Forgot password</button>
                                    </a>
                                    <a href="#toregister">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-success btn-sm" style="float:right;">Sign up</button>
                                    </a>
                                </p>
                            </form>
                        </div>


                        <!-- register part -->
                        <div id="register" class="animate form">
                            <form action="<?php echo base_url() ?>admin/register" autocomplete="on" method="post" enctype="multipart/form-data">
                                <h3 class="black_bg">
                                    Sign Up</h3>
                                <div class="form-group">
                                        <?php 
                                        if(form_error('name'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('name').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="name" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Name
                                        </label>
                                        <input id="name" name="name" required type="text" placeholder="John" />
                                    </div>

                                   

                                    
                                    <div class="form-group">
                                        <?php 
                                        if(form_error('mobile'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('mobile').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="Mobile" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Mobile
                                        </label>
                                        <input id="mobile" name="mobile" required type="text" placeholder="eg. X8df!90EO" />
                                    </div>


                                    
                                    <div class="form-group">
                                        <?php 
                                        if(form_error('password'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('password').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Password
                                        </label>
                                        <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                    </div>

                                    <div class="form-group">
                                        <?php 
                                        if(form_error('cpassword'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('cpassword').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            re-Password
                                        </label>
                                        <input id="password" name="cpassword" required type="password" placeholder="eg. X8df!90EO" />
                                    </div>


                                    <div class="form-group">
                                        <?php 
                                        if(form_error('description'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('description').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        
                                        <label style="margin-bottom:0px;" for="file" class="name">
                                            
                                            description
                                        </label>
                                        <textarea id="password" name="description"></textarea>
                                    </div>

                                         
                                        

                                    <div class="form-group">
                                        <?php 
                                        if(form_error('price_rhyme'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('price_rhyme').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="youmail" class="youmail">
                                           
                                            price rhyme
                                        </label>
                                        <input id="price_rhyme" name="price_rhyme" required type="text" placeholder="eg. X8df!90EO" />
                                    </div>

                                     <div class="form-group">
                                        <?php 
                                        if(form_error('day_confirm'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('day_confirm').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="youmail" class="youmail">
                                           
                                            price rhyme
                                        </label>
                                        <input id="day_confirm" name="day_confirm" required type="text" placeholder="eg. 1.2.3.4.5.6" />
                                    </div>



                                    <br>
                                    <div class="form-group">
                                        <?php 
                                        if(form_error('poem_type'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('poem_type').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="Mobile" class="youmail">
                                           
                                            poem type
                                        </label>
                                        <select name="poem_type">
                                        <?php for ($i = 0; $i < count($poem_type); $i++) {
                                            
                                        ?>
                                        <option value="<?php echo $poem_type[$i]['id']?>"><?php echo $poem_type[$i]['name'] ?></option>

                                        <?php }
                                        ?>

                                        </select>
                                    </div>

                                     <div class="form-group">
                                        <?php 
                                        if(form_error('occasion_type'))
                                        {
                                        echo' <ul>';
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('occasion_type').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>
                                        <label style="margin-bottom:0px;" for="Mobile" class="youmail">
                                            
                                            occasion type
                                        </label>
                                        <select name="occasion_type">
                                        <?php for ($i = 0; $i < count($occasion_type); $i++) {
                                            
                                        ?>
                                        <option value="<?php echo $occasion_type[$i]['id']?>"><?php echo $occasion_type[$i]['name'] ?></option>

                                        <?php }
                                        ?>

                                        </select>
                                    </div>


                                    <input type="hidden" name="usertype" value="2">

                                    <br><br>

                                    <div class="form-group">
                                        
                                        <label style="margin-bottom:0px;" for="file" class="name">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            image
                                        </label>
                                        <input id="password" name="file" required type="file" />
                                    </div>

                                    
                                
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="Sign up" name="submit" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <!-- -->

                        <div id="forgot" class="animate form">
                            <form action="<?php echo base_url() ?>admin/forgetpassword" autocomplete="on" method="post">
                                
                                <p>
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Your email
                                    </label>
                                    <input id="emailsignup1" name="email" required type="email" placeholder="your@mail.com" />
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Reset" name="submit" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="<?php  echo base_url() ?>/rec/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url() ?>/rec/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php  echo base_url() ?>/rec/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php  echo base_url() ?>/rec/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="<?php  echo base_url() ?>/rec/js/josh.js" type="text/javascript"></script>
    <script src="<?php  echo base_url() ?>/rec/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php  echo base_url() ?>/rec/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>
