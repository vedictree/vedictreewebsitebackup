<!DOCTYPE html>
<html lang="zxx">
<!-- Web Header starts -->
<?php $this->load->view('web_header'); ?>
<!-- Web Header starts -->
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3FX7LW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- blog part -->
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_post_list">
                      <?php foreach($get_blogs_all as $blogall){  ?>
                        <div class="single_page_blog_post">
                            <img src="<?php echo  base_url('uploads/blogs_images/'.$blogall['file_upload']);?>" alt="blog" class="img-fluid">
                            <div class="single_blog_content">
                                <div class="post_author">
                                    <!--<span>August 21, 2021</span>-->
                                    <span>
                                          <?php 
                                            $blog_date = $blogall['date'];
                                            echo date('F d Y', strtotime($blog_date));
                                           ?>
                                    </span>
                                </div>
                                <h2><?php echo $blogall['title']; ?></h2>
                                <p><?php echo substr($blogall['blog_des1'], 0, 250) ; ?><span>....</span></p>
                                <div class="blog_btn">
                                    <a href="<?php echo base_url('blogs/'.$blogall['linkheader']);?>" class="read_more_btn">Read More </a>
                                    <p><i class="far fa-comment"></i>10 Comments</p>
                                </div>
                            </div>
                        </div>
                     <?php } ?>    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar">
                        <div class="single_sidebar">
                            <h3>Latest Posts</h3>
                            <?php
                        foreach($get_blogs as $blog){  ?>
                            <div class="single_sidebar_post">
                                <img src="<?php echo  base_url('uploads/blogs_images/'.$blog['file_upload']);?>" alt="blog">
                                <div class="sidebar_post_content">
                                    <h4> <a href="<?php echo base_url('blogs/'.$blog['linkheader']);?>"><?php echo $blog['title']; ?></a></h4>
                                    <p>
                                        <?php 
                                            $blog_date = $blog['date'];
                                            echo date('F d Y', strtotime($blog_date));
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                        <div class="single_sidebar">
                            <div class="instagram_img">
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_21.png" alt="gallery" class="img-fluid"></a>
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_22.png" alt="gallery" class="img-fluid"></a>
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_23.png" alt="gallery" class="img-fluid"></a>
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_24.png" alt="gallery" class="img-fluid"></a>
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_25.png" alt="gallery" class="img-fluid"></a>
                                <a><img src="<?php echo base_url()?>assets/website/img/gallery/photo_26.png" alt="gallery" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/story_animation_5.png" alt="icon"></div>
        </div>
        <div class="blog_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_6.png" alt="icon"></div>
        </div>
        <div class="blog_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/icon_8.png" alt="icon"></div>
        </div>
        <div class="blog_animation_4">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/contact_icon.png" alt="icon"></div>
        </div>
        <div class="blog_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/banner_two_3.png" alt="icon"></div>
        </div>
        <div class="blog_animation_6">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/icon_9.png" alt="icon"></div>
        </div>
        <div class="blog_animation_7">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/story_animation_5.png" alt="icon"></div>
        </div>
        <div class="blog_animation_8">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_6.png" alt="icon"></div>
        </div>
        <div class="blog_animation_9">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/icon_8.png" alt="icon"></div>
        </div>
        <div class="blog_animation_10">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/contact_icon.png" alt="icon"></div>
        </div>
    </section>
    <!-- blog part end -->
    
   <!-- footer part here -->
   <?php $this->load->view('web_footer'); ?>
   <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
</body>
</html>