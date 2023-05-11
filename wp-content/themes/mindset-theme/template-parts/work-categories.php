<?php
/**
 * Template part for displaying taxonomy terms
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

?>

<?php
	$terms = get_terms( 
		array(
			'taxonomy' => 'fwd-work-category'
		) 
	);

	if ($terms && ! is_wp_error($terms)) : ?>
		<section>
			<h2><?php esc_html_e( 'See Our Work', 'fwd' ) ?></h2>
			<ul>
				<?php foreach ($terms as $term) : ?>
					<li>
						<a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
							<?php echo esc_html( $term->name ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	<?php endif;?>
