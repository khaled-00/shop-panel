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



                        <div class="form-group">
                            <label class="col-md-3 control-label">table name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="tablename" placeholder=""
                                value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">folder name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="foldername" placeholder=""
                                value=""/>
                            </div>
                        </div>



                        <div class="form-group field_number">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <select name="field_number" class="form-control m-bot15">
                                  <option value="">number of field</option>

                                  <?php for ($i=1; $i <= 40; $i++) { 
                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                  } ?>
                              </select>


                          </div>
                      </div>

                      <div class="field">

                      </div>


                      <div class="types">

                      </div>


                  

                                        <!--
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="name">صورة القسم</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span>
                                                    </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new">اختار الملف</span>
                                                        <span class="fileinput-exists">تغيير</span>
                                                        <input type="file" name="file" accept="image/*"></span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">حذف</a>
                                                </div>
                                            </div>
                                        </div>

                                    -->



                                    <div class="form-group">
                                        <div class="col-md-offset-6 col-md-8">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Generate" />
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
