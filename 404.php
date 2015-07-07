<?php get_header(); ?>
<section id="content" role="main">
<article id="post-0" class="post not-found row">
<header class="header col-md-10 col-md-push-1">
<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<section class="entry-content col-md-10 col-md-push-1">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>