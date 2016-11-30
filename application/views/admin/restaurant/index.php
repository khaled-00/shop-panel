     

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
                                        <th>الاسم</th><th>الاسم بالانجليزية</th><th>التقييم</th><th>اقل سعر للطلب</th><th>يعمل من</th><th>يعمل الي</th><th>معاد تسليم الطلب</th><th>حالة المطعم</th><th>الصورة</th><th>رؤية التعليقات</th><th>تعديل</th>
                                       <th>حذف</th>




                                   </tr>
                               </thead>
                               <tbody>

                                        <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                        
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]["name_ar"].'</td>
                                            <td>'.$data[$i]["name_en"].'</td>
                                            <td>'.$data[$i]["rate"].'</td>
                                            <td>'.$data[$i]["min_order"].'</td>
                                            <td>'.$data[$i]["work_from"].'</td>
                                            <td>'.$data[$i]["work_to"].'</td>
                                            <td>'.$data[$i]["delivery_time_min"].' to '.$data[$i]["delivery_time_max"].'</td>
                                            ';


                                            if($data[$i]['status'] == 1)
                                            {
                                                echo'<td> <a href="'.base_url().'admin/restaurant/active?id='.$data[$i]['id'].'&status=0"><img src="'.base_url().'rec/img/remove.png" height="35" > </td>';
                                            }
                                            else 
                                            {
                                                echo'<td> <a href="'.base_url().'admin/restaurant/active?id='.$data[$i]['id'].'&status=1"><img src="'.base_url().'rec/img/paid.png" height="35" > </td>';
                                            }


                                            echo'
                                            <td><img src="'.$data[$i]["img"].'" height ="50" > </td>
                                            <td> <a class="btn btn-default" href="'.base_url().'admin/restaurant/comment_admin?id='.$data[$i]["id"].'" >رؤية التعليقات</a> 
                                            </td>
                                            <td> <a href="'.base_url().'admin/restaurant/edit?id='.$data[$i]["id"].'" > <img src="'.base_url().'rec/img/edit.png" alt=""> </a> 
                                            </td>
                                            ';

                                            if($session['usertype'] == 1)
                                            {
                                                echo'

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/restaurant/delete?id='.$data[$i]["id"].' " data-toggle="modal" data-target="#confirm-delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> حذف
                                            </button>
                                            </td>
                                            ';
                                            }
                                            else 
                                            {
                                               echo'<td></td>'; 
                                            }
                                            
                                            echo'</tr> '; 
                                            
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
                            <h4 class="modal-title" id="myModalLabel">تأكيد حذف</h4>
                        </div>

                        <div class="modal-body">
                            <p>انت علي اتعداد حذف هذه البيانات</p>
                            <p>هل تريد الأستمرار ؟</p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">رجوع</button>
                            <a class="btn btn-danger btn-ok">حذف</a>
                        </div>
                    </div>
                </div>
            </div>


