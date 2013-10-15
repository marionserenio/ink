<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory') ?>/css/foundation.min.css">
        <script src="<?php echo bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet/less" type="text/css" href="<?php echo bloginfo('template_directory') ?>/style.less" />
        <script src="<?php echo bloginfo('template_directory') ?>/js/less-1.3.3.min.js" type="text/javascript"></script>
        <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<nav class="top-bar">
    <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
            <h1><a href="/"><img src="<?php echo bloginfo('template_directory') ?>/img/logo.png"></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

      <section class="top-bar-section">
        <ul class="right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">About</a></li>
            <li class="has-form">
                <a class="button" href="#">Search!</a>
            </li>
        </ul>
    </section>
</nav>