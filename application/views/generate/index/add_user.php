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
            if (isset($validations)) 
              {
              ?>
                <div class="alert-danger" style="padding: 10px 20px;">
                    <p class="has-error"> <?php echo $validations; ?></p>
                </div>
        <?php } ?>
          <div class="widget widget-table">
            <div class="widget-header">
              <h3><i class="fa fa-table"></i> <?php echo $page_title ?> </h3> 
              </div>
            <div class="widget-content">
              
              <form id="tryitForm" class="form-horizontal" action="" method="post" >

                        <div class="form-group">
                            <label class="col-md-3 control-label">الأسم</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="user_name" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">البريد الألكترونى</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="user_mail" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">كلمة المرور</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="user_password" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">رقم الهاتف</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="user_mobile" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='validate-select' class='col-md-3 control-label'>الوظيفة</label>

                            <div class='col-md-8'>
                                <select class='form-control'  id='validate-select' name='user_type' required>
                                   <option value='2'>Editor</option>
                                   <option value='1'>admin</option>  
                                  </select>
                              </span>
                          </div>

                        </div>


                        </div>

                      
                      <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                              <input type="submit" name="Add_user" class="btn btn-primary" value="Add new item" />
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
