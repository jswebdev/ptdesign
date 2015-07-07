<div class="publication-list">
<header class="header row">
<h2 class="entry-subtitle col-md-10 col-md-push-1">Publications</h2>
</header>
<?php 
$num_months = ['1'=>'January', '2'=>'Febuary', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August', '9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December'];
$min_year=10000000; $max_year=0; $pubs;
global $pub_list;
if(count($pub_list)==0) {
	echo '<section class="row"><p class="entry-content col-md-10 col-md-push-1">No Publications Found</p></section>';
} else {
foreach($pub_list as $key=>$postid) {
$post = get_post($postid);
$pub_date = wp_get_post_terms($post->ID, 'publish_date');
$the_pub = wp_get_post_terms($post->ID, 'publisher');
$pub_date_real = $pub_date[0]->name;
$pub_date = explode('/', $pub_date_real);
$pub_year = $pub_date[1];
if($pub_year>$max_year) {
	$max_year=$pub_year;
}
if($pub_year<$min_year) {
	$min_year=$pub_year;
}
$pub_date = $num_months[$pub_date[0].''].' '.$pub_date[1];
$entry = '<section class="publication-list-item col-lg-10 col-lg-push-1"><h1 class="entry-title"><a href="/'.$post->post_name.'">'.$post->post_title.'</a></h1><div class="entry-content">'.$the_pub[0]->name.' | '.$pub_date.'</div></section>';
$pubs[$pub_date_real] = $pubs[$pub_date_real].$entry;
}
while($max_year!=$min_year-1) {
	$month=12;
	while($month!=0) {
		$month = $month - 1;
		$test_date = $month.'/'.$max_year;
		if(isset($pubs[$test_date])==true) {
			echo '<div class="date-seperater col-lg-10 col-lg-push-1">'.$num_months[$month].' '.$max_year.'</div>';
			echo $pubs[$test_date];
		}
	}
	$max_year = $max_year - 1;
}
}?>
</div>
