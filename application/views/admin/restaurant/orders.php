     

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
                                            <th>اسم المطعم</th>
                                            <th>اسم المستخدم</th>
                                            <th>رقم هاتف المستخدم</th>
                                            
                                            <th>سعر الطلب الجزئي</th>
                                            <th>سعر الشحن</th>
                                            <th>سعر الطلب الكلي</th>
                                            <th>حالة الطلب</th>
                                            <th>تاريخ انشاء الطلب</th>
                                            <th>تفاصيل الطلب</th>
                                            <th>عمليات</th>
                                            <th>عمليات</th>
                                            <th>عمليات</th>
                                            <th>عمليات</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]['restaurant_name'].' </td>
                                            <td>'.$data[$i]['name'].' </td>
                                            <td>'.$data[$i]['mobile'].'</td>

                                            <td>'.$data[$i]['sub_total'].'</td>
                                            <td>'.$data[$i]['delivery_price'].'</td>
                                            <td>'.$data[$i]['total_price'].'</td>
                                            ';

                                            if($data[$i]['status'] == 0)
                                            {
                                                echo '<td>مغلق</td>';
                                            }
                                            elseif($data[$i]['status'] == 1)
                                            {
                                                echo '<td>مفتوح</td>';
                                            }
                                            elseif($data[$i]['status'] == 2)
                                            {
                                                echo '<td>مكتمل</td>';
                                            }
                                            elseif($data[$i]['status'] == 3)
                                            {
                                                echo '<td>تم الشحن</td>';
                                            }

                                            echo'
                                            <td> '.date("Y-m-d",$data[$i]['created_date']).'  </td>

                                            <td> 
                                            <a href="'.base_url().'admin/restaurant/order?orderid='.$data[$i]['order_id'].'" style="color:white">
                                            <button class="btn btn-info"
                                            
                                            </button>
                                               تفاصيل الطلب </a>
                                             </td>

                                            ';


                                            
                                            
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/restaurant/change_order?id='.$data[$i]['order_id'].'&status=0" data-toggle="modal" data-target="#confirm-delete">
                                            اغلاق الطلب
                                            </button>
                                            </td>

                                                ';

                                                 echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/restaurant/change_order?id='.$data[$i]['order_id'].'&status=2" data-toggle="modal" data-target="#confirm-delete">
                                            تم الانتهاء من الطلب
                                            </button>
                                            </td>

                                                ';
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/restaurant/change_order?id='.$data[$i]['order_id'].'&status=1" data-toggle="modal" data-target="#confirm-delete">
                                            وضع الطلب في الانتظار
                                            </button>
                                            </td>

                                                ';
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/restaurant/change_order?id='.$data[$i]['order_id'].'&status=3" data-toggle="modal" data-target="#confirm-delete">
                                            تم الشحن
                                            </button>
                                            </td>

                                                ';
                                            

                                            echo'
                                            
                                            </tr>
                                            ';
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
                    <h4 class="modal-title" id="myModalLabel">تأكيد اغلاق</h4>
                </div>
            
                <div class="modal-body">
                    <p>انت علي استعداد غلق هذه البيانات</p>
                    <p>هل تريد الأستمرار ؟</p>
                   
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">رجوع</button>
                    <a class="btn btn-danger btn-ok">تأكيد</a>
                </div>
            </div>
        </div>
    </div>

   





               
               
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>

    <script type="text/javascript">
        
         $(document).ready(function() {
        //table tools example
        

        //re-order columns
        var table2 = $('#table2').dataTable();

        new $.fn.dataTable.ColReorder(table2);


    });
    </script>
    
