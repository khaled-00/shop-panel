     

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

                                        <?php
                                            echo'
                                            <a class="btn btn-default" style="margin-left: 5px" href="'.base_url().'admin/orders?payment=knet&num=3&lang=en" data-toggle="modal" >
                                            Knet
                                            </a>
                                            <a class="btn btn-default" style="margin-left: 5px" href="'.base_url().'admin/orders?payment=cash&num=1&lang=en" data-toggle="modal" >
                                            Cash
                                            </a>
                                            <a class="btn btn-default" style="margin-left: 5px" href="'.base_url().'admin/orders?payment=credit&num=2&lang=en" data-toggle="modal" >
                                            Credit Card
                                            </a>
                                            ';
                                            ?>
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                            <th>restaurant</th>
                                            <th>client name</th>
                                            <th>client phone</th>
                                            
                                            <th>sub total</th>
                                            <th>delivery price</th>
                                            <th>total price</th>
                                            <th>order status</th>
                                            <th>date</th>
                                            <th>order detail</th>
                                            <th>send order to driver</th>
                                            <th>option</th>
                                            <th>option</th>
                                            <th>option</th>
                                            <th>option</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php

                                        for ($i=0; $i < count($data); $i++) { 
                                            echo '
                                            <tr>
                                            <td>'.$data[$i]['order_id'].' </td>
                                            <td>'.$data[$i]['restaurant_name'].' </td>
                                            <td>'.$data[$i]['name'].' </td>
                                            <td>'.$data[$i]['mobile'].'</td>

                                            <td>'.$data[$i]['sub_total'].'</td>
                                            <td>'.$data[$i]['delivery_price'].'</td>
                                            <td>'.$data[$i]['total_price'].'</td>
                                            ';

                                            if($data[$i]['status'] == 0)
                                            {
                                                echo '<td>closed</td>';
                                            }
                                            elseif($data[$i]['status'] == 1)
                                            {
                                                echo '<td>open</td>';
                                            }
                                            elseif($data[$i]['status'] == 2)
                                            {
                                                echo '<td>complete</td>';
                                            }
                                            elseif($data[$i]['status'] == 3)
                                            {
                                                echo '<td>delivery</td>';
                                            }

                                            echo'
                                            <td> '.date("Y-m-d",$data[$i]['created_date']).'  </td>

                                            <td> 
                                            <a href="'.base_url().'admin/restaurant/order?orderid='.$data[$i]['order_id'].'&lang=en" style="color:white">
                                            <button class="btn btn-info"
                                            
                                            </button>
                                               order detail </a>
                                             </td>

                                             <td> 
                                            <a href="'.base_url().'admin/orders/to_driver?orderid='.$data[$i]['order_id'].'&lang=en" style="color:white">
                                            <button class="btn btn-info"
                                            
                                            </button>
                                              Send to driver</a>
                                             </td>

                                            ';


                                            
                                            
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/orders/close?id='.$data[$i]['order_id'].'&status=0&lang=en" data-toggle="modal" data-target="#confirm-delete">
                                            close order
                                            </button>
                                            </td>

                                                ';

                                                 echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/orders/close?id='.$data[$i]['order_id'].'&status=2&lang=en" data-toggle="modal" data-target="#confirm-delete">
                                            complete order
                                            </button>
                                            </td>

                                                ';
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/orders/close?id='.$data[$i]['order_id'].'&status=1&lang=en" data-toggle="modal" data-target="#confirm-delete">
                                            put it in holding
                                            </button>
                                            </td>

                                                ';
                                                echo '
                                            <td> 
                                            <button class="btn-sm btn-default" data-href="'.base_url().'admin/orders/close?id='.$data[$i]['order_id'].'&status=3&lang=en" data-toggle="modal" data-target="#confirm-delete">
                                            delivery
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
    
