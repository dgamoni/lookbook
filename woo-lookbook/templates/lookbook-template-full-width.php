<?php
/**
 * Template Name: LookBook Page Template full-width
 *
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="lookbook-wrapper">
		<div id="lookbook-container">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="pagelook-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="main_look_title">
						<?php the_title(); ?>
					</div>
					<div class="main_look_content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #lookbook-container -->
	</div><!-- #lookbook-wrapper -->

	<div id="lookbook-buffer">
	</div>

<?php wp_footer(); ?>



</body>
</html>
<?php //end of essential code of footer.php ?>