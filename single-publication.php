<?php get_header(); ?>
<div id="content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="row header">
<h1 class="entry-title col-md-10 col-md-push-1"><?php echo the_title(); ?></h1>
<h2 class="entry-subtitle col-md-10 col-md-push-1"><?php $pub = wp_get_post_terms(get_the_ID(), 'publisher');
echo $pub[0]->name; ?> | <?php $num_months = ['1'=>'January', '2'=>'Febuary', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August', '9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December'];
$pub_date = wp_get_post_terms(get_the_ID(), 'publish_date');
$pub_date = explode('/', $pub_date[0]->name);
echo $num_months[$pub_date[0]].' '.$pub_date[1];
?></h2>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>
<div class="entry-content"><?php the_post(); ?></div>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
</article>
</div>
<?php get_footer(); ?>