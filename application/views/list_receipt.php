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
                                  <h2>Search Student Here</h2>
                                  <a href="<?php echo base_url('dashboard/show_fees_physical');?>" style="float:right;top:-40px;position:relative;" class="btn btn-primary">Refresh</a>
                                  
                                <form method="POST" action="<?php echo base_url('dashboard/filter_fees_physical'); ?>">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Form Number</label>
                                                <input type="number" class="form-control" value="<?php echo set_value('form_number');  ?>" name="form_number" maxlength="10" id="form_number" placeholder="Enter  Form Number">
                                                <span style="color:red"><?php echo form_error('form_number');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Mobile Number</label>
                                                <input type="number" class="form-control" value="<?php echo set_value('student_mobile');  ?>" name="student_mobile" maxlength="10" id="student_mobile" placeholder="Enter  Mobile">
                                                <span style="color:red"><?php echo form_error('student_mobile');?></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-xl-12 col-md-6" style="top:12px;">
                                            <div class="form-group" >
                                               <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                              </div>
                        </div>
                           
                        <div class="row">
                            <div class="col-12">
                                <div class="card"  style="overflow-x: auto">
                                    <div class="card-body">
                                        <h4 class="card-title">Student List</h4>
                                        <table id="datatables" class="table table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th class="thclass">#Id</th>
                                                <th class="thclass">Date</th>
                                                <th class="thclass">academic year</th>
                                                <th class="thclass">receiptnumber </th>
                                                <th class="thclass">student Name</th>
                                              
                                                <th class="thclass">rupeesword</th>
                                                <th class="thclass">receivedthank</th>
                                                <th class="thclass">cash</th>
                                                <th class="thclass">Tranfer</th>
                                                <th class="thclass">Cheque</th>
                                                <th class="thclass">Cheque No</th>
                                                <th class="thclass">Transfer Date</th>
                                                <th class="thclass">Balance Amount</th>
                                                <th class="thclass">Branch No</th>
                                                <th class="thclass">Branch</th>
                                                <th class="thclass">grade</th>
                                                <th class="thclass">finalamt</th>
                                                <th class="thclass">Action</th>
                                                <th class="thclass">Show Receipt</th>
                                            </tr>
                                            </thead>  
                                            <tbody>
                                               <?php if($list_receipt){
                                                $i=1;
                                                foreach ($list_receipt as $key => $value) { 
                                                    // echo "<pre>";
                                                    // print_r($value);
                                                ?> 
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $value['currentdate']; ?>
                                                <td><?php echo $value['academicyear']; ?></td>
                                                <td><?php echo $value['receiptnumber']; ?></td>
                                                <td><?php echo $value['studName']; ?></td>
                                                <td><?php echo $value['rupeesword']; ?></td>
                                                <td><?php echo $value['receivedthank']; ?></td>
                                                <td><?php echo $value['cash']; ?></td>
                                                <td><?php echo $value['Transfer']; ?></td>
                                                <td><?php echo $value['Cheque']; ?></td>
                                                <td><?php echo $value['ChequeNo']; ?></td>
                                                <td><?php echo $value['TransferDate']; ?></td>
                                                <td><?php echo $value['Balanceamt']; ?></td>
                                                <td><?php echo $value['BranchNo']; ?></td>
                                                <td><?php echo $value['Branch']; ?></td>
                                                <td><?php echo $value['grade']; ?></td>
                                                <td><?php echo $value['finalamt']; ?></td>
                                                <td>
                                                    <form class="" method="POST" onclick="return check();" action="<?php echo base_url('dashboard/deletereceptfeesid');?>">
                                                        <input type="hidden" value="<?php echo $value['feeId'];?>" name="feeId">
                                                        <button  type="submit" name="submit" value="submit" class="btn btn-sm p-0"><i style="font-size: 25px;position: relative;top: 0px;color:#626ed4;" class="mdi mdi-delete"></i></button>
                                                    </form>                                                    
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('dashboard/show_fees_receipt/'.$value['feeId']);?>">Print Receipt</a>
                                                </td>
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

       <script type="text/javascript">
       
        $(document).ready(function() {
         $('#datatables').dataTable( {
            "iDisplayLength": 10,
             "deferRender": true ,
             stateSave: true
         }
             );
         } );



           $(document).ready(function() {

                $(".mdi-delete").click(function(){

                    var studId =  $(this).attr('id');
                    $.ajax({
                        type:"POST",
                        data:{studId:studId},
                        url:"<?php echo base_url('dashboard/deletestudid')?>",
                        success:function(res){

                            if(res==1){
                                swal({
                                      title:"Student Id is Deleted!",
                                      text: "You clicked the button!",
                                      icon: "success",
                                      button: "ok",
                                    });
                            }
                            setTimeout(function(){
                               window.location.reload(1);
                            }, 5000);

                        },
                        error:function(error){
                            console.log(error);
                        }
                    });
                });
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
    //                 window.location.href = '<?php echo base_url('dashboard/getstudlist')?>';
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