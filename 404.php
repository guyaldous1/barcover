<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package barcover
 */

get_header();
?>

	<section class="bc-container container">
		<h1>Page not found</h1>
		<a href="<?php echo get_site_url(); ?>">Return Home</a>
	</section>

<?php
get_footer();
