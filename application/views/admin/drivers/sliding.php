     

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
                                        <th style='text-align: right;'>N</th>
                                        <th style='text-align: right;'>الصورة</th>
                                        <th style='text-align: right;'>حذف </th>
                                   </tr>
                               </thead>
                               <tbody>
                                        <?php
                                        $num = 0;
                                        
                                        foreach ($data as $value) 
                                        {
                                            //SET DATA

                                            // Img
                                            $var1 = "../Uplods_files/slides/" . $value->img ;
                                            
                                            echo '
                                            <tr>
                                            <td>'.$num.'</td>
                                           
                                            <td>
                                                <img src="'. $var1.'" height ="150" width="300px"> 
                                            </td>';


                                            echo'
                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'slider/delete_slide?id='.$value->id.' " data-toggle="modal" data-target="#confirm-delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> حذف
                                            </button>
                                            </td>
                                            ';

                                            /* delet if admin 
                                            if($session['usertype'] == 1)
                                            {
                                                echo'

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/restaurant/delete?id='.$value->id.' " data-toggle="modal" data-target="#confirm-delete">
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
                                            */
                                           $num++;
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


