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
                                        <form method="POST" action="<?php echo base_url('dashboard/addstorycraft'); ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Title Name </label>
                                                            <input type="text" class="form-control" name="storyTitle" placeholder="Title Name ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('storyTitle');?></span>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Youtube Link </label>
                                                            <input type="url" class="form-control" name="youtubelink" placeholder="Youtube Link ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('youtubelink');?></span>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Vimeo Id </label>
                                                            <input type="number" class="form-control" name="vimeoId" placeholder="Vimeo Id ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('vimeoId');?></span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Upload Craft / Video file </label>
                                                            <input type="file" class="filestyle" name="craftbanner" placeholder="craftbanner Id ">
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('craftbanner');?></span>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="col-xl-4 col-md-6">
                                                   <div class="form-group" >
                                                        <div class="form-group">
                                                            <label>Enter Category Name </label>
                                                            <select class="form-control" name="storyflag">
                                                                <option>Select Category</option>
                                                                <option value="1">Story</option>
                                                                <option value="2">Craft</option>
                                                            </select>
                                                        </div>
                                                        <span style="color:red"><?php echo form_error('storyflag');?></span>
                                                    </div>
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
                            </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Carft / Story List</h4>
                                        <table id="datatable" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th class="thclass">#Id</th>
                                                <th class="thclass">story Title</th>
                                                <th class="thclass">youtubelink</th>
                                                <th class="thclass">vimeoId</th>
                                                <th class="thclass">Craft pic</th>
                                                <th class="thclass">Flag</th>
                                                <th class="thclass">Action</th>
                                            </tr>
                                            </thead>  
                                            <tbody>
                                               <?php if($getsortycrft){
                                                $i=1;
                                                foreach ($getsortycrft as $key => $value) { 
                                                   
                                                ?> 
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $value['storyTitle']; ?></td>
                                                <td><?php echo $value['youtubelink']; ?></td>
                                                <td><?php echo $value['vimeoId']; ?></td>
                                                <td><img width="100px;" height="100px;" src="<?php echo base_url('uploads/craftbanner/'.$value['craftbanner']); ?>"></td>
                                                <td>
                                                    <?php if( $value['storyflag'] ==1 ){ echo "Story"; }else{ echo "Craft"; } ?>
                                                </td>
                                                <td>
                                                    <form class="" method="POST" onclick="return check();" action="<?php echo base_url('dashboard/deletestory');?>">
                                                     <input type="hidden" value="<?php echo $value['craftId'];?>" name="craftId">
                                                     <button  type="submit" name="submit" value="submit" class="btn btn-sm"><i style="font-size:25px; position: relative;top:0px; margin-left:5px;color:#626ed4;" class="mdi mdi-delete"></i></button>
                                                    </form>
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
                    window.location.href = '<?php echo base_url('dashboard/addstorycraft')?>';
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
