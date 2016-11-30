     

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
                                        <th>username</th><th>password</th><th>email</th><th>mobile</th><th>address</th><th>status</th><th>usertype</th><th>date_created</th><th>last_login</th><th>lat</th><th>lng</th><th>img</th><th>Edit</th>
                                       <th>Delete</th>



                                   </tr>
                               </thead>
                               <tbody>

                                        <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                        
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]["username"].'</td>
                                            <td>'.$data[$i]["password"].'</td>
                                            <td>'.$data[$i]["email"].'</td>
                                            <td>'.$data[$i]["mobile"].'</td>
                                            <td>'.$data[$i]["address"].'</td>
                                            <td>'.$data[$i]["status"].'</td>
                                            <td>'.$data[$i]["usertype"].'</td>
                                            <td>'.$data[$i]["date_created"].'</td>
                                            <td>'.$data[$i]["last_login"].'</td>
                                            <td>'.$data[$i]["lat"].'</td>
                                            <td>'.$data[$i]["lng"].'</td>
                                            <td><img src="'.$data[$i]["img"].'" height ="50" > </td>
                                            
                                            <td> <a href="'.base_url().'admin/users/edit?id='.$data[$i]["id"].'" > <img src="'.base_url().'rec/img/edit.png" alt=""> </a> 
                                            </td>

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/users/delete?id='.$data[$i]["id"].' " data-toggle="modal" data-target="#confirm-delete">
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


