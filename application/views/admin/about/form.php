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
                                            <textarea class='form-control' name='address'><?php if(isset($data["address"]) ) echo $data["address"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('facebook'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('facebook').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>facebook</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='facebook'><?php if(isset($data["facebook"]) ) echo $data["facebook"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('twitter'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('twitter').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>twitter</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='twitter'><?php if(isset($data["twitter"]) ) echo $data["twitter"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('instgram'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('instgram').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>instgram</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='instgram'><?php if(isset($data["instgram"]) ) echo $data["instgram"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('snapchat'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('snapchat').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>snapchat</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='snapchat'><?php if(isset($data["snapchat"]) ) echo $data["snapchat"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('youtube'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('youtube').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>youtube</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='youtube'><?php if(isset($data["youtube"]) ) echo $data["youtube"] ?></textarea>
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





        