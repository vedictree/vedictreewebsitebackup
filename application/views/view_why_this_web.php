<?php
 $this->load->view('header');
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blogs List</h4>
                                <?php
                                    $message = $this->session->flashdata('msg');
                                    if (isset($message)) {
                                        echo '<div class="alert alert-info successMessage ">' . $message . '</div>';
                                        $this->session->unset_userdata('msg');
                                    }
                                ?>
                                <table id="datatable" class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th class="thclass">Sr. no</th>
                                        <th class="thclass">Title</th>
                                        <th class="thclass">Blog Image</th>
                                        <th class="thclass">Description</th>
                                        <th class="thclass">Action</th>
                                    </tr>
                                    </thead>  
                                    <tbody>
                                    <?php if($why_this_web){
                                        $i=1;
                                        foreach ($why_this_web as $key => $value) { 
                                        // echo "<pre>";
                                        // print_r($value);
                                    ?> 
                                    <tr>
                                        <td style="width: 1%"><?php echo $i++;?></td>
                                        <td style="width: 25%"><?php echo $value['title']; ?></td>
                                        <td><img class="img-rounded" width="180" height="130" src="<?php echo  base_url('uploads/whythisweb/'.$value['allocated_file']);?>" /></td>
                                        <td style="width: 40%"><?php echo $value['description']; ?></td>
                                        <td style="width: 40%"><?php echo $value['description1']; ?></td>
                                        <td style="width: 1%">
                                            <div class="d-flex">
                                                <form method="POST" action="<?php echo base_url('adminseo/edit_why_thiswebinar'); ?>">
                                                    <input type="hidden" value="<?php echo  $value['web_id'] ?>" name="web_id" />   
                                                   <button class="btn btn-sm"><i style="font-size: 22px;color:#626ed4;" class="mdi mdi-account-edit-outline"></i></button>
                                                </form>
                                                <form method="POST" action="<?php echo base_url('adminseo/delete_why_thiswebinar'); ?>">
                                                    <input type="hidden" value="<?php echo  $value['web_id'] ?>" name="web_id" />        
                                                    <button type="submit" name="submit" class="btn btn-sm"><i style="font-size: 22px;color:#626ed4;" class="mdi mdi-delete"></i></button>
                                                </form>
                                            </div>
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
        </div><!-- End Page-content -->
    <?php $this->load->view('footer'); ?>
    </div><!-- end main content-->
</div><!-- END layout-wrapper -->

<?php $this->load->view('footd');?>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".successMessage").hide(3000);
    }, 3000);
    
    function check() {
        if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
    }
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

<script>
   
</script>