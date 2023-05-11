<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php fwd_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fwd' ),
				'after'  => '</div>',
			)
		);

		if ( function_exists ( 'get_field' ) ) {

			if ( get_field( 'contact_address' ) ) {
				echo '<p>';
				esc_html_e(the_field( 'contact_address' ));
				echo '</p>';
			}

			if ( get_field( 'contact_email' ) ) {
				echo '<p>';
				esc_html_e(get_field( 'contact_email' ));
				echo '</p>';
			}
		} 
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fwd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
