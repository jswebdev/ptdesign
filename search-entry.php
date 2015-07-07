<section class="search-entry entry-list">
<header class="header row">
<h2 class="entry-subtitle col-md-10 col-md-push-1">Concepts</h2>
</header>
<?php
global $con_list;
if(count($con_list)==0) {
	echo '<section class="row"><div class="entry-content col-md-10 col-md-push-1">No Concepts Found</div></section>';
} else {
	echo '<section class="row">';
foreach($con_list as $post_id) {
	$post = get_post($post_id);
	?>
<section class="entry-cell col-lg-4"><a href="/<?php echo $post->post_name; ?>">
<?php $thumb = get_post_custom($post->ID);
$thumb = $thumb['_thumbnail_id']['0'];
$thumb = wp_get_attachment_image_src($thumb, 'medium');
?>
<img src="<?php echo $thumb[0];?>" alt="<?php echo $post->post_title; ?>">
<h2 class="entry-title"><?php echo $post->post_title; ?></h2>
<div class="entry-content">
Designed by: <?php $user = get_user_by('id', $post->post_author); echo $user->first_name; ?>
</div>
</a>
</section>
</section>
<?php } } ?>
</section>