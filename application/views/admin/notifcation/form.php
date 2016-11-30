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
                                if(form_error('type'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('type').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>اختار</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='type' required>

                                                <!--
                                                   part of php

                                               -->
                                              
                                            <option >Select </option> 
                                            
                                                    
                                                       <option value ="1">لكل العملاء</option> 
                                                       <option value ="2">لكل المطاعم</option> 
                                                    
                                            

                                        

                                      

                                                </select>
                                            </span>
                                        </div>

                                    </div>



                                        <?php 
                                        if(form_error('notification'))
                                        {
                                        echo' <ul>';    
                                        echo '<li class="col-md-12" style="color:red !important">
                                        '.form_error('message').'</li>';
                                        echo'<br><br></ul>';
                                        }
                                        ?>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label">نص الرسالة</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="notification" 
                                                value="<?php if(isset($data['notification']) ) echo $data['notification'] ?>" />
                                            </div>
                                        </div>


                                       
                                        
                                        <div class="form-group">
                                            <div class="col-md-offset-6 col-md-8">
                                                <input type="submit" name="submit" class="btn btn-primary" value="ارسال" />
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


