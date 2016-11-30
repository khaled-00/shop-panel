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
                                if(form_error('name'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('name').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>Driver name</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='name' value='<?php if(isset($data["name"]) ) echo $data["name"]?>'/>

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
                                        <label class='col-md-3 control-label'>Driver password</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='password' value='<?php if(isset($data["password"]) ) echo $data["password"]?>'/>

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
                                        <label class='col-md-3 control-label'>Mobile</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='mobile' value='<?php if(isset($data["mobile"]) ) echo $data["mobile"] ?>'/>

                                        </div>
                                    </div>

                                    
                                    <?php 
                                if(form_error('area_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('area_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>Choose area</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='area_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($area);$i++)
                                                {

                                                    
                                                    if ($data["area_id"] == $area[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$area[$i]["id"].'">'.$area[$i]["name_ar"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($area);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$area[$i]["id"].'"> '. $area[$i]["name_ar"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($area);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$area[$i]["id"].'"> '. $area[$i]["name_ar"] .'  </option>  ';
                                                    
                                            }

                                        }

                                        ?>

                                                </select>
                                            </span>
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





        