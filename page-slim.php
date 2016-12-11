<?php
/**
 * Template Name: Slim Page
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

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php if ( have_posts() ) : 
                while (have_posts()) : the_post(); ?>
                    <h2 class="text-center"> <?php the_title(); ?> </h2>
            <?php
                     the_content(); 
                endwhile; 
            endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>