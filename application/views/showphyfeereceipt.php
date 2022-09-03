<?php
 $this->load->view('header');
?>
<style type="text/css">
    .thclass{
        width:400px;
    }
    
</style>
      
        <div id="layout-wrapper">
            <?php $this->load->view('topbar'); ?>
            <?php $this->load->view('sidebar'); ?>

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="card">
                              <div class="card-body">
                                  <h2>Fees Details</h2>
                                  
                              </div>
                        </div>
                           
                        <div class="row">
                            <div class="col-12">
                                <div class="card"  style="overflow-x: auto">
                                    <div class="card-body">
                                      
                                        <table id="datatables" class="table table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th class="thclass">#Id</th>
                                               
                                                <th class="thclass">Student Name</th>
                                                <th class="thclass">Student Class</th>
                                                <th class="thclass">Paid Amount</th>
                                                <th class="thclass">Balance Amount</th>
                                                <th class="thclass">Date</th>
                                                
                                            </tr>
                                            </thead>  
                                            <tbody>
                                               <?php if($showphyfeereceipt){
                                                $i=1;
                                                $total =array();
                                                foreach ($showphyfeereceipt as $key => $value) { 
                                                    // echo "<pre>";
                                                    // print_r($value);
                                                    $total[] = $value['finalamt'];
                                                ?> 
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $value['studName']; ?>
                                                <td><?php echo $value['grade']; ?></td>
                                                <td><?php echo $value['finalamt']; ?></td>
                                                <td><?php echo $value['Balanceamt']; ?></td>
                                                <td><?php echo $value['currentdate']; ?></td>
                                                
                                            </tr>
                                               <?php }} ?>
                                            
                                            </tbody>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><?php echo array_sum($total); ?></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
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

       <script type="text/javascript">
       
        $(document).ready(function() {
         $('#datatables').dataTable( {
            "iDisplayLength": 10,
             "deferRender": true ,
             stateSave: true
         }
             );
         } );



       </script>

<?php if(isset($error)){ ?>
  <script type="text/javascript">
    color = Math.floor((Math.random() * 4) + 1);

      $.notify({
          icon: "tim-icons icon-bell-55",
          message: "<?php if(isset($error)){ echo $error['error']; } ?>"

        },{
            type: type[color],
            timer: 8000,
        });
      
    //   setTimeout(function() {
    //                 window.location.href = '<?php echo base_url('dashboard/showphyfeereceipt')?>';
    //   }, 2000);
       
       
  </script>

<?php } ?>

<script>
    function check() {
        if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
    }
    
    function checkstu() {
        if(confirm("Are You Sure You Want Activate Student ? ")==true)
        {
            return true;
        }else{
            return false;
        }
    }
    
    
</script>