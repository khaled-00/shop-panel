     

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
                                        <th>name arabic</th><th>name english</th><th>description</th><th>english description</th><th>menu</th><th>restaurant</th><th>food type</th><th>price</th><th>status</th><th>image</th><th>update</th>
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
                                            <td>'.$data[$i]["description_ar"].'</td>
                                            <td>'.$data[$i]["description_en"].'</td>
                                            <td>'.$data[$i]["menu_id"].'</td>
                                            <td>'.$data[$i]["restaurant_id"].'</td>
                                            <td>'.$data[$i]["food_type_id"].'</td>
                                            <td>'.$data[$i]["price"].'</td>
                                            ';

                                            if($data[$i]['status'] == 0)
                                            {
                                                echo'<td>not available</td>';
                                            }
                                            else 
                                            {
                                                echo'<td>available</td>';
                                            }
                                            echo'
                                            <td><img src="'.$data[$i]["img"].'" height ="50" > </td>
                                            
                                            <td> <a href="'.base_url().'admin/meals/edit?id='.$data[$i]["id"].'&lang=en" > <img src="'.base_url().'rec/img/edit.png" alt=""> </a> 
                                            </td>

                                            <td> 
                                            <button class="btn btn-danger" data-href="
                                            '.base_url().'admin/meals/delete?id='.$data[$i]["id"].'&lang=en " data-toggle="modal" data-target="#confirm-delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> delete
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

