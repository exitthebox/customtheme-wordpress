<?php
/**
 * The template partial for displaying single blog post content.
 * Paste from twentysixteen theme
 *
 *
 * @package CustomTheme
 * 
 * @since CustomTheme 1.0
 */
 ?>
 
<div id="post-<?php the_ID(); ?>"<?php post_class(); //adds class identifier for a specific post for css purposes ?>>
    <h1><?php the_title(); ?> </h1>
    <p><?php the_date(); ?> </p>
    <?php
     the_content(); 
     wp_link_pages( array(
         'before'       => '<div class="page-links"><span class="page-links-title">' . __('Pages: ', 'customtheme') . '</span>',
         'after'        => '</div>',
         'link-before'  => '<span>',
         'link-after'   => '</span>',
         'pagelink'     => '<span class="screen-reader-text">' . __('Page ', 'customtheme') . '</span>%',
         'separator'    => '<span class="screen-reader-text">, </span>'
         
         ));//pagination. make sure in the text, in the admin panel, you add <!--nextpage-->?>
</div>