<?php
 $this->load->view('header');
?>
<style type="text/css">
    .thclass{
        width:400px;
    }
     .day-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        margin: 10px 0px;
    }
    .day-grid .align-both{
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
    }
    input[type=checkbox], input[type=radio] {
        margin-left: 5px;
    }
    label {
        margin-bottom: 0 !important;
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
                            <div class="col-md-12">
                                <div class="card">
                                      <div class="card-body">
                                        <div class="col-md-6">
                                        <form method="POST" action="<?php echo base_url("dashboard/registration_form") ?>" >
                                        <div class="signup-box">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="required-label">Enter Full Name</label>
                                                        <input type="text" name="teacherName" class="form-control" value="<?php echo set_value('teacherName');?>" placeholder="Enter  Full Name">
                                                    </div>
                                                    <span style="color:red"><?php echo form_error('teacherName');?></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="required-label">Enter Mobile</label>
                                                        <input type="number" value="<?php echo set_value('teacherMobile');?>"  name="teacherMobile" class="form-control" placeholder="Enter Phone">
                                                        <span style="color:red"><?php echo form_error('teacherMobile');?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="required-label">Enter Email</label>
                                                        <input type="text" value="<?php echo set_value('teacherEmail');?>" name="teacherEmail" class="form-control" placeholder="Enter Email">
                                                        <span style="color:red"><?php echo form_error('teacherEmail');?></span>
                                                    </div>
                                                </div>

                                                   <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="required-label">Enter Password</label>
                                                        <input type="Password" value="<?php echo set_value('teacherPass');?>" class="form-control" name="teacherPass" placeholder="Enter Password">
                                                        <span style="color:red"><?php echo form_error('teacherPass');?></span>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <label>Class Name</label>
                                                    <label class="required-label">Select Class</label>
                                                        <select name="teacherClass" class="form-control">
                                                            <option value="0">Select Class </option>
                                                            <option value="1" <?php echo set_select('teacherClass', '1'); ?>>Nursery</option>
                                                            <option value="2" <?php echo set_select('teacherClass', '2'); ?>>Jr. Kg</option>
                                                            <option value="3" <?php echo set_select('teacherClass', '3'); ?>>Sr. Kg</option>
                                                        </select>
                                                        <span style="color:red"><?php echo form_error('teacherClass');?></span>
                                                    </div>
                                                </div>
                                                
                                            
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <label>Teacher Status</label>
                                                    <label class="required-label">Select Class</label>
                                                        <select name="teacher_status" class="form-control">
                                                            <option value="0">Select Status </option>
                                                            <option value="3" <?php echo set_select('teacher_status', '3'); ?>>9 Month Course</option>
                                                            <option value="4" <?php echo set_select('teacher_status', '4'); ?>>7 Month Course</option>
                                                            <option value="2" <?php echo set_select('teacher_status', '2'); ?>>Normal User 9 month course</option>
                                                            <option value="5" <?php echo set_select('teacher_status', '5'); ?>>3 Month</option>
                                                        </select>
                                                        <span style="color:red"><?php echo form_error('teacher_status');?></span>
                                                    </div>
                                                    
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <label>Month Open </label>
                                                    <label class="required-label">Select Class</label>
                                                        <select name="cal_month" class="form-control">
                                                            <option value="0">Select Status </option>
                                                            <option value="1" <?php echo set_select('cal_month', '1'); ?>>Month 1</option>
                                                            <option value="2" <?php echo set_select('cal_month', '2'); ?>>Month 2</option>
                                                            <option value="3" <?php echo set_select('cal_month', '3'); ?>>Month 3</option>
                                                            <option value="4" <?php echo set_select('cal_month', '4'); ?>>Month 4</option>
                                                            <option value="5" <?php echo set_select('cal_month', '5'); ?>>Month 5</option>
                                                            <option value="6" <?php echo set_select('cal_month', '6'); ?>>Month 6</option>
                                                            <option value="7" <?php echo set_select('cal_month', '7'); ?>>Month 7</option>
                                                            <option value="8" <?php echo set_select('cal_month', '8'); ?>>Month 8</option>
                                                            <option value="9" <?php echo set_select('cal_month', '9'); ?>>Month 9</option>
                                                        </select>
                                                        <span style="color:red"><?php echo form_error('cal_month');?></span>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                       <div>
                                                            <label> select All</label>
                                                                <input type="checkbox" name="cal_allday[]" id="select_all"> 
                                                        </div>
                                                    <div class="col-sm-12">
                                                        <div class="day-grid">
                                                            <div class="align-both">
                                                                <label>day-1</label>
                                                                <input type="checkbox" name="cal_allday[]" value="1">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-2</label>
                                                                <input type="checkbox" name="cal_allday[]" value="2">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-3</label>
                                                                <input type="checkbox" name="cal_allday[]" value="3">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-4</label>
                                                                <input type="checkbox" name="cal_allday[]" value="4">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-5 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="5">
                                                            </div>
                                                            <div class="align-both">
                                                                 <label> day-6 </label>
                                                                 <input type="checkbox" name="cal_allday[]" value="6">
                                                            </div>
                                                            <div class="align-both">
                                                               <label>day-7</label>
                                                               <input type="checkbox" name="cal_allday[]" value="7"> 
                                                            </div>
                                                        </div>
                                                        <div class="day-grid">
                                                            <div class="align-both">
                                                                <label>day-8 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="8">
                                                            </div>
                                                            <div class="align-both">
                                                                <label> day-9 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="9"> 
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-10 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="10">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-11 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="11">
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-12 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="12"> 
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-13</label>
                                                                <input type="checkbox" name="cal_allday[]" value="13"> 
                                                            </div>
                                                            <div class="align-both">
                                                                 <label>day-14</label>
                                                                 <input type="checkbox" name="cal_allday[]" value="14">
                                                            </div>    
                                                        </div>
                                                        <div class="day-grid">
                                                            <div class="align-both">
                                                               <label>day-15</label>
                                                               <input type="checkbox" name="cal_allday[]" value="15"> 
                                                            </div>
                                                            <div class="align-both">
                                                                <label>day-16</label>
                                                                <input type="checkbox" name="cal_allday[]" value="16">
                                                            </div>
                                                            <div>
                                                                <label>day-17</label>
                                                                <input type="checkbox" name="cal_allday[]" value="17">
                                                            </div>
                                                            <div>
                                                                <label> day-18 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="18">
                                                            </div>
                                                            <div>
                                                                <label>day-19 </label>
                                                                <input type="checkbox" name="cal_allday[]" value="19">
                                                            </div>
                                                            <div>
                                                                <label> day-20</label>
                                                                <input type="checkbox" name="cal_allday[]" value="20"> 
                                                            </div>
                                                        </div>       
                                                     </div>
                                                 </div>
                                                    
                                                    
                                                    
                                                    
                                               

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="mt-2">
                                                            <label class="radio-inline mr-2"><input type="radio" name="teacherGender" value="Male" checked> Male</label>
                                                            <label class="radio-inline"><input type="radio" name="teacherGender" value="Female"> Female</label>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('teacherGender');?></span>
                                                    </div>
                                                 </div>
                                             </div>

                                            <div class="d-flex justify-content-center">
                                                <a class="pc-button elementor-button" href="#">
                                                <div class="button-content-wrapper">
                                                    <button  class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button> 
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
              <?php $this->load->view('footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       <?php $this->load->view('footd');?>
       
       
        <script>
           $(document).ready(function(){
               $('#select_all').change(function() {
                  var checkboxes = $(this).closest('form').find(':checkbox');
                  checkboxes.prop('checked', $(this).is(':checked'));
                });
           });
       </script>

       <script type="text/javascript">
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
                                      title: "Student Id is Deleted!",
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
                    })



                })
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
      
      setTimeout(function() {
                    window.location.href = '<?php echo base_url('dashboard/teacher_get_information')?>';
       }, 2000);

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
</script>