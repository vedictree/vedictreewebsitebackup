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
                                <h1>Blogs Module</h1>
                                
                                    <?php
                                    $message = $this->session->flashdata('msg');
                                    if (isset($message)) {
                                        echo '<div class="alert alert-info successMessage ">' . $message . '</div>';
                                        $this->session->unset_userdata('msg');
                                    }

                                    ?>
                                <form method="POST" action="<?php echo base_url('adminseo/updates_blogs'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $blogs_edit[0]['id']; ?>" name="home_id" />
                                    <div class="row">
                                        <div class="form-group col-5">
                                            <label>Enter title  </label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo  $blogs_edit[0]['title']?>">
                                            <span style="color:red"><?php echo form_error('title');?></span>
                                        </div>
                                        <div class="form-group col-2">
                                            <label> Enter Date</label>
                                            <input type="date" class="form-control" id="date" name="date" placeholder="date " value="<?php echo  $blogs_edit[0]['date']?>">
                                            <span style="color:red"><?php echo form_error('book_fees');?></span>
                                        </div>
                                        <div class="col-1"><img class="img-rounded" width="100" height="70" src="<?php echo  base_url('uploads/blogs_images/'.$blogs_edit[0]['file_upload']);?>" /></div>
                                        <div class="form-group col-4">
                                            <label>Enter File upload</label>
                                            <input type="file" class="form-control filestyle" id="file_upload" name="file_upload" value="<?php echo  $blogs_edit[0]['file_upload']?>">
                                            
                                            <span style="color:red"><?php echo form_error('file_upload');?></span>
                                            
                                        </div>
                                             <div class="form-group col-4">
                                            <label>Enter Link Header</label>
                                            <input type="text" class="form-control" id="lheader" name="lheader" placeholder="Link Header" value="<?php echo  $blogs_edit[0]['linkheader']?>" required>
                                            <!--<textarea id="w3review" name="blog_des1" rows="4" cols="50" required>
                                            </textarea>-->
                                            <span style="color:red"><?php echo form_error('lheader');?></span>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                       <div class="form-group" >
                                            <div class="form-group">
                                                <label>Enter Meta Title </label>
                                                <input type="text" class="form-control" value="<?php echo $blogs_edit[0]['metatitle']?>" name="web_metaTitle" placeholder="website meta Title " required>
                                            </div>
                                            <span style="color:red"><?php echo form_error('web_metaTitle');?></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                       <div class="form-group" >
                                            <div class="form-group">
                                                <label>Enter website page Keyword </label>
                                                <input type="text" class="form-control" value="<?php echo $blogs_edit[0]['pagekeyword']?>" name="web_pageKeyword" placeholder="Enter website page Keyword " required>
                                            </div>
                                            <span style="color:red"><?php echo form_error('web_pageKeyword');?></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                       <div class="form-group" >
                                            <div class="form-group">
                                                <label>Enter Meta  Description </label>
                                                <textarea type="text" class="form-control" name="web_metaDesc"  placeholder="Enter Meta Description" required ><?php echo $blogs_edit[0]['metadesc']?></textarea>
                                            </div>
                                            <span style="color:red"><?php echo form_error('web_metaDesc');?></span>
                                        </div>
                                    </div>
                                        <div class="form-group col-12">
                                            <label>Description</label>
                                            <textarea name="description" id="editor"  value="<?php echo  $blogs_edit[0]['description']?>">
                                                <?php echo  $blogs_edit[0]['description']?>
                                            </textarea>
                                            <span style="color:red"><?php echo form_error('description');?></span>
                                        </div>
                                        <div class="form-group col" >
                                           <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">submit</button>
                                        </div>
                                  </div>
                                </form>
                              </div>
                        </div>
                    </div>
               

                

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
</div>
<!-- END layout-wrapper -->
<?php $this->load->view('footd');?>
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('#editor')).catch( error => {
    console.error( error );
});
$(document).ready(function(){
    setTimeout(function() {
        $(".successMessage").hide(3000);
    }, 3000);
    
    function check() {
        if(confirm("Are You Sure You Want To Delete")==true){
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
        window.location.href = '<?php echo base_url('dashboard/add_fees')?>';
    }, 2000);
</script>
<?php } ?>