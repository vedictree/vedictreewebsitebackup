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
                                            <h4>Change Password</h4>
                                           <form class="mt-4" method="post" action="<?php echo base_url('dashboard/changepassword')?>" >
                                                    <input type="hidden" name="studId" value="<?php echo $updatedata[0]['studId']?>">
                                                    <div class="form-group">
                                                        <label for="username">Student Full  Name</label>
                                                        <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $updatedata[0]['studentName'];?>" placeholder="Enter Full Name" disabled>
                                                        <span style="color:red"><?php echo form_error('studentName'); ?></span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="username">Student Mobile</label>
                                                        <input type="number" value="<?php echo $updatedata[0]['studentMobile'];?>" class="form-control" id="studentMobile" name="studentMobile" placeholder="Enter Mobile " disabled>
                                                        <span style="color:red"><?php echo form_error('studentMobile'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username">New Password</label>
                                                        <input type="password" class="form-control" id="nPass" name="nPass" placeholder="Enter New Password">
                                                        <span style="color:red"><?php echo form_error('nPass'); ?></span>
                                                    </div>
                                                      <div class="form-group">
                                                        <label for="username">Confirm Password</label>
                                                        <input type="password" class="form-control" id="ncPass" name="ncPass" placeholder="Enter Confirm Password">
                                                        <span style="color:red"><?php echo form_error('ncPass'); ?></span>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <button name="submit" value="submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                
                                           
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