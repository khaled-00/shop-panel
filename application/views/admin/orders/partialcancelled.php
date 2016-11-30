     

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="content-wrapper " >

    
    <!-- main -->
    <div class="content">

        <div class="main-content">


         <!-- alert for opeartio -->
         <p style="color:white; text-align:center; font-size:18px ; font-weight:bold">  
            <?php  echo $this->session->flashdata("success"); ?>  
        </p>


        <!-- -->

        <div class="widget widget-table" style="overflow:auto;">
          <div class="widget-header">
             <h3><i class="fa fa-table"></i> <?php echo $page_title ?> </h3> 
         </div>
         <div class="widget-content">
             <table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">

                                <thead>
                                    <tr>
                                        <th>اسم العميل</th><th>اسم الفني</th><th>تاريخ الطلب</th><th>الخدمة</th><th>حالة الطلب</th><th>سبب الالغاء من العميل</th><th>السعر</th>
                                        
                                       <th>حذف الطلب</th>



                                   </tr>
                               </thead>
                               <tbody>

                                        <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                        
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]["client"].'</td>
                                            <td>'.$data[$i]["first_name"].' '.$data[$i]["last_name"].'</td>
                                            <td>'.$data[$i]["date"].'</td>
                                            <td>'.$data[$i]["service"].'</td>
                                            <td>ملغى من قبل الفنى</td>
                                            <td>'.$data[$i]["cancellation_note"].'</td>
                                            <td>'.$data[$i]["price"].'</td>
                                            
                                           
                                            <td> 
                                            <button class="btn btn-info" data-href="
                                            '.base_url().'admin/orders/cancelorder?id='.$data[$i]["id"].' " data-toggle="modal" data-target="#confirm-delete">
                                             الغاء الطلب
                                            </button>
                                            </td>

                                            </tr>'; 
                                            
                                        }

                                      ?>

                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- END COLUMN FILTER DATA TABLE -->




                </div>
            </div>
            <!-- /main -->



           

           


            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">تأكيد العملية</h4>
                        </div>

                        <div class="modal-body">
                           
                            <p>هل تريد الأستمرار ؟</p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">رجوع</button>
                            <a class="btn btn-danger btn-ok">تأكيد</a>
                        </div>
                    </div>
                </div>
            </div>

