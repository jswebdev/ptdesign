<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header row">
<h1 class="entry-title col-md-push-1 col-md-11"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content row">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php $content = get_the_content(); 
$content = wpautop($content);
$content = explode('<p>¶</p>', $content);
$output = str_replace('<p>', '<p class="col-md-4 col-md-push-1">', $content[0]);
$content = str_replace('<h2>', '<div class="col-md-3 col-md-push-1 homepage-link"><h2>', $content[1]);
$content = str_replace('</p>', '</p></div>', $content);
$output = $output . $content;
echo $output;
?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>