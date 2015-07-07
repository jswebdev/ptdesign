<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header row">
<h1 class="entry-title  col-md-push-1 col-md-10"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php 
$pub_list;
$con_list;
while ( have_posts() ) : 
global $wp_query; $wp_query->next_post();
if($wp_query->post->post_type=='publication') {
	$pub_list[] = $wp_query->post->ID;
}
if($wp_query->post->post_type=='post') {
	$con_list[] = $wp_query->post->ID;
}
endwhile;
get_template_part('search', 'entry');
get_template_part('search', 'publications');
//get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header row">
<h2 class="entry-title col-md-10 col-md-push-1"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
</header>
<section class="entry-content row">
<p class="col-md-10 col-md-push-1"><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<div class="col-md-10 col-md-push-1">
<?php get_search_form(); ?>
</div>
</section>
</article>
<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>