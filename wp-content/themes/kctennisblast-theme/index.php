<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kctennisblast-theme
 */

get_header();
?>

	<main id="primary" class="site-main">


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<indh1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>

				<div class="my-container">
					<div class="my-inner">

					<div class="top-row">
						<h1><?php the_title(); ?></h1>
						<a href="#" class="btn">Button</a>
					</div>

					<div class="content-area">
						<?php the_content(); ?>
					</div>

					<div class="bottom-button">
						<a href="#" class="btn">Another Button</a>
					</div>
						
					</div>
				</div>
			<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
