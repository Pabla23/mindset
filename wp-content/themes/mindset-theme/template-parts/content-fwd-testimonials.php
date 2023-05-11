<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2>What they say..</h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			$args = array(
				'post_type'      => 'fwd-testimonial',
				'posts_per_page' => 1,
				'orderby'          => 'rand'
			);

			$query = new WP_Query( $args );

			if ( $query -> have_posts() ){
				while ( $query -> have_posts() ) {
					$query -> the_post();
					the_content();
				}
				wp_reset_postdata();
			} 
		?>
	</div><!-- .entry-content -->
</article>