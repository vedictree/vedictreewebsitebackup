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
                                                <th class="thclass">Form Number</th>
                                                <th class="thclass">Student Name</th>
                                                <th class="thclass">Student Mobile</th>
                                                <th class="thclass">student Address</th>
                                                <th class="thclass">Admission Date</th>
                                                <th class="thclass">Fee Remark</th>
                                                <th class="thclass">Class Name</th>
                                                <th class="thclass">Remark offer</th>
                                                <th class="thclass">Book Status</th>
                                                <th class="thclass">Bag Status</th>
                                                <th class="thclass">Uniform Status</th>
                                                <th class="thclass">Total Fees</th>
                                                <th class="thclass">Pending Fees</th>
                                                <th class="thclass">Fees Received </th>
                                                <th class="thclass">Gender</th>
                                                <th class="thclass">Discount</th>
                                                <th class="thclass">Other</th>
                                                <th class="thclass">First Installment</th>
                                                <th class="thclass">Second Installment</th>
                                                <th class="thclass">Third Installment</th>
                                                <th class="thclass">four Installment</th>
                                                <th class="thclass">Five Installment</th>
                                                <th class="thclass">Six Installment</th>
                                                <th class="thclass">First Installment Date</th>
                                                <th class="thclass">Second Installment Date</th>
                                                <th class="thclass">Third Installment Date</th>
                                                <th class="thclass">four Installment Date</th>
                                                <th class="thclass">Five Installment Date</th>
                                                <th class="thclass">Six Installment Date</th>
                                                <th class="thclass">Register Date</th>
                                                <th class="thclass">Action</th>
                                                <th class="thclass">Fee Receipt</th>
                                            </tr>
                                            </thead>  
                                            <tbody>
                                               <?php if($list_Fees){
                                                $i=1;
                                                foreach ($list_Fees as $key => $value) { 
                                                    // echo "<pre>";
                                                    // print_r($value);
                                                ?> 
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $value['form_number']; ?>
                                                <td><?php echo $value['student_name']; ?></td>
                                                <td><?php echo $value['student_mobile']; ?></td>
                                                <td><?php echo $value['student_address']; ?></td>
                                                <td><?php echo $value['admissiondate']; ?></td>
                                                <td><?php echo $value['remark_fees']; ?></td>
                                                <td><?php echo $value['fk_classId']; ?></td>
                                                <td><?php echo $value['remark_offer']; ?></td>
                                                <td><?php echo $value['book_status']; ?></td>
                                                <td><?php echo $value['bag_status']; ?></td>
                                                <td><?php echo $value['uniform_status']; ?></td>
                                                <td><?php echo $value['total_fees']; ?></td>
                                                <td><?php echo $value['pending_fees']; ?></td>
                                                <td><?php echo $value['fees_received']; ?></td>
                                                <td><?php echo $value['gender']; ?></td>
                                                <td><?php echo $value['discount']; ?></td>
                                                <td><?php echo $value['other']; ?></td>
                                                
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['first_installment'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['second_installment'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['third_installment']; }?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['four_installment'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['five_installment'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0.00"; }else{ echo $value['six_installment'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['first_installment_date'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['second_installment_date'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['third_installment_date'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['four_installment_date'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['five_installment_date'];} ?></td>
                                                <td><?php  if($value['pending_fees']=="0.00"){ echo "0000-00-00"; }else{ echo $value['six_installment_date'];} ?></td>
                                                <td><?php echo $value['createdDT']; ?></td>
                                                
                                                <td>
                                                        <a href="<?php echo base_url('dashboard/fees_receipt/'.$value['feesid'])?>">Receipt</a>
                                                        <a href="<?php echo base_url('dashboard/edit_physical_fess_data/'.$value['feesid'])?>"><i style="font-size:25px;" class="mdi mdi-account-edit-outline"></i></a>
                                                        <form class="" method="POST" onclick="return check();" action="<?php echo base_url('dashboard/deletephysicalfeesId');?>">
                                                        <input type="hidden" value="<?php echo $value['feesid'];?>" name="feesid">
                                                        <button  type="submit" name="submit" value="submit" class="btn btn-sm p-0"><i style="font-size: 25px;position: relative;top: 0px;color:#626ed4;" class="mdi mdi-delete"></i></button>
                                                        </form>                                                    
                                                </td>
                                                <td>
                                                        
                                            <a target="_blank" href="<?php echo base_url('dashboard/showphyfeereceipt/'.$value['feesid'])?>"><img style="position: relative; width: 50px;height: 50px;" src="https://www.vedictreeschool.com//assets/images/receipt.gif"></a>
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