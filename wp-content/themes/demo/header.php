<?php $options = get_option( 'startup_options' ); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="" class="hfeed">
<header id="header" role="banner">
<?php
if ( $options['social'] ) {
echo '<div id="social">';
if ( $options['googleurl']!="" )
echo '<a href="' . esc_url( $options['googleurl'] ) . '" id="social-google"><img src="' . get_template_directory_uri() . '/images/social/google.png" alt="Google+" /></a>';
if ( $options['linkedinurl']!="" )
echo '<a href="' . esc_url( $options['linkedinurl'] ) . '" id="social-linkedin"><img src="' . get_template_directory_uri() . '/images/social/linkedin.png" alt="LinkedIn" /></a>';
if ( $options['twitterurl']!="" )
echo '<a href="' . esc_url( $options['twitterurl'] ) . '" id="social-twitter"><img src="' . get_template_directory_uri() . '/images/social/twitter.png" alt="Twitter" /></a>';
if ( $options['facebookurl']!="" )
echo '<a href="' . esc_url( $options['facebookurl'] ) . '" id="social-facebook"><img src="' . get_template_directory_uri() . '/images/social/facebook.png" alt="Facebook" /></a>';
echo '</div>'; }
?>
<section id="branding" class="container ml-5">
<div id="site-title">
<?php
if ( !is_singular() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home">';
if ( $options['logo']!="" )
echo '<img src="' . esc_url( $options['logo'] ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" id="logo" />';
else
echo esc_html( bloginfo( 'name' ) );
echo '</a>';
if ( !is_singular() ) { echo '</h1>'; }
?>
</div>
<?php if ( $options['description'] ) { echo '<div id="site-description">' . esc_html( get_bloginfo( 'description' ) ) . '</div>'; } ?>
</section>
<nav id="menu" role="navigation">
	<div id="mobile_menu" class="slicknav_menu">
		<a href="#" aria-haspopup="true" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
		<nav class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu">
		<a href="<?php echo get_site_url(); ?>" >Home</a>
		<a href="<?php echo get_site_url(); ?>/our-services" class="">Our Services</a>
		<a href="<?php echo get_site_url(); ?>/seeing-us" class="">Seeing Us</a>
		<a href="<?php echo get_site_url(); ?>/our-team" class="">Our Team</a>
		<a href="<?php echo get_site_url(); ?>/resorces" class="">Resources</a>
		<a href="<?php echo get_site_url(); ?>/media" class="">Media</a>
		<a href="<?php echo get_site_url(); ?>/contact-us-find-us" class="last ">Contact Us / Find Us</a>
		<div class="navSearch">
		<form role="search" method="get" class="search_form" action="">
			<input type="submit" value="">
			<input class="uc" type="text" name="s" placeholder="Search">
		</form>
		
		</div>
	</nav>
	</div>
	<div id="mainMenu">
		<nav class="menu-navigation-basic">
		<a  href="<?php echo get_site_url();?>" > Home</a>
		<a href="<?php echo get_site_url(); ?>/our-services" >Our Services</a>
		<a href="<?php echo get_site_url(); ?>/seeing-us" >Seeing Us</a>
		<a href="<?php echo get_site_url(); ?>/our-team" >Our Team</a>
		<a href="<?php echo get_site_url(); ?>/resorces" >Resources</a>
		<a href="<?php echo get_site_url(); ?>/media" >Media</a>
		<a href="<?php echo get_site_url(); ?>/contact-us-find-us" class="last ">Contact Us / Find Us</a>
		<div class="navSearch">
			<form role="search" method="get" class="search_form" action="http://dev.ascotwomensclinic.co.nz">
				<input type="submit" value="">
				<input class="uc" type="text" name="s" placeholder="Search">
			</form>
		</div>
		</nav>
	</div>


</nav>
</header>
<?php if ( $options['crumbs'] ) { startup_breadcrumbs(); } ?>
<?php if ( $options['slider'] ) { echo show_nivo_slider(); } ?>
<?php if ( $options['twitter'] ) {
echo '<div id="twitter-feed">';
echo '<a class="twitter-timeline" data-theme="light" data-link-color="#0099ff" data-chrome="noheader nofooter noborders noscrollbar transparent" data-tweet-limit="1" data-show-replies="false" data-screen-name="' . sanitize_text_field( $options["twitname"] ) . '" href="https://twitter.com/' . sanitize_text_field( $options["twitname"] ) . '" data-widget-id="347461587419926528">Tweets by @' . sanitize_text_field( $options["twitname"] ) . '</a>';
echo '</div>'; } ?>
<div id="">

