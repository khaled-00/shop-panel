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
                                if(form_error('name_ar'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('name_ar').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>name in arabic</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='name_ar' value='<?php if(isset($data["name_ar"]) ) echo $data["name_ar"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('name_en'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('name_en').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>name in english</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='name_en' value='<?php if(isset($data["name_en"]) ) echo $data["name_en"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('description_ar'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('description_ar').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>description in arabic</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='description_ar'><?php if(isset($data["description_ar"]) ) echo $data["description_ar"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('description_en'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('description_en').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>description in english</label>
                                        <div class='col-md-8'>
                                            <textarea class='form-control' name='description_en'><?php if(isset($data["description_en"]) ) echo $data["description_en"] ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('menu_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('menu_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>




                                        <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>select menu</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='menu_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($menus);$i++)
                                                {

                                                    
                                                    if ($data["menu_id"] == $menus[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$menus[$i]["id"].'">'.$menus[$i]["name_ar"] .' </option>  ';
                                                       break;
                                                   }
                                                   else
                                                   {
                                                    $c++;

                                                }

                                            }

                                            for($i=0;$i<count($menus);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$menus[$i]["id"].'"> '. $menus[$i]["name_ar"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($menus);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$menus[$i]["id"].'"> '. $menus[$i]["name_ar"] .'  </option>  ';
                                                    
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
                                            <label for='validate-select' class='col-md-3 control-label'>select food type</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='food_id' required>

                                                <!--
                                                   part of php

                                               -->
                                               <?php
                                               if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($food_type);$i++)
                                                {

                                                    
                                                    if ($data["food_id"] == $restaurant[$i]["id"] ) 
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

                                            for($i=0;$i<count($food_type);$i++)
                                            {
                                                if($i == $c)
                                                {
                                                    continue;
                                                }
                                                else
                                                {
                                                    
                                                       echo ' 
                                                       <option value ="'.$food_type[$i]["id"].'"> '. $food_type[$i]["name_ar"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($food_type);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$food_type[$i]["id"].'"> '. $food_type[$i]["name_ar"] .'  </option>  ';
                                                    
                                            }

                                        }

                                        ?>

                                                </select>
                                            </span>
                                        </div>

                                    </div>


                                    <?php 
                                if(form_error('price'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('price').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>price</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='price' value='<?php if(isset($data["price"]) ) echo $data["price"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('status'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('status').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>status</label>
                                        <div class='col-md-8'>
                                            <?php 
                                            if(isset($data['status']) and $data['status']==0)
                                            {
                                             
                                            ?>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="1"  /> متاحة
                                            </div>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="0" checked="" /> غير متاحة
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <?php 
                                            if(isset($data['status']) and $data['status']==1)
                                            {
                                             
                                            ?>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="1" checked="" /> متاحة
                                            </div>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="0" /> غير متاحة
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <?php 
                                            if(!isset($data['status']))
                                            {
                                             
                                            ?>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="1" checked="" /> متاحة
                                            </div>
                                            <div class="col-md-4">
                                            <input type='radio' class='form-control' name='status' value="0" />  غير متاحة
                                            </div>
                                            <?php
                                            }
                                            ?>

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
                                        <label class='col-md-3 control-label' for='name'>image</label>
                                        <div class='col-md-9'>
                                            <div class='fileinput fileinput-new input-group' data-provides='fileinput'>
                                                <div class='form-control' data-trigger='fileinput'>
                                                    <i class='glyphicon glyphicon-file fileinput-exists'></i>
                                                    <span class='fileinput-filename'></span>
                                                </div>
                                                <span class='input-group-addon btn btn-default btn-file'>
                                                    <span class='fileinput-new'>choose</span>
                                                    <span class='fileinput-exists'>change</span>
                                                    <input type='file' name='file' accept='image/*'></span>
                                                    <a href='#' class='input-group-addon btn btn-default fileinput-exists' data-dismiss='fileinput'>delete</a>
                                                </div>
                                            </div>
                                        </div>







                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-8">
                                    <input type="submit" name="submit" class="btn btn-primary" value="save" />
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





        