<?php
 $this->load->view('header');
 $monthdata =  required_data();

?>
<style type="text/css">
    .thclass{
        width:400px;
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
                              <h1>Add Enquiry Form</h1>
                            <form method="POST" action="<?php echo base_url('dashboard/add_leads_temp'); ?>">
                                <div class="row">
                                    <div class="col-xl-10 col-md-6">
                                        <div class="col-xl-4 col-md-6">
                                           <div class="form-group" >
                                                <div class="form-group">
                                                    <label>Enter Full Name </label>
                                                    <input type="text" class="form-control" name="studentName" required placeholder="Enter Name of your Child ">
                                                </div>
                                                <span style="color:red"><?php echo form_error('studentName');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                           <div class="form-group" >
                                                <div class="form-group">
                                                    <label>Enter your Email </label>
                                                    <input type="email" class="form-control" name="studentEmail" required placeholder="Enter your Email ">
                                                </div>
                                                <span style="color:red"><?php echo form_error('studentEmail');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                           <div class="form-group" >
                                                <div class="form-group">
                                                    <label>Enter Mobile Name </label>
                                                    <input type="text" class="form-control" name="studentMobile" maxlength="10" required placeholder="Enter your Mobile Number">
                                                </div>
                                                <span style="color:red"><?php echo form_error('studentMobile');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                           <div class="form-group" >
                                                <div class="form-group">
                                                    <label>Enter City Name </label>
                                                    <input type="text" class="form-control" name="cityName"  required placeholder="Enter city Name">
                                                </div>
                                                <span style="color:red"><?php echo form_error('cityName');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                           <div class="form-group" >
                                                <div class="form-group">
                                                    <label>Enter Class Name </label>
                                                    <select  name="studentClass" class="form-control" onclick="this.setAttribute('value', this.value);" value="" id="selectClassDesktop" required="">
                                                        <option value=""> Select Class</option>
                                                        <option value="1">Nursery</option>
                                                        <option value="2">Junior KG</option>
                                                        <option value="3">Senior KG</option>
                                                    </select>
                                                </div>
                                                <span style="color:red"><?php echo form_error('studentClass');?></span>
                                            </div>
                                        </div>
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
                    window.location.href = '<?php echo base_url('dashboard/add_leads_temp')?>';
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
