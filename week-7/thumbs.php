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

$args = array(
// start by defining what you want to call up from the database

    'post_type' => 'page',
    // look for pages, not posts

    'post_parent' => 14,
    // find all the children of page #14 (in my case, "comprehensive assessment" is #14)

	'post_status' => 'publish',
    // only fetch pages that are published, not drafts	

	'orderby' => 'title',
    // order the pages alphabetically by title

	'order' => 'ASC',
	// order A to Z

	'nopaging' => true,
    // Put all results on one page, no pagination

	);
	
	$query = new WP_Query($args);
    // query the database using the arguments defined above

	if ( have_posts() ) {

		while ($query->have_posts()) {
			   $query->the_post();
               // as long as we have results, do the following for each page:

			echo '<figure class="thumbnail">';
            // open the thumbnail tag

			echo '<a href="';
			//open the anchor tag
            
            echo the_permalink();
			// print out the hyperlink inside the href

            echo '">';
			// close the href

            echo the_post_thumbnail('thumbs');
			// print out the link to the image, in thumbnail size
            
            echo '</a>';
            // close the anchor, image is clickable

			echo '<figcaption>';
			// open the caption tag

            echo '<a href="';
			//open the anchor tag
            
            echo the_permalink();
            // print out the hyperlink inside the href

			echo '">';
            // close the href

			echo the_title();
            // print out the name of the page

			echo '</a>';
			// close the anchor, the title is clickable

            echo '</figcaption>';
			// close teh cation tag
            
            echo '</figure>';
			// close the figure tag

            // repeat as many times as there are pages in the query results
            
        }

			wp_reset_postdata();
            // clean up memory
			}
?>

</main><!-- #site-content -->
	
<?php get_sidebar(); ?>
	
</div> <!-- end flex-container -->

<?php get_footer(); ?>
