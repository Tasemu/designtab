<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package DesignTab
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=454677171281843";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<header id="masthead" class="site-header" role="banner">
	<div class="site">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></h1>

			<div class="social-box">
				<ul>
					<li>
						<div id="fblike">
							<img src="<?php echo get_template_directory_uri()?>/inc/img/Facebook.png">
						</div>
						<div id="fbinfo" style="display:none;"></div>
						<div class="socialover"></div>
					</li>
					<li>
						<div id="twitterlike">
							<img src="<?php echo get_template_directory_uri()?>/inc/img/Twitter.png">
						</div>
						<div id="twitterinfo" style="display:none;"></div>
						<div class="socialover"></div>
					</li>
					<li>
						<div id="youtube">
							<img src="<?php echo get_template_directory_uri()?>/inc/img/Youtube.png">
						</div>
						<div id="youtubeinfo" style="display:none;"></div>
						<div class="socialover"></div>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- #site -->
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="site">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'designtab' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'designtab' ); ?>"><?php _e( 'Skip to content', 'designtab' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<span class="search-form"><?php get_search_form(); ?></span>
		</div>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div id="main" class="site-main">
