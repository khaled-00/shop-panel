<!--page level css -->

<link href="<?php  echo base_url() ?>rec/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
<link href="<?php  echo base_url() ?>rec/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
<!--end of page level css-->


  
    

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="content-wrapper ">

  
  <!-- main -->
  <div class="content">

    <div class="main-content">


          <div class="widget widget-table">
            <div class="widget-header">
              <h3><i class="fa fa-table"></i> <?php echo $page_title ?> </h3> 
              </div>
            <div class="widget-content">
              
              <form id="tryitForm" class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                        <?php 
                                if(form_error('id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?><?php 
                                if(form_error('username'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('username').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>username</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='username' value='<?php if(isset($data["username"]) ) echo $data["username"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('password'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('password').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>password</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='password' value='<?php if(isset($data["password"]) ) echo $data["password"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('email'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('email').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>email</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='email' value='<?php if(isset($data["email"]) ) echo $data["email"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('mobile'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('mobile').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>mobile</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='mobile' value='<?php if(isset($data["mobile"]) ) echo $data["mobile"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('address'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('address').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>address</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='address' value='<?php if(isset($data["address"]) ) echo $data["address"]?>'/>

                                        </div>
                                    </div>
                                    <!--
                                    <?php 
                                /*if(form_error('status'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('status').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>status</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='status' value='<?php if(isset($data["status"]) ) echo $data["status"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('usertype'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('usertype').'</li>
                                    <br><br></ul>';
                                    
                                }*/
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>usertype</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='usertype' value='<?php // if(isset($data["usertype"]) ) echo $data["usertype"] ?>'/>

                                        </div>
                                    </div>

                                   -->
                                   
                                    <?php 
                                if(form_error('lat'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('lat').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>lat</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='lat' value='<?php if(isset($data["lat"]) ) echo $data["lat"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('lng'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('lng').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>lng</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='lng' value='<?php if(isset($data["lng"]) ) echo $data["lng"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('img'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('img').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>
                                    <div class='form-group'>
                                        <label class='col-md-3 control-label' for='name'>Attach File</label>
                                        <div class='col-md-9'>
                                            <div class='fileinput fileinput-new input-group' data-provides='fileinput'>
                                                <div class='form-control' data-trigger='fileinput'>
                                                    <i class='glyphicon glyphicon-file fileinput-exists'></i>
                                                    <span class='fileinput-filename'></span>
                                                </div>
                                                <span class='input-group-addon btn btn-default btn-file'>
                                                    <span class='fileinput-new'>Select file</span>
                                                    <span class='fileinput-exists'>Change</span>
                                                    <input type='file' name='file' accept='image/*'></span>
                                                    <a href='#' class='input-group-addon btn btn-default fileinput-exists' data-dismiss='fileinput'>Delete</a>
                                                </div>
                                            </div>
                                        </div>







                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-8">
                                    <input type="submit" name="submit" class="btn btn-primary" value="حفظ" />
                                </div>
                            </div>
                        </form>
                        

        </div>
      </div>
      <!-- END COLUMN FILTER DATA TABLE -->




    </div>
  </div>
  <!-- /main -->

              <script src="<?php  echo base_url() ?>/rec/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>





        