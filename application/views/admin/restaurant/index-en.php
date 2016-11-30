     

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
                                        <th>Name arabic</th><th>name english</th><th>rate</th><th>minmum order</th><th>work from</th><th>work to</th><th>delivery time</th><th>restaurant status</th><th>image</th><th>show comments</th><th>update</th>
                                       <th>delete</th>




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
                                                echo'<td> <a href="'.base_url().'admin/restaurant/active?id='.$data[$i]['id'].'&status=0&lang=en"><img src="'.base_url().'rec/img/remove.png" height="35" > </td>';
                                            }
                                            else 
                                            {
                                                echo'<td> <a href="'.base_url().'admin/restaurant/active?id='.$data[$i]['id'].'&status=1&lang=en"><img src="'.base_url().'rec/img/paid.png" height="35" > </td>';
                                            }


                                            echo'
                                            <td><img src="'.$data[$i]["img"].'" height ="50" > </td>
                                            <td> <a class="btn btn-default" href="'.base_url().'admin/restaurant/comment_admin?id='.$data[$i]["id"].'&lang=en" >Show Comments</a> 
                                            </td>
                                            <td> <a href="'.base_url().'admin/restaurant/edit?id='.$data[$i]["id"].'&lang=en" > <img src="'.base_url().'rec/img/edit.png" alt=""> </a> 
                                            </td>
                                            ';

                                            if($session['usertype'] == 1)
                                            {
                                                echo'

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/restaurant/delete?id='.$data[$i]["id"].'&lang=en " data-toggle="modal" data-target="#confirm-delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> delete
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
                            <h4 class="modal-title" id="myModalLabel">Confirm</h4>
                        </div>

                        <div class="modal-body">
                            <p>Confirm</p>
                            <p></p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                            <a class="btn btn-danger btn-ok">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>


