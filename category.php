<?php get_header(); ?>
<section id="content" role="main">
<header class="header row">
<h1 class="entry-title col-md-10 col-md-push-1"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<div class="row entry-list">
<?php if ( have_posts() ) : while ( have_posts() ) : 
global $wp_query; $wp_query->next_post(); ?>
<section class="entry-cell col-lg-4"><a href="/<?php echo $wp_query->post->post_name; ?>">
<?php $thumb = get_post_custom($wp_query->post->ID);
$thumb = $thumb['_thumbnail_id']['0'];
$thumb = wp_get_attachment_image_src($thumb, 'medium');
?>
<img src="<?php echo $thumb[0];?>" alt="<?php echo $wp_query->post->post_title; ?>">
<h2 class="entry-title"><?php echo $wp_query->post->post_title; ?></h2>
<div class="entry-content">
Designed by: <?php $user = get_user_by('id', $wp_query->post->post_author); echo $user->first_name; ?>
</div>
</a>
</section>
<?php endwhile; endif; ?>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>