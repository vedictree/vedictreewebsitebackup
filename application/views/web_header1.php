<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T3FX7LW');
  </script>
  <!-- End Google Tag Manager -->
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <?php if ($metainfo) { ?>
    <title><?php echo $metainfo[0]['web_Title']; ?></title>
    <meta name="description" content="<?php echo $metainfo[0]['web_metaDesc']; ?>" />
    <meta name="keywords" content="<?php echo $metainfo[0]['web_pageKeyword']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fe4b7b">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fe4b7b">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fe4b7b">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $metainfo[0]['web_metaTitle']; ?>" />
    <meta property="og:url" content="<?php echo $metainfo[0]['web_metaUrl']; ?>" />
    <meta property="og:description" content="<?php echo $metainfo[0]['web_metaDesc']; ?>" />
    <meta property="og:image" itemprop="image" content="<?php echo base_url() ?>uploads/weboggpic/<?php echo $metainfo[0]['weboggpic']; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <!-- Canonical Url -->
    <link rel="canonical" href="<?php echo $metainfo[0]['web_metaTitle']; ?>" />
  <?php } else { ?>
    <title>Vedic Tree</title>
  <?php } ?>
  <link rel="icon" href="<?php echo base_url() ?>assets/website/img/favicon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/bootstrap.min.css" />
  <!-- animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/animate.css" />
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/vendors/fontawesome/css/all.min.css" />
  <!-- elegent icon CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/vendors/themefy_icon/themify-icons.css" />
  <!-- nice select CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/vendors/niceselect/css/nice-select.css" />
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/vendors/owl_carousel/css/owl.carousel.css" />
  <!-- magnify popup CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/vendors/magnify_popup/magnific-popup.css" />
  <!-- style CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/style.min.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/style.css" />
  <!--<script src="https://use.fontawesome.com/d1eef018a8.js"></script>-->

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/main.css">

  <style>
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

  <!-- <style>
* {box-sizing: border-box}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 450px;
  height:500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style> -->



</head>

<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->