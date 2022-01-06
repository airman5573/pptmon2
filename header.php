<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PPTMON
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- <script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script> -->
	<!-- <meta name="google-site-verification" content="f7KyD6HOox71AT9ixx0WFM-lhZemYhadOUk0khWlm-o" /> -->
	<meta name="google-site-verification" content="f7KyD6HOox71AT9ixx0WFM-lhZemYhadOUk0khWlm-o" />
	
	<!-- <script src="https://www.googleoptimize.com/optimize.js?id=OPT-TM6BFS8"></script> -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143829124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-143829124-1');
  </script>

	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->

	<?php wp_head(); ?>

  <!-- (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-1640812778563954", enable_page_level_ads: true }); -->

	<!-- <script async custom-element="amp-auto-ads"s
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
	</script> -->
	
	<meta name="p:domain_verify" content="8206c65d4acd05930eebb2f13de674a7"/>

	
</head>

<body <?php body_class(); ?>>
	
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$pptmon_description = get_bloginfo( 'description', 'display' );
				if ( $pptmon_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $pptmon_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<div class="searchbox">
				<p>Free templates for your stunning presentation</p>
				<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
					<input type="text" name="s" placeholder="Search Templates" value=""/>
					<input type="hidden" name="post_type" value="post" /> <!-- // hidden 'products' value -->
					<input type="hidden" name="lang" value="<?php echo(ICL_LANGUAGE_CODE); ?>"/>
					<button type="submit" alt="Search" value="Search">
						<i class="monster-icon icon-search">&#xe800;</i>
					</button>
				</form>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
            ?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">