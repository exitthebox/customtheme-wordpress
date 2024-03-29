<?php
/**
 * Template Name: Home Page
 * 
 * The template for displaying the page-slim post type
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CustomTheme
 * 
 * @since CustomTheme 1.0
 */
 ?>
 
<?php get_header(); ?>

<div class="jumbotron gradient-bg margin-neg-twenty">
    <div class="container text-center">
    
        <h1>Welcome to our custom theme</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        
        <?php if ( have_posts() ) : 
            while (have_posts()) : the_post(); ?>
                
        <?php
                 the_content(); 
            endwhile; 
        endif; ?>
       
    </div>
</div>

<?php get_footer(); ?>