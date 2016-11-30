     

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
                                        <th>#</th><th>اسم المستخدم</th><th>كلمة السر</th><th>البريد الالكتروني</th><th>رقم الهاتف</th><th>العنوان</th><th>الصورة</th><th>الاسم الاول</th><th>الاسم الثاني</th><th>التقييم</th><th>يعمل من</th><th>ينهي العمل في </th><th>متاح</th><th>نوع الفني</th><th>عدد الاعمال المنجزه</th><th>تعديل</th>
                                       <th>حذف</th>



                                   </tr>
                               </thead>
                               <tbody>

                                        <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                        
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]["provider_id"].'</td>
                                            <td>'.$data[$i]["username"].'</td>
                                            <td>'.$data[$i]["password"].'</td>
                                            <td>'.$data[$i]["email"].'</td>
                                            <td>'.$data[$i]["mobile"].'</td>
                                            <td>'.$data[$i]["address"].'</td>
                                            
                                            <td><img src="'.$data[$i]["img"].'" height ="50" > </td>
                                            <td>'.$data[$i]["first_name"].'</td>
                                            <td>'.$data[$i]["last_name"].'</td>
                                            <td>'.$data[$i]["rate"].'</td>
                                            <td>'.$data[$i]["start_at"].'am</td>
                                            <td>'.$data[$i]["end_at"].'pm</td>';
                                             
                                           if ($data[$i]["available"] == 0) 
                                           {
                                              echo "<td>غير متاح</td>";
                                           }
                                           else 
                                           {
                                              echo  "<td>متاح</td>";
                                           }

                                           if ($data[$i]["provider_type"] == 0) 
                                           {
                                              echo "<td>فرد</td>";
                                           }
                                           else 
                                           {
                                              echo  "<td>مؤسسة</td>";
                                           }
                                            
                                            

                                            echo'
                                            <td>'.$data[$i]["commercial_num"].'</td>
                                            
                                            <td> <a href="'.base_url().'admin/providers/edit?id='.$data[$i]["id"].'" > <img src="'.base_url().'rec/img/edit.png" alt=""> </a> 
                                            </td>

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/providers/delete?id='.$data[$i]["id"].' " data-toggle="modal" data-target="#confirm-delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> حذف
                                            </button>
                                            </td>
                                            </tr> '; 
                                            
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
                            <p>انت علي استعداد حذف هذه البيانات</p>
                            <p>هل تريد الأستمرار ؟</p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">رجوع</button>
                            <a class="btn btn-danger btn-ok">حذف</a>
                        </div>
                    </div>
                </div>
            </div>


