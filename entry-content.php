<section class="entry-content row">
<div class="col-lg-5 col-lg-push-1">
<?php the_content(); ?>
</div>
<div class="col-lg-6 col-lg-push-1">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>