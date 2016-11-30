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
                                if(form_error('user_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('user_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>user_id</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='user_id' value='<?php if(isset($data["user_id"]) ) echo $data["user_id"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('total_price'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('total_price').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>total_price</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='total_price' value='<?php if(isset($data["total_price"]) ) echo $data["total_price"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('created_date'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('created_date').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>created_date</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='created_date' value='<?php if(isset($data["created_date"]) ) echo $data["created_date"]?>'/>

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
                                            <input type='text' class='form-control' name='status' value='<?php if(isset($data["status"]) ) echo $data["status"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('city_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('city_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>city_id</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='city_id' value='<?php if(isset($data["city_id"]) ) echo $data["city_id"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('region_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('region_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>region_id</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='region_id' value='<?php if(isset($data["region_id"]) ) echo $data["region_id"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('district_id'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('district_id').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>district_id</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='district_id' value='<?php if(isset($data["district_id"]) ) echo $data["district_id"] ?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('street'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('street').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>street</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='street' value='<?php if(isset($data["street"]) ) echo $data["street"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('jada'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('jada').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>jada</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='jada' value='<?php if(isset($data["jada"]) ) echo $data["jada"]?>'/>

                                        </div>
                                    </div>
                                    <?php 
                                if(form_error('home'))
                                {

                                    echo' <ul>'; 
                                       
                                    echo'  <li class="col-md-12" style="color:red !important">  '.form_error('home').'</li>
                                    <br><br></ul>';
                                    
                                }
                                ?>

                                    <div class='form-group'>
                                        <label class='col-md-3 control-label'>home</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control' name='home' value='<?php if(isset($data["home"]) ) echo $data["home"]?>'/>

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





        