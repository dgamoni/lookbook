<?php
/**
 * Template Name: LookBook Page Template
 *
 */
?>

<?php get_header(); ?>

	<div id="lookbook-wrapper">
		<div id="lookbook-container">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="pagelook-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="main_look_title">
						<?php //the_title(); ?>
					</div>
					<div class="">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #lookbook-container -->
	</div><!-- #lookbook-wrapper -->
	<div id="lookbook-buffer">
	</div>

<?php get_footer(); ?>