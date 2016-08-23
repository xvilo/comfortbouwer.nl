<!DOCTYPE html>
<html lang="en" class="modernizr-no-js">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />

        <link rel="preconnect" href="//ajax.googleapis.com" />

        <meta http-equiv="cleartype" content="on" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="description" content="" />

        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/stylesheets/app.css" />-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" async>
        <!-- <script src="<?php echo get_template_directory_uri() ?>/media/javascripts/modernizr.js"></script> -->
        <?php echo wp_head() ?>
    </head>
    <body <?php body_class(''); ?>>
	    <div class="wrapper">
		    <header class="main-header">
			    <section class="header-topbar">
				    <div class="row">
				    	<p>Lees klantbeoordelingen <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span> <i class="fa fa-star" aria-hidden="true"></i></p>
				    </div>
			    </section>
			    <section class="header-middle">
				    <div class="row">
					    <div class="large-4 columns">
						    <div class="header-logo">
							     <a href="<?php echo site_url(); ?>"><i class="m-icon icon--ui__logo_big"><svg><use xlink:href="<?php echo get_template_directory_uri() ?>/media/images/sprites/ui.svg#logo_big" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></i></a>
						    </div>
					    </div>
					    <div class="large-4 columns">
						    <div class="header-text">
							    <p><i class="fa fa-phone-square" aria-hidden="true"></i> 06 00 00 00 00</p>
						    </div>
					    </div>
				    </div>
				    <div class="row">
					    <nav class="header-menu">
						    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					    </nav>
				    </div>
			    </section>
		    </header>