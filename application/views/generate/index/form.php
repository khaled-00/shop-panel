<!--page level css -->

<link href="<?php  echo base_url() ?>rec/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
<link href="<?php  echo base_url() ?>rec/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
<!--end of page level css-->


  
    

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="content-wrapper ">

  
  <!-- main -->
  <div class="content">

    <div class="main-content">

          <?php
            if (isset($validations) || isset($uploads)) 
              {
              ?>
                <div class="alert-danger" style="padding: 10px 20px;">
              <?php
                // Errors
                if (isset($validations))
                {
                  ?>
                    <p class="has-error"> <?php echo $validations; ?></p>
                  <?php
                }

                if (isset($uploads))
                {
                 ?> 
                    <p class="has-error"> <?php  echo $uploads;    ?></p>  
                  <?php
                }
              ?>
                  </div>
        <?php } ?>
          <div class="widget widget-table">
            <div class="widget-header">
              <h3><i class="fa fa-table"></i> <?php echo $page_title ?> </h3> 
              </div>
            <div class="widget-content">
              
              <form id="tryitForm" class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-md-3 control-label">أسم المنتج</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="project_name" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">وصف المنتج</label>
                            <div class="col-md-8">
                                <textarea type="text" class="form-control" name="project_desc" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">سعر المنتج</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="project_price" placeholder=""
                                value=""/>
                            </div>
                        </div>
<!--
                        <div class="form-group">
                            <label class="col-md-3 control-label">صورة المنتج</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="project_img" placeholder=""
                                value=""/>
                            </div>
                        </div-->
                        <div class='form-group'>
                            <label class='col-md-3 control-label'>صورة المنتج</label>
                            <div class='col-md-8'>
                                <div class='fileinput fileinput-new input-group' data-provides='fileinput'>
                                      <div class='form-control' data-trigger='fileinput'>
                                          <i class='glyphicon glyphicon-file fileinput-exists'></i>
                                          <span class='fileinput-filename'></span>
                                      </div>
                                      <span class='input-group-addon btn btn-default btn-file'>
                                      <span class='fileinput-new'>اختار صورة</span>
                                      <span class='fileinput-exists'>تغيير</span>

                                      <input type='file' name='project_img' ></span>
                                      <a href='#' class='input-group-addon btn btn-default fileinput-exists' data-dismiss='fileinput'>حذف</a>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">لون المنتج</label>
                            <div class="col-md-8">
                                <select class='form-control' id='validate-select' name="project_color" required>
                                    <option value="0x000000">Black</option>
                                    <option value="0x7bd148">Green</option>
                                    <option value="0x5484ed">Bold blue</option>
                                    <option value="0xa4bdfc">Blue</option>
                                    <option value="0x46d6db">Turquoise</option>
                                    <option value="0x7ae7bf">Light green</option>
                                    <option value="0x51b749">Bold green</option>
                                    <option value="0xfbd75b">Yellow</option>
                                    <option value="0xffb878">Orange</option>
                                    <option value="0xff887c">Red</option>
                                    <option value="0xdc2127">Bold red</option>
                                    <option value="0xdbadff">Purple</option>
                                    <option value="0xe1e1e1">Gray</option>
                                    <option value="0xffffff">White</option>
                                </select>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='validate-select' class='col-md-3 control-label'>نوع المنتج</label>

                            <div class='col-md-8'>
                                <select class='form-control'  id='validate-select' name='project_type' required>
                                   <option value='1'>أحذية</option>
                                   <option value='2'>حقائب</option>  
                                  </select>
                              </span>
                          </div>

                        </div>

                       <div class='form-group'>
                            <label for='validate-select' class='col-md-3 control-label'>مقاس المنتج</label>

                            <div class='col-md-8'>
                                <select class='form-control'  id='validate-select' name='project_size' required>
                                   <option value='S'>    S    </option>
                                   <option value='M'>    M    </option>  
                                   <option value='L'>    L    </option>  
                                   <option value='XL'>   XL   </option>  
                                   <option value='XXL'>  XXL  </option>  
                                   <option value='XXXL'> XXXL </option>  
                                  </select>
                              </span>
                          </div>

                        </div>

                      
                      <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                              <input type="submit" name="Add_item" class="btn btn-primary" value="Add new item" />
                          </div>
                      </div>

                      <div class="step2">
                      </div>

              </form>
        </div>
      </div>
      <!-- END COLUMN FILTER DATA TABLE -->




    </div>
  </div>
  <!-- /main -->

              <script src="<?php  echo base_url() ?>/rec/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>



                <script>

                    jQuery(function(){

                        $("select[name=field_number]").change(function(){
                            number = $("select[name=field_number]").val();

        //alert(passwrod + " - " + repassword); 
        //Make AJAX request, using the selected value as the GET
        $.ajax({url: '<?php echo base_url()?>setup/view/ajax?number='+number,
           success: function(output) {
                //alert(output);
                $('.field').html(output);
                $(".field_number").css("display","none");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " "+ thrownError);
            }});

    });
                    })
                </script>


                <script>

                    function myFunction() {
                        document.getElementById("demo").innerHTML = "Hello World";
                    }
                </script>
