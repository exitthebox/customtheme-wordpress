<?php
/**
 * The template for displaying the header
 *
 *
 * @package CustomTheme
 * 
 * @since CustomTheme 1.0
 */

?>
<!DOCTYPE html>
<!--add language_attributes for local language of user -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />-->
        <!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); //allows a unique identifier for the page. can be used in css to add page specific styles ?>>
        <nav class="navbar gradient-bg main-custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                    
                </div>
                <div class="collapse navbar-collapse" id='bs-example-navbar-collapse-1'>
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="#">Link</a></li>-->
                        <?php 
                            //array properties for a nav menu
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'menu_class'        => 'primary-manu',
                                'container'         => false,
                                'items_wrap'        => '%3$s'
                            ));
                        ?>
                        
                    </ul>
                </div>
                
            </div>
            
        </nav>
       