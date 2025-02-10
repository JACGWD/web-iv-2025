<?php
/* Template Name: Highres */ 
/* The template for displaying high resolution artwork with pagination and social media sharing links. */
/* @link https://developer.wordpress.org/themes/basics/template-hierarchy/  */


get_header();
?>

<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

<div class="flex-container">
<main id="site-content" class="artwork">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			the_content();
			// Placing the_content(); here removes several nested divs and places the portfolio images (<figure> tags) immediately inside the <main> tag. 
			// This is simpler and generates less HTML code.
			// If this breaks your layout, delete (or comment out) line 22 and uncomment line 27 which is the unmodified twentytwenty template.

			// get_template_part( 'template-parts/content', get_post_type() );
			// ^ get_template_part ADDS THE ARTICLE TAG INSIDE MAIN
		}
	}

	?>

<?php if (is_page_template('highres.php')){ eg_CAnav(true); } ?>

<?php
echo "<h2>Share my work!</h2>";
// ADD THE SOCIAL MEDIA SHARING ICONS
get_template_part( 'parts/page', 'social' );
?>



</main><!-- #site-content -->
<?php get_sidebar(); ?>
</div> <!-- close flex-container -->

<?php get_footer(); ?>
