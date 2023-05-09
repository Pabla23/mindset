<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );
		?>
		
		<section class="home-intro">
			<?php
				// load the intro section from a separate page using wp_query
				// page_id is the id of the about page
				$args = array( 'page_id' => 14 );

				$intro = new WP_Query( $args );

				if ( $intro->have_posts() ) {
					while ( $intro->have_posts() ) {
						$intro->the_post();
						the_content();
					}
					wp_reset_postdata();
				}

			?>
		</section>

		<section class="home-work"></section>

		<section class="home-work"></section>

		<section class="home-left">
			<?php
				if (function_exists('the_field')) {
					if (get_field('left_section_heading')) {
						echo '<h2>';
						esc_html__(the_field('left_section_heading'));
						echo '</h2>';
					}
					if (get_field('left_section_content')) {
						echo '<p>';
						esc_html__(the_field('left_section_content'));
						echo '</p>';
					}
				}
			?>
		</section>

		<section class="home-right">
			<?php
				if (function_exists('the_field')) {
					if (get_field('right_section_heading')) {
						echo '<h2>';
						esc_html__(the_field('right_section_heading'));
						echo '</h2>';
					}
					if (get_field('right_section_content')) {
						echo '<p>';
						esc_html__(the_field('right_section_content'));
						echo '</p>';
					}
				}
			?>
		</section>

		<section class="home-slider"></section>

		<section class="home-blog">
			<h2><?php esc_html_e('Latest Blog Posts', 'fwd') ?></h2>
			<?php
				$args = array( 'post_type' => 'post',
							   'posts_per_page' => 4
				);
				$blog_posts = new WP_Query( $args );

				if ( $blog_posts->have_posts() ) {
					while ( $blog_posts->have_posts() ) {
						$blog_posts->the_post();
						?>
						<article>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'latest-blog-posts' ); ?>
								<h3><?php the_title(); ?></h3>
								<p><?php echo get_the_date(); ?></p>
							</a>
						</article>
						<?php
					}
					wp_reset_postdata();
				}
			?>
		</section>

		<?php
			endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
