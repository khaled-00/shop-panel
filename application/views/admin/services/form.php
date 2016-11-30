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
                                if(form_error('name'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('name').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اسم الخدمة</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='name' value='<?php if(isset($data["name"]) ) echo $data["name"]?>'/>

                                        </div>
                                    </div>
                                    

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label' for='name'>رفع صورة</label>
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





        
