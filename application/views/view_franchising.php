<?php
 $this->load->view('header');

?>
<style type="text/css">
    .thclass{
        width:400px;
    }
    .badge-success {
    color: #fff;
    background-color: #02a499;
    height: 25px;
    width: 113px;
    margin-top: 8px;
    border-radius: 26px;
    top-padding: 75px;
    padding-top: 8px;
}
    .badge-warning {
    color: #fff;
    background-color: #f8ad25;
    height: 25px;
    width: 113px;
    margin-top: 8px;
    border-radius: 26px;
    top-padding: 75px;
    padding-top: 8px;
}
.href_tag {

    color: #007FFF;
}
.red-color {
color:red;
}
 
</style>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('topbar'); ?>
            <?php $this->load->view('sidebar'); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">franchise Leads</h4>
                                        <table id="datatable" class="table table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <!-- <th class="thclass">#Id</th> -->
                                                <th class="thclass"> Name</th>
                                                <th class="thclass"> Mobile</th>
                                                <th class="thclass"> Email</th>
                                                <th class="thclass"> City</th>
                                                <th class="thclass"> State</th>
                                                <th class="thclass"> Query</th>
                                                <th class="thclass"> Created at</th>
                                            </tr>
                                            </thead>  
                                        <tbody>
                                            <?php  if($leads){
                                                    $i=1;
                                                    foreach ($leads as $key => $value) { ?> 
                                                <tr>
                                                   <!--  <td><?php echo $i++;?></td> -->
                                                    <td><?php echo $value['full_name']; ?></td>
                                                    <td><?php echo $value['mobile_no']; ?></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td><?php echo $value['city']; ?></td>
                                                    <td><?php echo $value['state']; ?></td>
                                                    <td><?php echo $value['query']; ?></td>
                                                    <td><?php  echo $value['created_at']; ?></td>
                                                           
                                                
                                                          
                                                </tr>
                                            <?php }} ?> 
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


            

                
              <?php $this->load->view('footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       <?php $this->load->view('footd');?>
       

