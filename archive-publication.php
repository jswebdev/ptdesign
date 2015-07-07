<?php get_header(); ?>
<section id="content" role="main">
<header class="header row">
<h1 class="entry-title col-lg-10 col-lg-push-1"><?php _e( '', 'blankslate' ); ?><?php post_type_archive_title('','publications'); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<?php get_template_part('publication', 'list'); ?>
<?php //get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>