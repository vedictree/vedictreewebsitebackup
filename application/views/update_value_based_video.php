<?php
 $this->load->view('header');
 $monthdata =  required_data_admin();

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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Add Videos</h4>
                                        <div class="col-lg-6">
                                            <form class="" enctype="multipart/form-data"  method="post" action="<?php echo base_url('dashboard/update_value_based_video');?>">
                                            
                                                <input type="hidden" value="<?php echo $getvaludata[0]['vbId'];?>" name="vbId">
                                                <input type="hidden" value="<?php echo $getvaludata[0]['sessionImage'];?>" name="oldsessionImage">
                                                  <input type="hidden" value="<?php echo $getvaludata[0]['fk_classId']; ?>" name="fk_classId">
                                                <div class="outer">
                                                    <div data-repeater-item class="outer">
                                                        <div class="form-group">
                                                            <label for="formemail">Class Name</label>
                                                            <select class="form-control" value="<?php echo $getvaludata[0]['fk_classId']?>" name="fk_classId"  >
                                                                <option value="<?php echo $getvaludata[0]['fk_classId']; ?>" ><?php echo $getvaludata[0]['className'];?></option>
                                                                <?php
                                                                 if($monthdata['getClass']){
                                                                 foreach ($monthdata['getClass'] as $key => $value) {
                                                                 ?>
                                                                <option value="<?php echo $value['classId']?>"><?php echo $value['className']?></option>
                                                                <?php }} ?>
                                                            </select>
                                                            <span style="color:red"><?php echo form_error('fk_classId'); ?></span>
                                                        </div>
                                                        
                                                        <div class="form-group" >
                                                            <div class="form-group">
                                                                <label>Title Name </label>
                                                                <input type="text" class="form-control"  value="<?php echo $getvaludata[0]['sessionName']; ?>" name="sessionName" placeholder="Title Name" required="" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="form-group">
                                                                <label>Vimeo Video Id </label>
                                                                <input type="number" class="form-control" name="vimeoId" value="<?php echo $getvaludata[0]['vimeoId']; ?>" placeholder="Vimeo Video Id" >
                                                            </div>
                                                        </div>

                                                        <div class="form-group" >
                                                            <div class="form-group">
                                                                <label>Youtube Link </label>
                                                               <input type="url" class="form-control" name="youtubelink" value="<?php echo $getvaludata[0]['youtubelink']; ?>" placeholder="Youtube Link" >
                                                            </div>
                                                            <span style="color:red"><?php echo form_error('youtubelink');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Enter From Date</label>
                                                            <input type="date" class="form-control" name="fromDT" value="<?php echo $getvaludata[0]['fromDT']; ?>" placeholder="Enter From Date" required="">
                                                            <span style="color:red"><?php echo form_error('fromDT');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Enter To Date</label>
                                                            <input type="date" class="form-control" name="toDT" value="<?php echo $getvaludata[0]['toDT']; ?>" placeholder="Enter To Date" required="">
                                                            <span style="color:red"><?php echo form_error('toDT');?></span>
                                                        </div><div class="form-group">
                                                            <label>Upload Session Image</label>
                                                            <div>
                                                                <img src="<?php echo base_url('uploads/valueImage/'.$getvaludata[0]['sessionImage']) ?>" width="100px" height="100px" >
                                                            </div>
                                                            <input type="file" class="filestyle" name="sessionImage" placeholder="" >
                                                            <span style="color:red"><?php echo form_error('sessionImage');?></span>
                                                        </div>
                                                       

                                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> 
                </div>
              <?php $this->load->view('footer'); ?>
            </div>
        </div>
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

              setTimeout(function() {
                    window.location.href = '<?php echo base_url('dashboard/add_value_based_video')?>';
       }, 2000);

          </script>



        <?php } ?>
