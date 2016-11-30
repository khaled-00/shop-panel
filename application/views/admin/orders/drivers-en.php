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
                                if(form_error('driver_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('driver_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>Select Driver</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='driver_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($users);$i++)
                                                {

                                                    
                                                    if ($data["driver_id"] == $users[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$users[$i]["id"].'">'.$users[$i]["name"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($users);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$users[$i]["id"].'"> '. $users[$i]["name"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($users);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$users[$i]["id"].'"> '. $users[$i]["name"] .'  </option>  ';
                                                    
                                            }

                                        }

                                        ?>

                                                </select>
                                            </span>
                                        </div>

                                    </div>


    






                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-8">
                                    <input type="submit" name="submit" class="btn btn-primary" value="send" />
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





        