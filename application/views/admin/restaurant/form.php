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
                                if(form_error('username'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('username').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اسم تسجيل الدخول</label>
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
                                        <label class='col-md-3 control-label'>كلمة سر تسجيل الدخول</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='password' value='<?php if(isset($data["password"]) ) echo $data["password"]?>'/>

                                        </div>
                                    </div>

                                <?php 
                                if(form_error('name_ar'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('name_ar').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>الاسم</label>
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
                                        <label class='col-md-3 control-label'>الاسم بالانجليزية</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='name_en' value='<?php if(isset($data["name_en"]) ) echo $data["name_en"]?>'/>

                                        </div>
                                    </div>
                                   
                                    
                                    <?php 
                                if(form_error('min_order'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('min_order').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اقل سعر للطلب</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='min_order' value='<?php if(isset($data["min_order"]) ) echo $data["min_order"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('work_from'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('work_from').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>يعمل من</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='work_from' value='<?php if(isset($data["work_from"]) ) echo $data["work_from"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('work_to'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('work_to').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>يعمل الي</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='work_to' value='<?php if(isset($data["work_to"]) ) echo $data["work_to"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('delivery_time_min'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('delivery_time_min').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اقل معاد للتوصيل</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='delivery_time_min' value='<?php if(isset($data["delivery_time_min"]) ) echo $data["delivery_time_min"]?>'/>

                                        </div>
                                    </div>

                                    <?php 
                                if(form_error('delivery_time_max'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('delivery_time_max').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>اقصي معاد للطلب</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='delivery_time_max' value='<?php if(isset($data["delivery_time_max"]) ) echo $data["delivery_time_max"]?>'/>

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
                                        <label class='col-md-3 control-label'>حالة المطعم</label>
                                        <div class='col-md-8'>
                                            <?php 
                                            if(isset($data['status']) and $data['status']==0)
                                            {
                                             
                                            ?>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="1"  /> مفتوح
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="0" checked="" /> مغلق
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="2"  /> مشغول
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <?php 
                                            if(isset($data['status']) and $data['status']==1)
                                            {
                                             
                                            ?>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="1" checked="" /> مفتوح
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="0" /> مغلق
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="2" /> مشغول
                                            </div>
                                            <?php
                                            }
                                            ?>

                                            <?php 
                                            if(isset($data['status']) and $data['status']==2)
                                            {
                                             
                                            ?>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="1"  /> مفتوح
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="0" /> مغلق
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="2" checked="" /> مشغول
                                            </div>
                                            <?php
                                            }
                                            ?>


                                            <?php 
                                            if(!isset($data['status']))
                                            {
                                             
                                            ?>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="1" checked="" /> مفتوح
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="0" /> مغلق
                                            </div>
                                            <div class="col-md-2">
                                            <input type='radio' class='form-control' name='status' value="2"  /> مشغول
                                            </div>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>

                                    <?php 
                                if(form_error('food'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('food').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>انواع الطعام</label>
                                        <div class='col-md-8'>
                                             
                                            <?php 
                                            for ($i = 0; $i < count($food_type); $i++) {
                                                echo'<div class="col-sm-1">
                                                <label>'.$food_type[$i]['name_ar'].'
                                            <input type="checkbox" class="form-control" name="food[]" value="'.$food_type[$i]['id'].'"  /> 
                                            </label>
                                            </div>
                                            ';
                                                
                                            }
                                            ?>
                                                                                        
                                    
                                        </div>
                                    </div>

                                    <?php 
                                if(form_error('payment_type'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('payment_type').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>طرق الدفع لدي المطعم</label>
                                        <div class='col-md-8'>
                                             
                                            <?php 
                                            for ($i = 0; $i < count($payment_type); $i++) {
                                                echo'<div class="col-md-1">
                                                <label>'.$payment_type[$i]['name_ar'].'
                                            <input type="checkbox" class="form-control" name="payment_type[]" value="'.$payment_type[$i]['id'].'"  /> 
                                            </label>
                                            </div>
                                            ';
                                                
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
                                        <label class='col-md-3 control-label' for='name'>اختار</label>
                                        <div class='col-md-9'>
                                            <div class='fileinput fileinput-new input-group' data-provides='fileinput'>
                                                <div class='form-control' data-trigger='fileinput'>
                                                    <i class='glyphicon glyphicon-file fileinput-exists'></i>
                                                    <span class='fileinput-filename'></span>
                                                </div>
                                                <span class='input-group-addon btn btn-default btn-file'>
                                                    <span class='fileinput-new'>اختار ملف</span>
                                                    <span class='fileinput-exists'>تغيير</span>
                                                    <input type='file' name='file' accept='image/*'></span>
                                                    <a href='#' class='input-group-addon btn btn-default fileinput-exists' data-dismiss='fileinput'>حذف</a>
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





        