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
                                if(form_error('provider_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('provider_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>اختار فني</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='provider_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($providers);$i++)
                                                {

                                                    
                                                    if ($data["provider_id"] == $providers[$i]["provider_id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$providers[$i]["provider_id"].'">'.$providers[$i]["first_name"] .' '.$providers[$i]["last_name"] .'</option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($providers);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$providers[$i]["provider_id"].'">'.$providers[$i]["first_name"] .' '.$providers[$i]["last_name"] .'</option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($providers);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$providers[$i]["provider_id"].'">'.$providers[$i]["first_name"] .' '.$providers[$i]["last_name"] .'</option>  ';
                                                    
                                            }

                                        }

                                        ?>

                                                </select>
                                            </span>
                                        </div>

                                    </div>


                                    <?php 
                                if(form_error('service_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('service_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>اختار الخدمة</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='service_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($services);$i++)
                                                {

                                                    
                                                    if ($data["service_id"] == $services[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$services[$i]["id"].'">'.$services[$i]["name"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($services);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$services[$i]["id"].'"> '. $services[$i]["name"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($services);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$services[$i]["id"].'"> '. $services[$i]["name"] .'  </option>  ';
                                                    
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





        
