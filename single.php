<?php
/**
 * The main single post template file
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
        <div class="col-md-8">
            <?php if ( have_posts() ) : 
                //the loop
                while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'single'); ?>
                    <?php //show a comment box
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    ?>
            <?php endwhile; ?>
           <?php endif; ?>
            
            <?php 
                if(is_singular( 'post')) {
                    the_post_navigation( array(
                        'next_text' => 'Next',
                        'prev_text' => 'Previous'
                        ) );
                }
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>





