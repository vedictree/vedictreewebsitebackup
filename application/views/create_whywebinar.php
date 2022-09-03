<?php
 $this->load->view('header');
 $monthdata =  required_data();

?>
<style type="text/css">
    .thclass{
        width:400px;
    }
</style>
 <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
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
                            <div>
                                 <div class="alert alert-danger" style="display:none">
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                      <div class="card-body">
                                        <h1>WHY THIS WEBINAR</h1>
                                         <?php
                                                $message = $this->session->flashdata('msg');
                                                if (isset($message)) {
                                                    echo '<div class="alert alert-info successMessage ">' . $message . '</div>';
                                                    $this->session->unset_userdata('msg');
                                                }
                                            ?>
                                        <div class="alert alert-primary"  role="alert" id='resultDiv' style="display:none;"></div>
                                        <form method="POST" action="<?php echo base_url('adminseo/insert_whyweb') ?>"  enctype="multipart/form-data">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-xl-4 col-md-6">
                                               <div class="form-group" >
                                                    <div class="form-group">
                                                        <label>Enter Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" >
                                                    </div>
                                                    <span style="color:red"><?php echo form_error('title');?></span>
                                                </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>First Description</label>
                                                          <textarea name="description1"  id="description1"  class="form-control"  rows="3" >
                                                           </textarea>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('description1');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                          <textarea name="description"  id="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" >
                                                           </textarea>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('description');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>File Upload</label>
                                                             <input type="file"  class="form-control filestyle"   name="allocated_file"  >
                                                             <span style="color:red"><?php echo form_error('allocated_file');?></span>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('allocated_file');?></span>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="<?php echo rand(); ?>" name="randomId" />
                                                <div class="col-xl-12 col-md-6" style="top:12px;">
                                                    <div class="form-group" >
                                                       <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">submit</button>
                                                    </div>
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

  <script>
$(document).ready(function(){
    setTimeout(function() {
    $(".successMessage").hide(3000);
}, 3000); 
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
                    window.location.href = '<?php echo base_url('dashboard/add_fees')?>';
       }, 2000);

  </script>

<?php } ?>

