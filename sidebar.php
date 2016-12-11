<?php
/**
 * The template for displaying the sidebar and widgets
 *
 *
 * @package CustomTheme
 * 
 * @since CustomTheme 1.0
 */

?>

<?php if (is_active_sidebar('sidebar-1') ) : ?>
    <aside is="secondary" class="sidebar widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
<?php endif; ?>