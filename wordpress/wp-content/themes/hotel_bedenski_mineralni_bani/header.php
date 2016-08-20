<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-6 col-md-8">
                    <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?><p class="sub-title"><?php bloginfo('description'); ?></p></a></h1>
                </div>
                <div class="contact-details col-xs-6 col-md-4">
                    <p>Телефон: <span class="phone">08888 448 339</span></p>
                    <p>Беденски Бани, <a href="#" class="view-on-map">Виж на картата</a></p>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
        
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                	
                	<?php
            			wp_nav_menu( array(
                			'menu'              => 'primary',
               				'theme_location'    => 'primary',
                			'depth'             => 2,
                			'menu_class'        => 'nav navbar-nav',
                			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                			'walker'            => new wp_bootstrap_navwalker())
						);
        			?>

                	
                </div>
            </div>
        </nav>
    </header>
