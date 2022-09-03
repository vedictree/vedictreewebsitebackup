<?php
 $this->load->view('header');
 $monthdata =  required_data();

?>

  <link rel="" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<style type="text/css">
    .thclass{
        width:400px;
    }
</style>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('topbar'); ?>
            <?php $this->load->view('sidebar'); ?>

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="card">
                                      <div class="card-body">
                                        <h1>Physical School Fees Module</h1>
                                       
                                        <form method="POST" action="<?php echo base_url('dashboard/editfeesphysical'); ?>">
                                            <input type="hidden" value="<?php echo $list_Fees[0]['feesid']; ?>" name="feesid">
                                            <div class="row">
                                            
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Form Number  </label> <span style="color:red">*</span>
                                                            <input type="number" class="form-control" id="form_number" value="<?php echo $list_Fees[0]['form_number']; ?>" name="form_number"  placeholder="Form number ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('form_number');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Student Name  </label> <span style="color:red">*</span>
                                                            <input type="text" class="form-control" id="student_name" value="<?php echo $list_Fees[0]['student_name']; ?>" name="student_name"  placeholder="Student Name ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('student_name');?></span>
                                                    </div>
                                                </div>
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Mobile Number  </label> <span style="color:red">*</span>
                                                            <input type="text" class="form-control" maxlength="10" value="<?php echo $list_Fees[0]['student_mobile']; ?>" id="student_mobile"  name="student_mobile" placeholder="Mobile Number ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('student_mobile');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Address  </label> <span style="color:red">*</span>
                                                            <input type="text" class="form-control " name="student_address" value="<?php echo $list_Fees[0]['student_address']; ?>"  placeholder="Address">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('student_address');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Form Status  </label> <span style="color:red">*</span>
                                                            <input type="text" class="form-control" name="formstatus" value="<?php echo $list_Fees[0]['formstatus']; ?>" placeholder="Enter form status" >
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('formstatus');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Admission Date  </label> <span style="color:red">*</span>
                                                            <input type="date" class="form-control" name="admissiondate" value="<?php echo $list_Fees[0]['admissiondate']; ?>" placeholder="Enter Admission Date" >
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('admissiondate');?></span>
                                                    </div>
                                                </div>
                                               <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Remark Fees   </label> <span style="color:red">*</span>
                                                            <input type="text" class="form-control" name="remark_fees" value="<?php echo $list_Fees[0]['remark_fees']; ?>" placeholder="Enter Remark Fees" >
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('remark_fees');?></span>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-md-6">
                                                        <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Class Name</label> <span style="color:red">*</span>
                                                            <select type="text" class="form-control " id="" name="fk_classId" >
                                                                <option value="<?php echo $list_Fees[0]['fk_classId']; ?>">
                                                                    
                                                                    <?php
                                                                    
                                                                    if($list_Fees[0]['fk_classId']==1){
                                                                        $className = "Play Group";
                                                                    }else if($list_Fees[0]['fk_classId']==2){
                                                                        $className = "Nursery";
                                                                    }else if($list_Fees[0]['fk_classId']==3){
                                                                        $className = "Junior";
                                                                    }else if($list_Fees[0]['fk_classId']==4){
                                                                        $className = "Senior";
                                                                    }else if($list_Fees[0]['fk_classId']==5){
                                                                        $className = "Grade 1";
                                                                    }else if($list_Fees[0]['fk_classId']==6){
                                                                        $className = "Grade 2";
                                                                    }else if($list_Fees[0]['fk_classId']==7){
                                                                        $className = "Grade 3";
                                                                    }else if($list_Fees[0]['fk_classId']==8){
                                                                        $className = "Grade 4";
                                                                    }else{
                                                                        $className = "Select Class Name";
                                                                    }

                                                                    echo $className; 
                                                                    
                                                                    ?>
                                                                    
                                                                     </option>
                                                              
                                                                 <option value="1" >Play Group</option>
                                                                <option value="2" >Nursery</option>
                                                                <option value="3" >Junior</option>
                                                                <option value="4" >Senior</option>
                                                                <option value="5" >Grade 1</option>
                                                                <option value="6" >Grade 2</option>
                                                                <option value="7" >Grade 3</option>
                                                                <option value="8" >Grade 4</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                           <div class="form-group">
                                                            <label>Book Taken </label> <span style="color:red">*</span>
                                                                <select type="text" class="form-control " id="" name="book_status" >
                                                                    <option value="<?php echo $list_Fees[0]['book_status']; ?>" ><?php echo $list_Fees[0]['book_status']; ?></option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select> 
                                                            </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                           <div class="form-group">
                                                            <label>Bag Taken </label> <span style="color:red">*</span>
                                                                <select type="text" class="form-control " id="" name="bag_status" >
                                                                    <option value="<?php echo $list_Fees[0]['bag_status']; ?>" ><?php echo $list_Fees[0]['bag_status']; ?></option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select> 
                                                            </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                           <div class="form-group">
                                                            <label>Uniform Taken </label> <span style="color:red">*</span>
                                                                <select type="text" class="form-control " id="" name="uniform_status" >
                                                                    <option value="<?php echo $list_Fees[0]['uniform_status']; ?>" ><?php echo $list_Fees[0]['uniform_status']; ?></option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select> 
                                                            </div>
                                                </div>
                                                
                                                
                                               <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Offer </label> 
                                                            <input type="text" value="<?php echo $list_Fees[0]['remark_offer']; ?>" class="form-control" name="remark_offer" placeholder="Enter Offer">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('remark_offer');?></span>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Total Fees </label> <span style="color:red">*</span>
                                                            <input type="number" value="<?php echo $list_Fees[0]['total_fees']; ?>" class="form-control total_fees" name="total_fees" placeholder="Enter Total Fees">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('total_fees');?></span>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Fees Received </label> <span style="color:red">*</span>
                                                            <input type="number" readonly value="<?php echo $list_Fees[0]['fees_received']; ?>" class="form-control fees_received" name="fees_received" placeholder="Enter Received Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('fees_received');?></span>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Pending Fees    </label> <span style="color:red">*</span>
                                                            <input type="number" readonly value="<?php echo $list_Fees[0]['pending_fees']; ?>" class="form-control pending_fees" name="pending_fees" placeholder="Enter Pending Fees" ="">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('pending_fees');?></span>
                                                    </div>
                                                </div>
                                                
                                               <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Discount Fees    </label> <span style="color:red">*</span>
                                                            <input type="number" value="<?php echo $list_Fees[0]['discount']; ?>" class="form-control" name="discount" placeholder="Enter Discount Fees" >
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('discount');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Gender </label>
                                                            <span><input type="radio" name="gender" value="Male" checked="checked" >Male</span>
                                                            <span><input type="radio"  name="gender" value="Female" >Female</span>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('final_fees');?></span>
                                                    </div>
                                                </div>
                                                
                                               
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter first installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['first_installment']; ?>" class="form-control" name="first_installment" placeholder="Enter first installment Fees" ="">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('first_installment');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>first installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['first_installment_date']; ?>" class="form-control" name="first_installment_date" placeholder="first_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('first_installment_date');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Second installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['second_installment']; ?>" class="form-control" name="second_installment" placeholder="Enter Second installment Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('second_installment');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>second installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['second_installment_date']; ?>" class="form-control" name="second_installment_date" placeholder="second_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('second_installment_date');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Third installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['third_installment']; ?>" class="form-control" name="third_installment" placeholder="Enter Third installment Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('third_installment');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>third installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['third_installment_date']; ?>" class="form-control" name="third_installment_date" placeholder="third_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('third_installment_date');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Four installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['four_installment']; ?>" class="form-control" name="four_installment" placeholder="Enter Four installment Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('four_installment');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>four installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['four_installment_date']; ?>" class="form-control" name="four_installment_date" placeholder="four_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('four_installment_date');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter five installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['five_installment']; ?>" class="form-control" name="five_installment" placeholder="Enter Five installment Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('five_installment');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>five installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['five_installment_date']; ?>" class="form-control" name="five_installment_date" placeholder="five_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('five_installment_date');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Six installment Fees    </label>
                                                            <input type="number" value="<?php echo $list_Fees[0]['six_installment']; ?>" class="form-control" name="six_installment" placeholder="Enter Six installment Fees ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('six_installment');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>six installment date    </label>
                                                            <input type="date" value="<?php echo $list_Fees[0]['six_installment_date']; ?>" class="form-control" name="six_installment_date" placeholder="six_installment_date">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('six_installment_date');?></span>
                                                    </div>
                                                </div>
                                                
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>Enter Seven installment Fees    </label>-->
                                                <!--            <input type="number" value="<?php echo set_value('seven_installment')?>" class="form-control" name="seven_installment" placeholder="Enter Seven installment Fees ">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('seven_installment');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>seven installment date    </label>-->
                                                <!--            <input type="date" value="<?php echo set_value('seven_installment_date')?>" class="form-control" name="seven_installment_date" placeholder="seven_installment_date">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('seven_installment_date');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>Enter Eight installment Fees    </label>-->
                                                <!--            <input type="number" value="<?php echo set_value('eight_installment')?>" class="form-control" name="eight_installment" placeholder="Enter Eight installment Fees ">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('eight_installment');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>eight installment date    </label>-->
                                                <!--            <input type="date" value="<?php echo set_value('eight_installment_date')?>" class="form-control" name="eight_installment_date" placeholder="eight_installment_date">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('eight_installment_date');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>Enter Nine installment Fees    </label>-->
                                                <!--            <input type="number" value="<?php echo set_value('nine_installment')?>" class="form-control" name="nine_installment" placeholder="Enter Nine installment Fees ">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('nine_installment');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>nine installment date    </label>-->
                                                <!--            <input type="date" value="<?php echo set_value('nine_installment_date')?>" class="form-control" name="nine_installment_date" placeholder="nine_installment_date">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('nine_installment_date');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>Enter Ten installment Fees    </label>-->
                                                <!--            <input type="number" value="<?php echo set_value('ten_installment')?>" class="form-control" name="ten_installment" placeholder="Enter Ten installment Fees ">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('ten_installment');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-xl-4 col-md-6">-->
                                                <!--   <div class="form-group" >-->
                                                <!--        <div class="form-group">-->
                                                <!--            <label>ten installment date    </label>-->
                                                <!--            <input type="date" value="<?php echo set_value('ten_installment_date')?>" class="form-control" name="ten_installment_date" placeholder="ten_installment_date">-->
                                                <!--        </div>-->
                                                <!--        <span style="color:red"><?php echo form_error('ten_installment_date');?></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                  <input type="hidden" value="<?php echo $list_Fees[0]['feesid']; ?>" name="feesid">
                                                <div class="col-xl-12 col-md-6" style="top:12px;">
                                                    <div class="form-group" >
                                                       <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">update</button>
                                                    </div>
                                                </div>
                                            
                                          </div>
                                        </form>
                                      </div>
                                </div>
                            </div>
                      

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

        <!-- END layout-wrapper -->

       <?php $this->load->view('footd');?>
       
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>







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
      
      setTimeout(function() {
                    window.location.href = '<?php echo base_url('dashboard/add_fees_physical')?>';
       }, 2000);

  </script>

<?php } ?>

<script>


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});


    function check() {
        if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
    }
</script>


<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script type="text/javascript">

$(document).ready(function () {
    $('#datatable1').DataTable({
        scrollX: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        
    });
});


 $(document).ready(function(){
        
        
        $(".fees_received").keyup(function(){

            var fees_received = parseInt($(".fees_received").val());
            var total_fees = parseInt($(".total_fees").val());
           
            var final_fees = parseInt(total_fees - fees_received );
            $(".pending_fees").val(final_fees);

        });
        
         $(".total_fees").keyup(function(){

            var fees_received = parseInt($(".fees_received").val());
            var total_fees = parseInt($(".total_fees").val());
            var final_fees = parseInt(total_fees - fees_received );
            $(".pending_fees").val(final_fees);

        });
        
        
    });
</script>