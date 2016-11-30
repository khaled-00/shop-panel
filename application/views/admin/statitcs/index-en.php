     

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
                                        <th>number of restaurant</th><th>number of clients</th><th>number of orders</th>
                                      



                                   </tr>
                               </thead>
                               <tbody>

                                        <?php

                                        
                                            echo '
                                            <tr>
                                            <td>'.$restaurant.'</td>
                                            <td>'.$users.'</td>
                                            <td>'.$orders.'</td>
                                            ';

                                            echo'
                                           
                                            </tr> '; 
                                            
                                        

                                      ?>

                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- END COLUMN FILTER DATA TABLE -->




                </div>
            </div>
            <!-- /main -->

