<?php
/* Template Name: Thumbs */ 
/* The template for displaying gallery thumbnails. */
/* @link https://developer.wordpress.org/themes/basics/template-hierarchy/  */

get_header();
?>


<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

<div class="flex-container">
		
<main id="site-content" class="grid">
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

</main><!-- #site-content -->
	
<?php get_sidebar(); ?>
	
</div> <!-- end flex-container -->

<?php get_footer(); ?>
