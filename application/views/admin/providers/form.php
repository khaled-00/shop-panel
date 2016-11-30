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
                                /*if(form_error('id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                <?php 

                                if(form_error('provider_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('provider_id').'</li>
                                    <br><br></ul>';
                                    
                                }*/
                                ?>




                                    <!--    <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>Select</label>

                                            <div class='col-md-8 input-group'>
                                                <select class='form-control'  id='validate-select' name='provider_id' required>

                                                
                                                   part of php

                                               
                                               <?php
                                              /* if(!empty($data))
                                               {
                                                for($i=0, $c = 0;$i<count($users);$i++)
                                                {

                                                    
                                             if ($data["provider_id"] == $users[$i]["id"] ) 
                                                    {
                                                        
                                                       echo ' 
                                                       <option value ="'.$users[$i]["id"].'">'.$users[$i]["username"] .' </option>  ';
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
                                                       <option value ="'.$users[$i]["id"].'"> '. $users[$i]["username"] .'  </option>  ';
                                                    
                                                }
                                            }

                                        }

                                        else
                                        {
                                            echo"<option >Select </option>"; 
                                            for($i=0;$i<count($users);$i++)
                                            {
                                                    
                                                       echo ' 
                                                       <option value ="'.$users[$i]["id"].'"> '. $users[$i]["username"] .'  </option>  ';
                                                    
                                            }

                                        }
                                                */
                                        ?>

                                                </select>
                                            </span>
                                        </div>

                                    </div>
                                 -->
                              <?php   
                               if(form_error('id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>
                                <?php 
                                if(form_error('username'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('username').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اسم المستخدم</label>
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
                                        <label class='col-md-3 control-label'>كلمة السر</label>
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
                                        <label class='col-md-3 control-label'>البريد الالكتروني</label>
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
                                        <label class='col-md-3 control-label'>رقم الهاتف</label>
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
                                        <label class='col-md-3 control-label'>العنوان</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='address' value='<?php if(isset($data["address"]) ) echo $data["address"]?>'/>

                                        </div>
                                    </div>







                                    <?php 
                                if(form_error('first_name'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('first_name').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>الاسم الاول</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='first_name' value='<?php if(isset($data["first_name"]) ) echo $data["first_name"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('last_name'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('last_name').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>الاسم الثاني</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='last_name' value='<?php if(isset($data["last_name"]) ) echo $data["last_name"]?>'/>

                                        </div>
                                    </div>
                                    
                                    <?php 
                                if(form_error('start_at'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('start_at').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>start_at</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='start_at' value='<?php if(isset($data["start_at"]) ) echo $data["start_at"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('end_at'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('end_at').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>end_at</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='end_at' value='<?php if(isset($data["end_at"]) ) echo $data["end_at"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('available'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('available').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                   <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>الحالة</label>

                                            <div class='col-md-8 input-group'>
                                        <select name="available" class="form-control">
                                          <?php 

                                if (isset($data["available"]) && $data["available"] == 0)
                                            {
                                                 echo '<option value="0">غير متاح</option>
                                                        <option value="1">متاح</option>';
                                             }
                            elseif(isset($data["available"]) && $data["available"] == 1) 
                                             {
                                                 echo '<option value="1">متاح</option>
                                                    <option value="0">غير متاح</option>';
                                             }
                                             else {
                                                  echo '<option value="0">غير متاح</option>
                                                        <option value="1">متاح</option>';
                                             }
                                          ?>
                                            
                                            
                                        </select>
                                         <!--   <input type='text' class='form-control' name='available' value='<?php //if(isset($data["available"]) ) echo $data["available"] ?>'/> -->

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('provider_type'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('provider_type').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                            <label for='validate-select' class='col-md-3 control-label'>النوع</label>

                                            <div class='col-md-8 input-group'>


                                        <select name="provider_type" class="form-control">
                                          <?php 

                        if (isset($data["provider_type"]) && $data["provider_type"] == 0)
                                            {
                                                 echo '<option value="0">فرد</option>
                                                        <option value="1">مؤسسة</option>';
                                             }
                    elseif(isset($data["provider_type"]) && $data["provider_type"] == 1) 
                                             {
                                                 echo '<option value="1">مؤسسة</option>
                                                    <option value="0">فرد</option>';
                                             }
                                             else {
                                                  echo '<option value="0">فرد</option>
                                                        <option value="1">مؤسسة</option>';
                                             }
                                          ?>
                                            
                                            
                                        </select>

                                         <!--   <input type='text' class='form-control' name='provider_type' value='<?php// if(isset($data["provider_type"]) ) echo $data["provider_type"] ?>'/> -->

                                        </div>
                                    </div>
                                    
                                    <?php 
                                if(form_error('commercial_num'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('commercial_num').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>عدد الاعمال المنجزه</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='commercial_num' value='<?php if(isset($data["commercial_num"]) ) echo $data["commercial_num"] ?>'/>

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
                                        <label class='col-md-3 control-label' for='name'>صورة الفني</label>
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





        