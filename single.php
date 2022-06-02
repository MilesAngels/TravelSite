<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TravelSite
 */

get_header();
?>

	<main id="primary" class="site-main bg-white">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/single-template', get_post_type() );
		?>
		
		<div style="margin:20px;">
		<?php	the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'travel-site' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'travel-site' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			

		endwhile; // End of the loop.
		?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
?>