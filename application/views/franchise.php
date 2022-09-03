<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title>Home One || Kipso || Online Education Learning & LMS HTML Template</title>-->
    <?php if($metainfo){ ?>
    <title><?php echo $metainfo[0]['web_Title']; ?></title>
    <meta name="description" content="<?php echo $metainfo[0]['web_metaDesc']; ?>" />
    <meta name="keywords" content="<?php echo $metainfo[0]['web_pageKeyword']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#022c46">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#022c46">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#022c46">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $metainfo[0]['web_metaTitle']; ?>" />
    <meta property="og:url" content="<?php echo $metainfo[0]['web_metaUrl']; ?>" />
    <meta property="og:description" content="<?php echo $metainfo[0]['web_metaDesc']; ?>" />
    <meta property="og:image" itemprop="image" content="<?php echo base_url()?>uploads/weboggpic/<?php echo $metainfo[0]['weboggpic']; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <!-- Canonical Url -->
    <link rel="canonical" href="<?php echo $metainfo[0]['web_metaTitle']; ?>" />
    <?php } else { ?>
    <title>Vedic Tree</title>
    <?php } ?>
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/website/franchise/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/website/franchise/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/website/franchise/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url()?>assets/website/franchise/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/webinar/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/vegas.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/website/franchise/css/responsive.css">
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <style>

img {
	max-width: 100%;
	display: block;
}
  .vertical-line{
        display: inline-block;
        border-left: 1px solid #ccc;
        margin: 50px 10px;
        height: 300px;
    }


// iOS Reset 
input {
	appearance: none;
	border-radius: 0;
}

.card {
	margin: 2rem auto;
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 425px;
	background-color: #FFF;
	border-radius: 10px;
	box-shadow: 0 10px 20px 0 rgba(#999, .25);
	padding: .75rem;
}

.card-image {
	border-radius: 8px;
	overflow: hidden;
	padding-bottom: 50%;
	background-image: url('assets/website/franchise/img/join-us.png');
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: 0 5%;
	position: relative;
}

.card-heading {
	position: absolute;
	left: 10%;
	top: 15%;
	right: 10%;
	font-size: 1.75rem;
	font-weight: 700;
	color: #735400;
	line-height: 1.222;
	small {
		display: block;
		font-size: .75em;
		font-weight: 400;
		margin-top: .25em;
	}
}

.card-form {
	padding: 2rem 1rem 0;
}

.input {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	padding-top: 1.5rem;
	&+.input {
		margin-top: 1.5rem;
	}
}

.input-label {
	color: #8597a3;
	position: absolute;
	top: 1.5rem;
	transition: .25s ease;
}

.input-field {
	border: 0;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

.action {
	margin-top: 2rem;
}

.action-button {
	font: inherit;
	font-size: 1.25rem;
	padding: 1em;
	width: 100%;
	font-weight: 500;
	background-color: #6658d3;
	border-radius: 6px;
	color: #FFF;
	border: 0;
	&:focus {
		outline: 0;
	}
}

.card-info {
	padding: 1rem 1rem;
	text-align: center;
	font-size: .875rem;
	color: #8597a3;
	a {
		display: block;
		color: #6658d3;
		text-decoration: none;
	}
}
    </style>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:franchise@vedictreeschool.com">franchise@vedictreeschool.com</a>
                    <a href="tel:+919320067800">+91 9320067800</a>
                </div><!-- /.topbar-one__left -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->

        <header class="site-header site-header__header-one" id="join">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix mobile">
                        <div>
                            <a class="navbar-brand" href="<?php echo base_url();?>">
                                <img src="<?php echo base_url()?>assets/website/franchise/images/logo-dark.png" class="main-logo" width="100" alt="Awesome Image" />
                            </a>  
                        </div> 
                        <div class="header__social mr-5" style="visibility: hidden;">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.header__social -->   
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class="navigation-box">
                            <li class="current"><a href="">Home</a></li>
                            <li><a href="#benefits" class="scrollTo">Benefits</a></li>
                            <li><a href="#requirements" class="scrollTo">Program</a></li>
                            <li><a href="#blog" class="scrollTo">Blogs</a></li>
                            <li><a href="#join" class="scrollTo">Join Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->
        
        <div class="mobile-view-lead m-3">
            <div class="card-image"></div>
            <form method="POST" action="<?php echo base_url('franchising-preschool-submit'); ?>">
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="" name="full_name" placeholder="Enter Full Name" required>
                     <span style="color:red"><?php echo form_error('full_name');?></span>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="" name="mobile_no" placeholder="Enter Mobile Number"  maxlength="10" required>
                     <span style="color:red"><?php echo form_error('mobile_no');?></span>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                     <span style="color:red"><?php echo form_error('email');?></span>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <input type="text" class="form-control" id="" name="city" placeholder="Enter City" required>
                         <span style="color:red"><?php echo form_error('city');?></span>
                    </div>
                    <div class="form-group col-6">
                        <select class="form-control" id="exampleFormControlSelect1" name="state">
                             <span style="color:red"><?php echo form_error('full_name');?></span>
                            <option disabled selected>Select State</option>
                               <?php
                                     if($states) {
                                        foreach($states as $state) {
                                ?>
                                  <option><?php echo $state['stateName']; ?></option>
                                <?php } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="query" placeholder="Franchise Query"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
        <div class="banner-wrapper">
            <section class="banner-one">
                <div class="banner-one__slide banner-one__slide-one">
                    <div class="container">
                        <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                        <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                        <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                        <img src="<?php echo base_url()?>assets/website/franchise/images/slider-1-scratch.png" alt="" class="banner-one__scratch">
                        <div class="banner-one__person">
                            <div class="card desktop-lead-view">
                                <div class="card-image"></div>
                                <form method="POST" action="<?php echo base_url('franchising-preschool-submit'); ?>">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" id="" name="full_name" placeholder="Enter Full Name" required>
                                         <span style="color:red"><?php echo form_error('full_name');?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="" name="mobile_no" placeholder="Enter Mobile Number" maxlength="10" required>
                                         <span style="color:red"><?php echo form_error('mobile_no');?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                         <span style="color:red"><?php echo form_error('email');?></span>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" id="" name="city" placeholder="Enter City" required>
                                            <span style="color:red"><?php echo form_error('city');?></span>
                                        </div>
                                        <div class="form-group col-6">
                                            <select class="form-control" id="exampleFormControlSelect1" name="state" required>
                                                 <span style="color:red"><?php echo form_error('state');?></span>
                                                <option disabled selected>Select State</option>
                                            <?php
                                                 if($states) {
                                                    foreach($states as $state) {
                                            ?>
                                              <option><?php echo $state['stateName']; ?></option>
                                            <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="query" required rows="3" placeholder="Franchise Query"></textarea>
                                        <span style="color:red"><?php echo form_error('query');?></span>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </form>
                            </div>
                        </div>
                        <!-- <img src="<?php echo base_url()?>assets/website/franchise/images/slider-1-person-1.png" class="banner-one__person" alt=""> -->
                        <div class="row no-gutters" style="visibility: hidden;">
                            <div class="col-xl-12">
                                <h3 class="banner-one__title banner-one__light-color">We Can<br>
                                    Teach You</h3><!-- /.banner-one__title -->
                                <p class="banner-one__tag-line">are you ready to learn?</p><!-- /.banner-one__tag-line -->
                            </div><!-- /.col-xl-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.banner-one__slide -->
            </section><!-- /.banner-one -->  
        </div><!-- /.banner-wrapper -->   
        <div class="mobile-banner">
             <img src="<?php echo base_url()?>assets/website/franchise/img/franchise_banner_4_mobile.png" alt=""> 
        </div>
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Welcome to New Way of learning<br>
                                     Hybrid Center</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text" style=" text-align:justify">
                                It is one of a kind of <b>School Partnership Program</b> that combines both online and offline Preschool, ensuring smooth running & guaranteed success for the Preschool Owner.
                                <!--It is one of its kind of <b>School Partnership Program</b> which combines both online & offline Preschool.
                                This Programme is provided so that the Preschool Owner is assured of guranteed success & smooth running of the Preschool.-->
                            </p><!-- /.about-two__text -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                        <div class="about-two__image">
                            <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                            <img src="<?php echo base_url()?>assets/website/franchise/img/welcome.png" alt="">
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <section class="course-one__top-title home-one" id="benefits">
            <div class="container">
                <div class="block-title mb-0">
                    <h2 class="block-title__title">Explore our <br>
                        Partnership Program Benefits</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
            <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
        </section><!-- /.course-one__top-title -->

        <section class="course-one course-one__teacher-details home-one">
            <div class="container">
                <div class="benefits-grid">
                    <div class="grid" style="display: grid;grid-gap: 20px;">
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-cogs"></i></div>
                            <div class="cta-three__single-text">Comprehensive Support & Training from Start to End</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-film"></i></div>
                            <div class="cta-three__single-text">HD Animated Curriculum based Videos</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-school"></i></div>
                            <div class="cta-three__single-text">Guidance & Support in Growing the Preschool</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-book-reader"></i></div>
                            <div class="cta-three__single-text">Whole Academic Year Curriculum Planning & Implementation</div>
                        </div>
                    </div>
                    <div class="grid" style="display: grid;grid-gap: 20px;">
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-desktop"></i></div>
                            <div class="cta-three__single-text">Website for Preschool</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-poll-h"></i></div>
                            <div class="cta-three__single-text">Social Media Creatives & Market Content Support</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-tasks"></i></div>
                            <div class="cta-three__single-text">Access to ERP System & Management Software</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fab fa-android"></i></div>
                            <div class="cta-three__single-text">Dedicated Android App</div>
                        </div>
                    </div>
                    <div class="grid" style="display: grid;grid-gap: 20px;">
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-chart-line"></i></div>
                            <div class="cta-three__single-text">Quality Audits At Regular Intervals</div>
                        </div>
                        <div class="benefit-box">
                            <div class="cta-three"><i class="far fa-chart-bar"></i></div>
                            <div class="cta-three__single-text">Support & Guidance in workflow Recruitment</div>
                        </div>
                        
                        <div class="benefit-box">
                            <div class="cta-three"><i class="fas fa-chart-pie"></i></div>
                            <div class="cta-three__single-text">Higher Returns</div>
                        </div>
                    </div>  
                </div>
            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->
        
       
        
       <section class="thm-gray-bg course-category-one" id="requirements">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title"><u>Types of Program</u></h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-5 clearfix">
                           <div class="cta-three__content">
                            <div class="block-title text-center">
                                <h2 class="video-two__title2" style="color:black;">As a Partner</h2><!-- /.block-title__title -->
                            </div>
                             <p class="cta-three__text" style="text-align:justify">
                                 In this program, Vedic Tree will be your System & Management Partner. You will get complete support with regards to School ERP system, complete curriculum for the 
                                 whole academic year, mobileapp, online portal for Teachers & Students, overall support and etc. We will provide you with the complete system and support from the very
                                 beginning of the setup of the school until it is operating smoothly.  
                                 <b>There is no charge for the Brand Name or any deposit or royalties in any way.</b>
                             </p>
                            </div>
                        <!--<img src="assets/website/franchise/img/require.png" class="cta-three__image" alt="">-->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-2">
                     <span class="vertical-line"></span>
                     </div>
                    <!--<hr style="   border:         none;border-left:    1px solid hsla(200, 10%, 50%,100);height:         100vh;width:          1px;">-->
                    <div class="col-lg-5">
                        <div class="cta-three__content">
                            <div class="block-title text-center">
                                <h2 class="video-two__title2" style="color:black;">As an Agent</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <!--<p class="cta-three__text" style="text-align:justify">You just have to do marketing and give information to the parents & make them understand
about Preschool Product and services. As they take admission & pay full fees, you will get a certain amount.</p>-->
<p class="cta-three__text" style="text-align:justify">
    As the parents take admission & pay the full fees, you will receive a certain amount. All you have to do is market and educate them about preschool products & services.
    <!--As a member of this program, Vedic Tree will be your System &
Management Partner. With Vedic Tree, you'll get complete support for
School ERP, a complete curriculum, a mobile app, an online
student / teacher portal, as well as overall support.-->
</p>
                           
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->

       

        <section class="video-two">
            <div class="container">
                <img src="assets/images/scratch-1-1.png" class="video-two__scratch" alt="">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="video-two__content">
                            <h2 class="video-two__title1">Vedic Tree's</h2>
                            <h2 class="video-two__title2">All New Learning<br>Hybrid Centres</h2>
                        </div><!-- /.video-two__content -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5 d-flex justify-content-lg-end justify-content-sm-start">
                        <div class="my-auto">
                            <a data-fancybox href="https://youtu.be/LZj4DuFKbCU" class="video-two__popup"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                            <!-- /.video-two__popup -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 d-flex justify-content-end -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-two -->
        
        <section class="thm-gray-bg course-category-one">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our Products</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="course-category-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="course-category-one__single color-1">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/development.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Holistic Development</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-2">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/anytime_access.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Anytime Access</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-3">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/live_videos_icon.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Live & Animated Session</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-4">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/hybrid_learning.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Hybrid Learning</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-5">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/value_based_education.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Value Based Education</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-6">
                            <div class="course-category-one__icon">
                                <img src="<?php echo base_url()?>assets/website/franchise/img/interactive_mobile_app.png" class="products-img">
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title">Interactive Mobile App</h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->
        
        <section class="contact-one">
            <div class="container">
                <div class="text-center">
                    <a href="#join" class="scrollTo"><button class="contact-one__btn thm-btn">Join Us</button></a>
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->
        
        <section class="blog-two" id="blog">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our Latest News <br> & Articles</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="blog-two__carousel owl-carousel owl-theme">
                    <?php
                        if($get_blogs){
                            foreach($get_blogs as $blog){  
                    ?>
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(https://www.vedictreeschool.com/uploads/blogs_images/<?php echo  $blog['file_upload'] ?>);">
                            <div class="blog-two__inner">
                                <div class="blog-two__date">
                                    <span>
                                        <?php
                                            $blg_date = $blog['date'];
                                            echo date('d', strtotime($blg_date));
                                        ?>
                                    </span>
                                    <?php
                                        $blg_date1 = $blog['date'];
                                        echo date('F', strtotime($blg_date1));
                                    ?>
                                </div><!-- /.blog-two__date -->
                                <h3 class="blog-two__title">
                                    <a href="<?php echo base_url('blogs/'.$blog['id']);?>" target="_blank"><?php  echo $blog['title']; ?></a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                <?php } } ?>    
                </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->

        <footer class="site-footer">
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; 2021 Vedic Tree Educare Private Limited. All Rights Reserved.</p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <a href="https://www.twitter.com/Vedictreekids/" target="_blank" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/vedictreekidslearning/" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://in.pinterest.com/livevedictree/" target="_blank" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.instagram.com/vedictreekidslearningapp/" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/TweenMax.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/wow.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/countdown.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/vegas.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/website/franchise/js/jquery.ajaxchimp.min.js"></script>
    <!-- template scripts -->
    <script src="<?php echo base_url()?>assets/website/franchise/js/theme.js"></script>
</body>

</html>

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script>
    $(document).ready(function(){
      <?php if($this->session->flashdata('msg')) { ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success("<?= $this->session->flashdata('msg') ?>");
      <?php } ?>
    });
  </script>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".successMessage").hide(3000);
    }, 3000); 
    
});
</script>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".successMessage1").hide(3000);
    }, 3000); 
    
});
</script>

<script>
$(".scrollTo").on('click', function(e) {
    e.preventDefault();
    $(".main-navigation").css("display", "none");
    var target = $(this).attr('href');
    $('html, body').animate({
    scrollTop: ($(target).offset().top-120)
    }, 2000);
});
</script>