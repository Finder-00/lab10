<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( body_class(is_front_page() ? 'no-sidebar' : ''))?> >
<?php wp_body_open(); ?>
<!-- si front page masque le sidebar  -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

	<header id="masthead" class="site-header">
	<!-- inversion, jai mis le nav en premier -->
	<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="https://s2.svgbox.net/hero-outline.svg?ic=view-list&color=000000" width="32" height="32"></button> -->
	<nav id="site-navigation" class="main-navigation">
			<section id="burger" aria-controls="primary-menu" aria-expanded="false">
				<div></div>
				<div></div>
				<div></div>
			</section>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- grand titre du site -->
		<!-- s'affiche seulement si accueil -->
		<?php if(is_front_page()){ ?>
		<!-- change la classe si page d'accueil -->
		<div class= <?php is_front_page() ? print("site-branding") : print("headerAutre") ?> >
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php } ?>
	</header><!-- #masthead -->