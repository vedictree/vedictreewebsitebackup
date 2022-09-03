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
                        <div class="card">
                                <div class="card-body">
                                    <h1>Add Calender Course wise</h1>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('dashboard/addCalender'); ?>">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Select Course Months</label>
                                                            <select class="form-control" name="courseperiod">
                                                                <option vlaue="">Select Course Months</option>
                                                                <option value="9">9</option>
                                                                <option value="7">7</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('courseperiod');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>upload calender Excel Sheet</label>
                                                           <input type="file" class="filestyle" name="addCalender" placeholder="Upload Calender Excel Sheet">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('addCalender');?></span>
                                                    </div>
                                                </div>
                                                <div style="margin: auto;font-size:larger;" >
                                                    <a  href="<?php echo base_url('uploads/calender.xlsx')?>" download>Download Sample</a> ( Flag Set 1 for Live and 2 for Off Day )
                                                </div>
                                                
                                                <div class="col-xl-12 col-md-6" style="top:12px;">
                                                    <div class="form-group" >
                                                       <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">submit</button>
                                                </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Session List</h4>
                                        <table id="datatable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th class="thclass">#Id</th>
                                                <th class="thclass">Days</th>
                                                <th class="thclass">Months</th>
                                                <th class="thclass">Date</th>
                                               
                                            </tr>
                                            </thead>  
                                            <tbody>
                                               <?php if($get_calender){
                                                $i=1;
                                                foreach ($get_calender as $key => $value) { 
                                                    // echo "<pre>";
                                                    // print_r($value);
                                                ?> 
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $value['Days']; ?></td>
                                                <td><?php echo $value['Months']; ?></td>
                                                <td><?php echo $value['calDate']; ?></td>
                                                
                                                
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
                    window.location.href = '<?php echo base_url('dashboard/addCalender')?>';
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
