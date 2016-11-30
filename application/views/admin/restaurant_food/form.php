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
                                if(form_error('restaurant_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('restaurant_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>Select res</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='restaurant_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($restaurant);$i++)
                                                {

                                                    
                                                    if ($data["restaurant_id"] == $restaurant[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$restaurant[$i]["id"].'">'.$restaurant[$i]["name_ar"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($restaurant);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$restaurant[$i]["id"].'"> '. $restaurant[$i]["name_ar"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($restaurant);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$restaurant[$i]["id"].'"> '. $restaurant[$i]["name_ar"] .'  </option>  ';
                                                    
                                            }

                                        }

                                        ?>

                                                </select>
                                            </span>
                                        </div>

                                    </div>


                                    <?php 
                                if(form_error('food_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('food_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>Select food</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='food_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($food);$i++)
                                                {

                                                    
                                                    if ($data["food_id"] == $food[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$food[$i]["id"].'">'.$food[$i]["name_ar"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($food);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$food[$i]["id"].'"> '. $food[$i]["name_ar"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($food);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$food[$i]["id"].'"> '. $food[$i]["name_ar"] .'  </option>  ';
                                                    
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





        