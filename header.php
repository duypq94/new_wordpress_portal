<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <link rel="profile" href="http://gmgp.org/xfn/11"> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
     fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

<div class="container-fluid logo">
    <div class="container header">     
        <?php 
        printf('<a href="%1$s"><img src="%2$s/asset/imgs/logo_bkwh-1.jpg" alt="media-logo" class="md-logo"></a>',get_bloginfo('url'), get_template_directory_uri());
        ?> 
        <div class="search-bar" id="search">
            <?php 
	        if(is_active_sidebar('main-sidebar')) :
		        dynamic_sidebar('main-sidebar');
	        else :
		        _e('This is sidebar ','portal');
	        endif;
            ?>
        </div>
    </div>    
</div>

<div class="container primary-menu-area">
    <div class="collapse">
            <div id="collapse-button" onclick="onCollapse()">
                <span></span>
                <span></span>
                <span></span>
            </div>
    </div>
    <?php portal_menu('primary-menu') ?>
</div>