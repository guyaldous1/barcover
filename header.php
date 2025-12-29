<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barcover
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/lib/css/pushy.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'barcover' ); ?></a>

	<header	class="site-header">

		<div class="header">

			<img id="logo" onclick="location.href='<?php echo get_site_url(); ?>';" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
			<div class="header-links">
				<a class="claim-link" href="<?php echo get_home_url(); ?>/make-a-claim">Make a claim</a>
				<a class="contact-link" href="<?php echo get_home_url(); ?>/contact-us">Contact us</a>
			</div>

		</div>
		
		<nav id="desktop-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>

		<nav class="pushy pushy-right">
			<div class="pushy-content">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</div>
		</nav>

		<!-- Site Overlay -->
		<div class="site-overlay"></div>

		<div id="mobile-menu-btn-container">
			<button class="menu-btn">&#9776;</button>
		</div>

	</header>

	<div class="main-body">
