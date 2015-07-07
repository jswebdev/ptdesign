<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Cabin:700|Coustard' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/tabs.js"></script>-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="bg-overlay"></div>
<div id="wrapper" class="hfeed container">
<header id="header" role="banner">
<section id="branding" class="row">
<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
<a href="/"><img src="<?php echo get_stylesheet_directory_uri().'/images/logo.jpg'; ?>" alt="logo" class="col-md-3"></a>
<div id="search" class="col-md-6 col-lg-push-4 col-md-push-2">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- J. T. Design -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-1375442337271668"
     data-ad-slot="3854014388"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php get_search_form(); ?>
<div class="site-login">
<?php if(is_user_logged_in()) {
?>
<a href="<?php echo wp_logout_url('/'); ?>">Logout</a> | <a href="/wp-admin/profile.php">Profile</a>
<?php } else { ?>
<a href="/wp-login.php">Login</a> | <a href="/wp-login.php?action=register">Register</a>
<?php } ?>
</div>
</div>
</section>
<nav id="menu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class'=>'nav'	 ) ); ?>
</nav>
</header>
<div id="container">