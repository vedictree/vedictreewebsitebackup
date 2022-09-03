<?php
 $this->load->view('header');
?>
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
                                        <div class="col-md-8">
                                            <h4>Edit Information</h4>
                                            <?php if(!empty($updatedata)){ ?>       
                                                <form class="mt-4" method="post" action="<?php echo base_url('dashboard/edit')?>" >
                                                    <input type="hidden" name="studId" value="<?php echo $updatedata[0]['studId']?>">
                                                    <div class="form-group">
                                                        <label for="username">Student Full  Name</label>
                                                        <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $updatedata[0]['studentName'];?>" placeholder="Enter Full Name">
                                                        <span style="color:red"><?php echo form_error('studentName'); ?></span>
                                                    </div>
                    

                                                    <div class="form-group">
                                                        <label for="userpassword">Student First Name</label>
                                                        <input type="text" value="<?php echo $updatedata[0]['usr_firstname'];?>" class="form-control"   name="usr_firstname" placeholder="Enter First Name">
                                                        <span style="color:red"><?php echo form_error('usr_firstname'); ?></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userpassword">Student Last Name</label>
                                                        <input type="text" value="<?php echo $updatedata[0]['usr_lastname'];?>" class="form-control"   name="usr_lastname" placeholder="Enter Last Name">
                                                        <span style="color:red"><?php echo form_error('usr_lastname'); ?></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userpassword">Student Email Id</label>
                                                        <input type="email" value="<?php echo $updatedata[0]['studentEmail'];?>" class="form-control"  name="studentEmail" placeholder="Enter  Email">
                                                        <span style="color:red"><?php echo form_error('studentEmail'); ?></span>
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label for="username">Student Gender</label>
                                                         <br>   
                                                    <?php
                                                     if($updatedata[0]['studentGender']=="Male"){
                                                            echo "<input type='radio' value='Male' checked=''  name='studentGender'> Male";
                                                        }else if($updatedata[0]['studentGender']=="Female"){
                                                            echo "<input type='radio' value='Female' checked=''  name='studentGender'> Female";
                                                        } 
                                                    ?>
                                                        <span style="color:red"><?php echo form_error('studentGender'); ?></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username">Student Mobile</label>
                                                        <input type="number" value="<?php echo $updatedata[0]['studentMobile'];?>" class="form-control" id="studentMobile" name="studentMobile" placeholder="Enter Mobile ">
                                                        <span style="color:red"><?php echo form_error('studentMobile'); ?></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username">Altername Email</label>
                                                        <input type="text" value="<?php echo $updatedata[0]['alternate_email'];?>" class="form-control" id="alternate_email" name="alternate_email" placeholder="Enter Email Id ">
                                                        <span style="color:red"><?php echo form_error('alternate_email'); ?></span>
                                                    </div>
                                                      <div class="form-group">
                                                        <label for="username">Course</label>
                                                        
                                                        <select id='course' name='course' class="form-control">
                                                        <?php if($updatedata[0]['fk_coursePeriod'] == 0){ ?>
                                                        <option value='0' selected>Course 9
                                                        <option value='3'>Course 3
                                                        <option value='7'>Course 7
                                                        <?php }else if($updatedata[0]['fk_coursePeriod'] == 3){ ?>
                                                        <option value='0'>Course 9
                                                        <option value='3' selected>Course 3
                                                        <option value='7'>Course 7
                                                        <?php }else{ ?>
                                                        <option value='0'>Course 9
                                                        <option value='3'>Course 3
                                                        <option value='7' selected>Course 7
                                                        <?php } ?>
                                                        </select>
                                                        
                                                        
                                                       
                                                    </div>
                                                    
                                                    <?php if(!empty($getclass)){ ?>
                                                        <div class="form-group">
                                                        <label for="username">Class</label>
                                                        <select name='studClass' id='studClass' class='form-control'>
                                                            <?php foreach ($getclass as $key => $value) {   ?>
                                                             <?php if($updatedata[0]['studentClass'] == $value['classId']){ ?>
                                                                <option value="<?php echo $value['classId'] ?>" selected>  <?php echo $value['className'] ?>
                                                             <?php }else{ ?>
                                                                
                                                                <option value="<?php echo $value['classId'] ?>">  <?php echo $value['className'] ?>
                                                                <?php } ?>
                                                            
                                                            <?php } ?>
                                                            </select>
                                                        
                                                        </div>
                                                    <?php } ?>
                                                    
                                                    <?php if(!empty($list_Fees_packagewise)){ ?>
                                                        <div class="form-group">
                                                        <label for="username">Package Name</label>
                                                        <select name='classPack' id='classPack' class='form-control' disabled>
                                                            <?php foreach ($list_Fees_packagewise as $key => $value) {   ?>
                                                             <?php if($selected_by_package[0]['planId'] == $value['feesId']){ ?>
                                                                <option value="<?php echo $value['feesId'] ?>" selected>  <?php echo $value['packageName'] ?>
                                                             <?php }else{ ?>
                                                                
                                                                <option value="<?php echo $value['feesId'] ?>">  <?php echo $value['packageName'] ?>
                                                                <?php } ?>
                                                            
                                                            <?php } ?>
                                                            </select>
                                                        
                                                        </div>
                                                    <?php } ?>

                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <button name="submit" value="submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            <?php } else {
                                                echo "Student Data Not Found ";
                                            } ?>
                                        </div>
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
               $("#studClass").change(function(){
                   var sc = 0;
                   sc = $("#studClass").val();
                   
                   $.ajax({
                         type:"POST",
                        data:{sc:sc},
                        url: "<?php echo base_url('dashboard/get_package_list'); ?>", //here we are calling our user controller and get_cities method with the country_id
                        
                        datatype : "json",
                        success: function(data) //we're calling the response json array 'states'
                        {

                            var r = JSON.parse(data);
                            // console.log(r);
                            // $('#classPack').html("");
                            // for(var i=0;i<r.length;i++){
                            //      var opt = $('<option />'); // here we're creating a new select option with for each city
                            //   opt.val(r[i].feesId);
                            //     opt.text(r[i].packageName);
                            //     $('#classPack').append(opt); //here we will append these new select options to a dropdown with the id 'states'
                            // }
                            // var t = '';
                            // $.each(list_Fees_packagewise,function(feesId,packageName) //here we're doing a foeach loop round each city with id as the key and city as the value
                            // {
                            //   var opt = $('<option />'); // here we're creating a new select option with for each city
                            //   opt.val(feesId);
                            //     opt.text(packageName);
                            //     $('#classPack').append(opt); //here we will append these new select options to a dropdown with the id 'states'
                            // });
                        }

                    });

               });
           });
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
                            window.location.href = '<?php echo base_url('dashboard/getstudlist')?>';
               }, 2000);

          </script>



        <?php } ?>