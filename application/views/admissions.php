<!DOCTYPE html>
<html lang="zxx">
<?php $this->load->view('web_header1'); ?>
<?php $fakecount=2450;  ?>
<head>
<style>
    @media (min-width: 576px) {
    .modal-dialog {
        max-width: 700px !important;
    }


}
.playpause {
      /* background-image: url(https://wwww.vedictreeschool.com/assets/website/img/banner/play.png); */
      background-repeat: no-repeat;
      width: 60%;
      height: 60%;
      position: absolute;
      left: 0%;
      right: 0%;
      top: 0%;
      bottom: -55%;
      margin: auto;
      background-size: contain;
      background-position: center;
    }

    .headshot {
      flex-shrink: 0;
      margin: 20px;
      height: calc(150px + 6vw);
      width: calc(150px + 6vw);
      border: calc(8px + 0.2vw) solid transparent;
      background-origin: border-box;
      background-clip: content-box, border-box;
      background-size: cover;
      box-sizing: border-box;
      box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);
    }

    .frame {
      background: url("../assets/website/img/frame.png");
      box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);
      width: 450px;
      height: 450px;
      border: 3px solid #ccc;
      border-radius: 50%;
      background: linear-gradient(to bottom right, #ff3cac, #562b7c, #2b86c5);
      margin: auto;
      padding: 15px 10px;
    }

    .fvid {
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }
</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3FX7LW');</script>
<!-- End Google Tag Manager -->
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Vedic Tree Free Class</title>
<link rel="icon" href="<?php echo base_url()?>assets/website/img/favicon.png">
<!-- Bootstrap CSS & JS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<!-- Custom Style -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/website/landing/css/style.min.css">
<!-- animate CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/animate.css" />
<!-- magnify popup CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/website/vendors/magnify_popup/magnific-popup.css" />
<!-- owl carousel CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3FX7LW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="header" id="myHeader">
        <div class="d-flex container">
            <div style="width: 100px; height: 100px">
                <a class="navbar-brand mr-0" href="<?php echo base_url()?>admissions">
                    <img src="<?php echo base_url()?>assets/website/landing/img/logo/logo.png" class="landing-logo" alt="Vedic Tree">
                </a>
            </div>
            <div class="title-heading1">
                <h1 style="display: none;">PreSchool</h1>
                <div class="desktop-head-text">
                    <h2 style="text-align: center;">Admissions Open For 2022-2023</h2>
                    <!--<div class="free-edu">Real Education is now Free!</div>-->
                </div>
                <div class="mobile-head-text">
                    <!--<div class="header-text"><span class="header-one">India's Best</span><span class="header-two">Online Preschool</span></div>-->
                     <h2 style="text-align: center;"><span class="header-one">India's Best</span><br><span class="header-two">Online Preschool</span></h2>
                    <!--<div class="free-edu">Real Education is now <span>Free!</span></div>-->
                </div>
            </div>
            <div class="home-shortcut">
                <a href="<?php echo base_url()?>" style="text-decoration: none;">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div>Home</div>
                </a>
            </div>
        </div>
    </div>
    <div class="student-count">
        <div class="count">
            <span>Students Enrolled</span>
            <div class="enrolled"><?php echo $fakecount;?></div>
        </div>
        <div class="home-shortcut1">
            <a href="<?php echo base_url()?>" style="text-decoration: none;">
                <i class="fa fa-home" aria-hidden="true"></i>
                <div>Home</div>
            </a>
        </div>
    </div>
    <!-- Desktop view banner part here -->
    <section class="banner_part banner_style_3 desktop-tablet-view" id="demo_section">
        <div class="single_banner_part freeclass">
            <div class="container custom_container">
                <div class="block-view">
                    <div class="empty-block"></div>
                    <div class="register-block">
                        <div class="register-box">
                            <div class="form-wrapper-outer">
                                <div class="form-logo">
                                    <img src="<?php echo base_url()?>assets/website/landing/img/logo/register_logo_landing.png" alt="logo">
                                </div> 
                                <h2 class="demo-class-text-1"><span class="font-size-text1">Register for</span><br><span class="free-class-text">FREE </span>Conceptual Education</h2>
                                <form id="log" method="POST" action="<?php echo base_url('website/temp_enquiry')?>">
                                <input type="hidden" name="promoCode" value="freeEducation">
                                <input type="hidden" name="cotp" id='cotp'>
                                    <div class="field-wrapper">
                                        <input type="text" name="studentName" id="studentName" autocomplete="off" required>
                                        <div class="field-placeholder"><span>Enter Name of your Child</span></div>
                                    </div>
                                    <div class="field-wrapper">
                                        <input type="email" name="studentEmail" id="studentEmail" autocomplete="off" required>
                                        <div class="field-placeholder"><span>Enter your Email</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="field-wrapper">
                                                <input type="text" maxlength="10" name="studentMobile" id="studentMobile" autocomplete="off" required>
                                                <div class="field-placeholder1"><span>Enter your Mobile Number</span></div>
                                            </div>
                                            
                                        </div>
                                        <span id='otpMsg' style='display:none;'>OTP Sent to your mobile</span>
                                        
                                    </div>
                                     <div class="row">
                                        <div class="col-4">
                                        <div class="field-wrapper">
                                                <input type="text" maxlength="10" name="stuMobOTP" id="stuMobOTP" autocomplete="off" required disabled>
                                                <div class="field-placeholder1"><span>Enter OTP</span></div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                         <div class="field-wrapper"><span href='#' id='verifyMobile' style='display:none;'>Verify</span></div>
                                        </div>
                                        
                                        <div class="col-4">
                                            <div class="floating-label">  
                                                <select class="floating-select" name="studentClass" onclick="this.setAttribute('value', this.value);" value="" id="selectClassD" required>
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Nursery</option>
                                                    <option value="2">Junior Kg</option>
                                                    <option value="3">Senior Kg</option>
                                                </select>
                                                <span class="highlight"></span>
                                                <label class="select-label">Select</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-button d-flex justify-content-center">
                                        <button type="submit" name="submit" value="submit" id="admissionsD" class="register-now">Register Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h1 class="headline-tag">
                            <span>"Naye Zamane Ki Nayi School"</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="banner_animation_1">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_19.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_3">
                <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_3.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_4">
                <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_16.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_5">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_5.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_7">
                <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_15.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_9">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_18.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_10">
                <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_10.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_12">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_20.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_13">
                <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_21.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_15">
                <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_17.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- Desktop view banner part end -->
    <div class="register-box1 p-3">
        <div class="form-wrapper-outer">
            <h2 class="demo-class-text-1"><span class="font-size-text1">Register for</span><br><span class="free-class-text">FREE </span>Conceptual Education</h2>
            <form id="log" method="POST" action="<?php echo base_url('website/temp_enquiry')?>">
            <input type="hidden" name="promoCode" value="freeEducation">
                <div class="field-wrapper">
                    <input type="text" name="studentName" id="studentNameMobile" autocomplete="off" required>
                    <div class="field-placeholder"><span>Enter Name of your Child</span></div>
                        <span style="color:red"><?php echo form_error('studentName'); ?></span>
                    </div>
                <div class="field-wrapper">
                <input type="email" name="studentEmail" id="studentEmailMobile" autocomplete="off" required>
                    <div class="field-placeholder"><span>Enter your Email</span></div>
                    <span style="color:red"><?php echo form_error('studentEmail'); ?></span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="field-wrapper">
                            <input type="text" maxlength="10" name="studentMobile" id="studentMobileMobile" autocomplete="off" required>
                            <div class="field-placeholder1"><span>Enter your Mobile Number</span></div>
                            <span style="color:red"><?php echo form_error('studentMobile'); ?></span>
                        </div>
                    </div>
                    <div class="col-4 pl-0">
                        <div class="floating-label">  
                            <select class="floating-select" name="studentClass" onclick="this.setAttribute('value', this.value);" value="" id="selectClassM">
                                <option value="" selected disabled></option>
                                <option value="1" <?php echo set_select('studentClass', '1'); ?>>Nursery</option>
                                <option value="2" <?php echo set_select('studentClass', '2'); ?>>Junior KG</option>
                                <option value="3"<?php echo set_select('studentClass', '3'); ?>>Senior KG</option>
                            </select>
                            <span class="highlight"></span>
                            <span style="color:red"><?php echo form_error('studentClass'); ?></span>
                            <label class="select-label">Select Class</label>
                        </div>
                    </div>
                </div>
                <div class="form-button d-flex justify-content-center">
                    <button type="submit" name="submit" value="submit" id="registerDemoMobile" class="register-now">Register Now</button>
                </div>
            </form>
        </div>
    </div>
    <div class="apk-mobile-view">
        <a href="https://play.google.com/store/apps/details?id=com.vedictree.preschool" target="_blank">
            <div style="margin: 10px 0;background: #e3f0d4;padding: 10px;">
                <img style="width: 100%;" src="<?php echo base_url()?>assets/website/landing/img/mobile-google-play.png">
            </div>
        </a>
    </div>
    <h2 class="headline-tag mt-1">"Naye Zamane Ki Nayi School"</h2>
    <!-- Mobile view banner part here -->
    <section class="banner_part banner_style_3 mobile-view" id="demo_section">
        <div class="single_banner_part">
            <div class="banner_animation_1">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_19.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_3">
                <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_3.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_4">
                <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_16.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_5">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ": 180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_5.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_7">
                <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_15.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_9">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_18.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_10">
                <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_10.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_12">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_20.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_13">
                <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_21.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_15">
                <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo base_url()?>assets/website/img/icon/banner_icon/animated_banner_17.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile view banner part end -->
    <!--<section class="event_section section_padding">-->
    <!--    <div class="container-timer">-->
    <!--        <div id="countdown">-->
    <!--        <div id="headline1" class="headline">Enroll now we are just</div>-->
    <!--            <ul class="p-0 mb-0">-->
    <!--                <li class="timer"><span id="days"></span>Days</li>-->
    <!--                <li class="timer"><span id="hours"></span>Hours</li>-->
    <!--                <li class="timer"><span id="minutes"></span>Minutes</li>-->
    <!--                <li class="timer"><span id="seconds"></span>Seconds</li>-->
    <!--            </ul>-->
    <!--            <div class="headline">away from launching</div>-->
    <!--        </div>-->
    <!--        <div id="content" class="emoji">-->
    <!--            <span>Daily Live Session is LIVE</span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- event section part here -->
    <section class="event_section section_padding" style="background: #fcf9f4;">
        <div class="container custom_container">
            <div class="row justify-content-between">
                <div class="col-lg-6">    
                    <div class="img_section">
                        <iframe class="responsive-iframe-welcome" src="https://www.youtube.com/embed/PuF2pSWlLt4?autoplay=1&mute=0&enablejsapi=1&rel=0"  allow='autoplay' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event_section_content mt-3">
                        <h2 class="wow fadeInRight kid_title" data-wow-delay=".4s"> <span class="title_overlay_effect">Why Vedic Tree is the Best Online Preschool ?</span></h2>
                        <?php 
                            $Topics  = array(
                                '1' =>'High level Online Education with Animations',
                                '2' =>'Valuable Online Classes',
                                '3' =>'Online e-books for overall development',
                                '4' =>'Daily preschool activities',
                                '5' =>'Extra-Curricular Activities Included',
                                '6' =>'Innovative Teaching Methods',
                                '7' =>'Best early learning app available in the market',
                            );
                        ?>
                        <ul class="points-text">
                            <?php if($Topics) {
                                foreach ($Topics as $key => $value) {       
                                $color = '#013983';
                             ?>
                            <li style="color:<?php echo $color;?>"><?php echo $value;?></li>
                            <?php }} ?>
                        </ul>
                        <div class="register-mobile">
                            <div class="pc-button elementor-button button-link cu_btn button-content-wrapper" onclick="book_demo()" >
                                <div class="button-content-wrapper"> 
                                    <span class="elementor-button-text">Register Now</span>
                                    <svg class="pc-dashes inner-dashed-border animated-dashes">
                                        <rect x="5px" y="5px" rx="22px" ry="22px" width="0" height="0"></rect>
                                    </svg>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_page_animation_1">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="about_page_animation_2">
            <div data-parallax='{"x": 10, "y": 80, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_6.png" alt="#"></div>
        </div>
        <div class="about_page_animation_3">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/banner_two_2.png" alt="#"></div>
        </div>
        <div class="about_page_animation_4">
            <div data-parallax='{"x": 30, "y": 50, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/team_animation.png" alt="#" class="img-fluid"></div>
        </div>
    </section>
    <!-- event section part end -->
    <a href="https://play.google.com/store/apps/details?id=com.vedictree.preschool" target="_blank">
        <div class="download-apk"></div>
    </a>
    <!-- services part here -->
    <section class="cta_section section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="cta_section_wrapper">
                        <img src="<?php echo base_url()?>assets/website/img/cta_img.png" alt="#" class="img-fluid">
                        <h2 class="wow fadeInRight" data-wow-delay=".4s"><span class="title_overlay_effect">What makes us unique?</span></h2>
                        <p><span style="color:green; font-weight: 900;">VEDIC TREE</span> believes that Value Based Education is the key to success and Education is baseless if there are no values embedded in it. Hence at Vedic Tree the Curriculum has been designed in such a manner that <span style="color: red;font-weight: 900;"> VALUES & LIFE SKILL ACTIVITIES</span> are included in the day to day learning. Value based learning happens in a <span style="color:goldenrod;font-weight: 900;"> PLAY & LEARN Method.</span></p>
                        <!--<p>Our motive is to provide free basic education to every child as it is the start of their journey and core foundations of their values. We are providing nursery live classes with animated video free for whole Academic Education. Vedic Tree the curriculum has been designed in such a manner that values & life skill activities are included in the day to day learning. Value based learning happens in a play & learn method.</p>-->
                        
                        <div class="pc-button elementor-button button-link cu_btn" onclick="book_demo()">
                            <div class="button-content-wrapper ">
                                <span class="elementor-button-text">Register Now</span>
                                <svg class="pc-dashes inner-dashed-border animated-dashes">
                                    <rect x="5px" y="5px" rx="22px" ry="22px" width="0" height="0"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/cta_1.png" alt="#"></div>
        </div>
        <div class="cta_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_7.png" alt="#">
            </div>
        </div>
        <div class="cta_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/cta_3.png" alt="#">
            </div>
        </div>
        <div class="cta_animation_4">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="img/icon/banner_two_3.png" alt="#"></div>
        </div>
    </section>
    <!-- services part end -->

    <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Celebrations & Activities</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="review_slider owl-carousel">
                        
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="https://www.youtube.com/embed/Gi3GZbhc7jI">
                                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/Gi3GZbhc7jI"></iframe>
                                </div>
                          
                            </div>
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="https://www.youtube.com/embed/wW4MgS9Zyho">
                                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/wW4MgS9Zyho"></iframe>
                                </div>
                          
                            </div>
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="https://www.youtube.com/embed/2pxfKa4nBtg">
                                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/2pxfKa4nBtg"></iframe>
                                </div>
                          
                            </div>
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="https://www.youtube.com/embed/ooeEV98gBek">
                                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/ooeEV98gBek"></iframe>
                                </div>
                          
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="event_list_animation_1">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_5.png" alt="#"></div>
        </div>
        <div class="event_list_animation_3">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="event_list_animation_4">
            <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_8.png" alt="#" class="img-fluid"></div>
        </div>
    </section>













    
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">
                    <div class="cta_part_iner">
                        <p>Providing the Best Quality Education at the Most Affordable Fees</p>
                        <h2>Vedic Tree Stars</h2>
                        <h3>Admissions Open</h3>
                        <h3>Book your Free Classes Now</h3>
                        <div onclick="book_demo()" class="cu_btn white_bg font-weight-bold book-button">Book Now</div>
                        <!-- <div id="book_demo" class="font-weight-bold">Book Now</div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_animation_1">
            <div data-parallax='{"x": -30, "y": -20}'>
                <img src="<?php echo base_url()?>assets/website/img/cta_img_1.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_2">
            <div data-parallax='{"x": 20, "y": -50}'>
                <img src="<?php echo base_url()?>assets/website/img/cta_img_2.png" alt="#">
            </div>
        </div>
    </section>
    <!-- cta part end -->
   <!-- events students here -->
   <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"><span class="title_overlay_effect">Parent's Video Review</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12"> -->
                    <div class="testimonial_slider owl-carousel">
                        <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s"> -->

                        <div class="frame wow fadeInUp" data-wow-delay=".10s">
                            <video class="fvid">
                                <source src="<?php echo base_url() ?>assets/videos/1.mp4" type="video/mp4">
                                <source src="<?php echo base_url() ?>assets/videos/1.ogg" type="video/ogg">

                            </video>
                            <i class="fa fa-play-circle-o playpause" style="position: absolute;top: 40%;left: 42%;font-size: 70px;z-index: 2;color:red" aria-hidden="true"></i>
                            <!-- <div class="playpause"></div> -->
                        </div>


                        <!-- </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s"> -->
                        <div class="frame wow fadeInUp" data-wow-delay=".10s">
                            <video class="fvid">

                                <source src="<?php echo base_url() ?>assets/videos/2.mp4" type="video/mp4">
                                <source src="<?php echo base_url() ?>assets/videos/2.ogg" type="video/ogg">

                            </video>
                            <i class="fa fa-play-circle-o playpause" style="position: absolute;top: 40%;left: 42%;font-size: 70px;z-index: 2;color:red" aria-hidden="true"></i>

                            <!-- <div class="playpause"></div> -->
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s"> -->
                        <div class="frame wow fadeInUp" data-wow-delay=".10s">
                            <video class="fvid">

                                <source src="<?php echo base_url() ?>assets/videos/3.mp4" type="video/mp4">
                                <source src="<?php echo base_url() ?>assets/videos/3.ogg" type="video/ogg">

                            </video>
                            <i class="fa fa-play-circle-o playpause" style="position: absolute;top: 40%;left: 42%;font-size: 70px;z-index: 2;color:red" aria-hidden="true"></i>

                            <!-- <div class="playpause"></div> -->
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s"> -->
                        <div class="frame wow fadeInUp" data-wow-delay=".10s">
                            <video class="fvid">

                                <source src="<?php echo base_url() ?>assets/videos/4.mp4" type="video/mp4">
                                <source src="<?php echo base_url() ?>assets/videos/4.ogg" type="video/ogg">

                            </video>
                            <i class="fa fa-play-circle-o playpause" style="position: absolute;top: 40%;left: 42%;font-size: 70px;z-index: 2;color:red" aria-hidden="true"></i>

                            <!-- <div class="playpause"></div> -->
                        </div>
                        <!-- </div> -->
                    </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="event_list_animation_1">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_5.png" alt="#"></div>
        </div>
        <div class="event_list_animation_3">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="event_list_animation_4">
            <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_8.png" alt="#" class="img-fluid"></div>
        </div>
    </section>
    <!-- events students end -->
    <!-- parent video review end -->
    <!-- testimonial part here -->
    <section class="testimonial_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">What Parents Say</span></h1>
                        <!-- <p class="description wow fadeInDown" data-wow-delay=".3s">Review From Happy Parents</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider owl-carousel">
                        <?php if($parents_review_update_list) { 
                            foreach ($parents_review_update_list as $key => $value) {
                        ?>
                        <div class="single_testimonial_slider">
                            <div class="client_speech">
                                <div class="date-right"><?php echo date("Y-m-d", strtotime($value['createDT']));?></div>
                                <img src="<?php echo base_url()?>assets/website/img/quote.png" alt="#">
                                <p><?php echo $value['reviewDec']; ?></p>
                                <img src="<?php echo base_url()?>assets/website/img/shape_1.png" alt="#" class="client_speech_shape">
                            </div>
                            <div class="client_info">
                                <img src="<?php echo base_url('uploads/parents_review_image/'.$value['parents_review_image'])?>" alt="#">
                                <h4><?php echo $value['parentName']; ?><span class="color_1"><?php echo $value['className']; ?>.Kg</span></h4>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/feature_5.png" alt="#"></div>
        </div>
        <div class="testimonial_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_4.png" alt="#"></div>
        </div>
        <div class="testimonial_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_6.png" alt="#"></div>
        </div>
        <div class="testimonial_animation_4">
            <div data-parallax='{"x": 30, "y": -110, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/icon/event_7.png" alt="#"></div>
        </div>
    </section>
    <!-- testimonial part end -->
    <!-- ad-banner area start  -->
    <section class="ad-banner-container mt-5">
        <div class="header-ad-banner">
            <div class="header-ad-text">
                <div class="demo-ad-text">
                    <span>
                        <p class="bold-text">Experience Vedic Tree</p>
                        <!--<div class="small-font">For Absolutely Free</div>-->
                    </span>
                    <div class="book-now">
                        <div onclick="book_demo()" class="book-button">Book Your Free Classes Now</div>
                    </div>
                </div>
            </div>
            <div class="image-container"></div>
        </div>
    </section>
    <!-- ad-banner area end  -->

    <section class="event_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".5s"><span class="title_overlay_effect">Frequently Asked Questions</span></h1>
                    </div>
                </div>
            </div>
            <div class="faq-accordion wow fadeInDown" data-wow-delay=".5s">
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Who can take these online learning classes?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Kids between 2.5years to 6 years</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">What is parent’s role in this program?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Pre-pandemic it was sole responsibility of teachers and school to handle child growth and learning but
                            post pandemic it is a joint responsibility of teacher and parents, so that child’s overall growth and
                            development happens smoothly. An online class for preschoolers is a new learning environment for all of us
                            and children are no exception. They will take some time to settle, so some parental support is required in
                            the early period. We have seen that at Vedic Tree, children settle in 1-2 weeks. Beyond this, friend,
                            motivator, and coach are the three big roles that you, as a parent, need to fulfill. Create positivity
                            around the online preschool, create a learning space at home, and motivate the child to attend the online
                            classes every day. Take some time and provide help to the child wherever required. It's a great time to be
                            a partner in your child's learning journey! Don't worry, we are with you. Together we will help your child
                            to continue her learning.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">Where would be animated videos of syllabus available?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>You can access the videos anytime through our Vedic Tree Kids Learning App or on our website <a href="<?php echo base_url(); ?>">www.vedictreeschool.com</a> by logging into your account.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">What are the key benefits of this program?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <ol style="color: #8f9093;margin: 1em 0;font-size: 18px;">
                            <li>Your child will not miss school.</li>
                            <li>Online classes for kids will help to create and set the routine for the day</li>
                            <li>Your child will have all the elements of Preschool - learning, fun, laughter with friends,
                                rhymes and Stories drawings having lunch together and many more aspects of going to preschool.</li>
                            <li>It will not only help your child to continue his/her learning but also help them develop very important
                                Socio-emotional and gross motor skills.</li>
                            <li>Your child will learn at their own pace.</li>
                            <li>Become independent and confident.</li>
                            <li>Interaction with their friends and teachers.</li>
                            <li>It will have a positive impact on his/her well-being.</li>
                            <li>Learn safety and hygiene protocol in a fun way.</li>
                            <li>Develop an interest in extracurricular activities.</li>
                            <li>You will be able to engage your child in meaningful activities.</li>
                        </ol>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">What if we miss an online class?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>The curriculum of every online class is available in detail through easy-to-follow steps and
                            illustrative videos and photos on the Vedic Tree Kids Learning app and on our website. In case you miss
                            an online class, you can conduct the activity or get the videos of syllabus which you have missed on our
                            app and on website. </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="<?php echo base_url('frequently-asked-questions'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"> </a>
            </div>
        </div>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -10px;right: 0px;">
                        <span aria-hidden="true"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>


<footer class="footer_section footer_style_3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="single_footer_widget">
                    <a href="#" class="footer_logo"><img src="<?php echo base_url()?>assets/website/img/register_logo.png" alt="#"></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                <div class="single_footer_widget footer_nav">
                    <h4>Follow Us At</h4>
                    <div class="social-buttons">
                        <!--<a href="https://www.facebook.com/vedictreekidslearningapp/" target="_blank" class="fa fa-facebook"></a>-->
                        <a href="https://www.facebook.com/vedictreekidslearning/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/Vedictreekids/" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/vedictree_kidslearning_app/" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://www.linkedin.com/company/77918646/admin/" target="_blank" class="fa fa-linkedin"></a>
                        <a href="https://www.youtube.com/c/VedicTreeKidsLearningApp-VT/featured" target="_blank" class="fa fa-youtube-play"></a>
                    </div>
                    <h4 style="margin-top: 10px;">App Available at</h4>
                    <a href="https://play.google.com/store/apps/details?id=com.vedictree.preschool" target="_blank">
                        <img src="<?php echo base_url()?>assets/website/landing/img/google-play.png" style="width: 160px;" alt="#">
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".7s">
                <div class="single_footer_widget footer_nav">
                    <h4>Reach Us At</h4>
                    <div class="footer_contact_info">
                        <div><a href="mailto:admissions.vedictree@gmail.com" target="_blank"><i class="fa fa-envelope mr-3"></i>admissions.vedictree@gmail.com</a></div>
                        <div><a href="tel:+91 93200 67800"><i class="fa fa-phone mr-3"></i>+91 93200 67800</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                <div class="single_footer_widget footer_nav">
                    <div class="google-app-mobile">
                        <img src="<?php echo base_url()?>assets/website/img/mobile-logo.png" style="height: 230px;" alt="#"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_animation_1">
        <div data-parallax='{"x": 2, "y": 60, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/footer_icon_1.png" alt="#"></div>
    </div>
    <div class="footer_animation_2">
        <div data-parallax='{"x": 10, "y": 70, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/footer_icon_2.png" alt="#"></div>
    </div>
    <div class="footer_animation_3">
        <div data-parallax='{"x": 30, "y": 80, "rotateZ":0}'><img src="<?php echo base_url()?>assets/website/img/footer_icon_3.png" alt="#"></div>
    </div>
</footer>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<!-- wow js -->
<script src="<?php echo base_url()?>assets/website/vendors/wow/wow.min.js"></script>
<!-- magnify popup js -->
<script src="<?php echo base_url()?>assets/website/vendors/magnify_popup/jquery.magnific-popup.js"></script>
<!-- parallax js -->
<script src="<?php echo base_url()?>assets/website/vendors/parallax/jquery.parallax-scroll.js"></script>
<script src="<?php echo base_url()?>assets/website/vendors/parallax/parallax.js"></script>
<!-- nice select -->
<script src="<?php echo base_url()?>assets/website/vendors/niceselect/js/jquery.nice-select.min.js"></script>
<!-- magnify popup js -->
<script src="<?php echo base_url()?>assets/website/vendors/magnify_popup/jquery.magnific-popup.js"></script>
<!-- custom js -->
<script src="<?php echo base_url()?>assets/website/js/custom.js"></script>
<script>
$(document).ready(function() {
    var o;
    $("#studentMobile").change(function(){
        
            if($("#studentMobile").val().length != 10){
                alert("Please Enter 10-digit Mobile Number");
                return false;
            }else{
                $.ajax({

            type:"POST",
            data:{studentMobile:$("#studentMobile").val()},
            url:"<?php echo base_url('website/temp_enquriy_verify_mob')?>",
            success:function(data){
            //   console.log(data);
              var myArr = JSON.parse(data);
              if(myArr.otp_status == 1){
                  o = myArr.OTP;
                  $("#cotp").val(myArr.OTP);
                  $("#otpMsg").show();
                   $("#stuMobOTP").removeAttr("disabled");
              }else{
                  $("#otpMsg").hide();
              }
            //   if(data==1){
            //     color = Math.floor((Math.random() * 4) + 1);

            //     $.notify({
            //         icon: "tim-icons icon-bell-55",
            //         message: "Mobile Verify Successfully !"

            //       },{
            //           type: type[color],
            //           timer: 8000,
            //       });
            //   }else{
            //     color = Math.floor((Math.random() * 4) + 1);

            //     $.notify({
            //         icon: "tim-icons icon-bell-55",
            //         message: "Mobile Is Not Verify Successfully !"

            //       },{
            //           type: type[color],
            //           timer: 8000,
            //       });
            //     $('.forgetbtn').attr('disabled', 'disabled');
            //   }
            },
            error:function(error){

            }


          });
                
                
                
               
            }
        
    });
    
    $("#stuMobOTP").change(function(){
       if($("#stuMobOTP").val() == o){
            $("#verifyMobile").html("VERIFIED");
            $("#verifyMobile").show();
        }else{
            $("#verifyMobile").html("WRONG OTP!");
            $("#verifyMobile").show();
         
        }
    });
    
       $("form").submit(function(e){
            if($("#stuMobOTP").val() == o){
            $("#verifyMobile").html("VERIFIED");
            $("#verifyMobile").show();
        }else{
            $("#verifyMobile").html("WRONG OTP!");
            $("#verifyMobile").show();
              e.preventDefault();
        }
      
    });
    
    //  



// FAQ Accordion start
const items = document.querySelectorAll(".faq-accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }
    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}
items.forEach(item => item.addEventListener('click', toggleAccordion));

    // Gets the video src from the data-src on each button
    var $videoSrc;
    $(".video-btn").click(function() {
        $videoSrc = $(this).attr("data-src");
        console.log("button clicked" + $videoSrc);
    });
    // when the modal is opened autoplay it
    $("#myModal").on("shown.bs.modal", function(e) {
        console.log("modal opened" + $videoSrc);
        $("#video").attr("src",$videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1");
    });
    // stop playing the youtube video when I close the modal
    $("#myModal").on("hide.bs.modal", function(e) {
        // a poor man's stop video
        $("#video").attr("src", $videoSrc);
    });
});
$(".field-wrapper .field-placeholder").on("click",function(){$(this).closest(".field-wrapper").find("input").focus()}),
$(".field-wrapper input").on("keyup",function(){$.trim($(this).val())?$(this).closest(".field-wrapper").addClass("hasValue"):$(this).closest(".field-wrapper").removeClass("hasValue")}),
$(".field-wrapper .field-placeholder1").on("click",function(){$(this).closest(".field-wrapper").find("input").focus()}),
$(".field-wrapper input").on("keyup",function(){$.trim($(this).val())?$(this).closest(".field-wrapper").addClass("hasValue"):$(this).closest(".field-wrapper").removeClass("hasValue")}),
$(".owl-carousel").owlCarousel({loop:!0,margin:20,nav:!1,autoplay:!0,autoplayTimeout:5e3,items:2,responsive:{0:{items:1,nav:!1},600:{items:1,nav:!1},1000:{items:2,nav:!1}}}),window.onscroll=function()
{myFunction()};var header=document.getElementById("myHeader"),sticky=header.offsetTop;function myFunction(){window.pageYOffset>sticky?header.classList.add("sticky"):header.classList.remove("sticky")}
function book_demo(){$("html, body").animate({scrollTop:$("#demo_section").offset().top},1500)}function off50_fees(){$("html, body").animate({scrollTop:$("#50off_fees_section").offset().top-120},1500)}
function off50_fees_mobile(){$("html, body").animate({scrollTop:$("#50off_fees_section").offset().top-120},1500)}$("#admissionsD").on("click",function()
{if(""!=$("#studentName").val()&&""!=$("#studentEmail").val()&&""!=$("#studentMobile").val()&&""!=$("#selectClassD option:selected").val())
{var e=$("#selectClassD option:selected").text();""!=e&&fbq("track","Lead",{content_name:e})}}),$("#admissionsM").on("click",function()
{if(""!=$("#studentNameMobile").val()&&""!=$("#studentEmailMobile").val()&&""!=$("#studentMobileMobile").val()&&""!=$("#selectClassM option:selected").val())
{var e=$("#selectClassM option:selected").text();""!=e&&fbq("track","Lead",{content_name:e})}});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
 if(isset($errorsweet)){ ?>
  <script type="text/javascript">
    swal("<?php if(isset($errorsweet)){ echo $errorsweet['error']; } ?>");
    setTimeout(function() {
        window.location.href = '<?php echo base_url('register')?>';
    }, 5000);
  </script>

<?php } ?>
<script>
// !function(){
//     let e=new Date("Oct 02, 2021 00:00:00").getTime();
//     setInterval(function(){
//         let t=(new Date).getTime(),
//         n=e-t;
//         if(document.getElementById("days").innerText=Math.floor(n/864e5),
//         document.getElementById("hours").innerText=Math.floor(n%864e5/36e5),
//         document.getElementById("minutes").innerText=Math.floor(n%36e5/6e4),
//         document.getElementById("seconds").innerText=Math.floor(n%6e4/1e3),n<0){
//             document.getElementById("headline");
//             let e=document.getElementById("countdown"),
//             t=document.getElementById("content");
//             e.style.display="none",
//             t.style.display="block",
//             clearInterval(x);
//         }
//     },0)
// }();
</script>
<script type="text/javascript">
$(document).ready(function(){$.ajax({type:"POST",url:"<?php echo base_url('website/countupdate');?>",success:function(o){1==o?console.log(".."):console.log("...")},error:function(o){console.log(o)}})});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6109468ed6e7610a49ae5ea8/1fc63n7v4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->