<?php 

// FOR COLLEGE NETWORK SECURITY
// FORCE AUTO-UPDATE EVERYTHING (WP CORE, PLUGINS AND THEMES)

add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // ENABLE MINOR UPDATES
add_filter( 'allow_major_auto_core_updates', '__return_true' );         // ENABLE MAJOR UPDATES
add_filter( 'auto_update_plugin', '__return_true' );                    // UPDATE PLUGINS
add_filter( 'auto_update_theme', '__return_true' );                     // UPDATE THEMES 



// ADDS THE GWD EPORTFOLIO PREVIOUS/NEXT PAGINATION NAVIGATION LIST

if (!function_exists('eg_CAnav')){
  // Make sure that function name does not already exist
  
      function eg_CAnav($loop=false){ // Set the looping from last item next to first and from first item back to last. Default is false (no wrapping around the end).
      // Define the function
  
          global $post; // The currently loaded page
          $pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=title&sort_order=asc");
          if (empty ($pagelist)) {
          return; } // If empty stop here
  
          $pages = array();
          foreach ($pagelist as $page) {
              $pages[] += $page->ID; // Fetch only the IDs of the pages, not all other data
          }
  
          $current = array_search($post->ID, $pages); // Get index of results, starting at zero (not one)
          if ($loop) { // If you want pagination to go from Last to First and vice-versa, this part applies
              $first=$pages[0];
              $count=count($pages);
              $last = $count - 1;
              $prevID = ($current==0)?$pages[$last]:$pages[$current-1];
              // Previous ID is either Last Page or Current Page -1
              $nextID = ($current==$last)?$first:$pages[$current+1];
              // Next ID is either First Page or Current Page +1
          } 
          
          else { // If you disable the looping navigation
              $prevID = ($current==0)?false:$pages[$current-1];
              $count=count($pages);
              $last = $count - 1;
              $nextID = ($current==$last)?false:$pages[$current+1];
          }
          ?>
              <ul class="pagination">
                  <?php if (!empty ($prevID)) { ?>
                  
                    <li class="previous-page">
                  <a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">

                  <span class="sr-only" aria-hidden="false">
                  <?php echo get_the_title($prevID); ?>
                  </span>

                  <svg class="left-icon" xmlns="http://www.w3.org/2000/svg" width="60.305" height="122.764" viewBox="0 0 60.305 122.764">
  <path id="Polygon_13" data-name="Polygon 13" d="M56.476,4.82a7,7,0,0,1,9.812,0l44.269,43.492a7,7,0,0,1-4.906,11.993H17.113a7,7,0,0,1-4.906-11.993Z" transform="translate(0 122.764) rotate(-90)" fill="#ff4e00"/>
</svg>

                
                </a>
                  </li>
                  <?php } ?>
  
                  <li class="up-to-gallery"><a class="page-link" href="<?php echo get_permalink($post->post_parent); ?>">
                  <span class="sr-only" aria-hidden="false">
                  <?php echo get_the_title($post->post_parent); ?>
                  </span>
                  <svg class="middle-icon" xmlns="http://www.w3.org/2000/svg" width="60.305" height="122.764" viewBox="0 0 60.305 122.764">
  <path id="Polygon_13" data-name="Polygon 13" d="M56.476,4.82a7,7,0,0,1,9.812,0l44.269,43.492a7,7,0,0,1-4.906,11.993H17.113a7,7,0,0,1-4.906-11.993Z" transform="translate(0 122.764) rotate(-90)" fill="#ff4e00"/>
</svg>
                
                </a></li>  
                  
                  <?php
                  if (!empty($nextID)) { ?>
                  
                  <li class="next-page">
                  <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">
                  
                  <span class="sr-only" aria-hidden="false">
                  <?php echo get_the_title($nextID); ?>
                  <?php // echo "Next"; ?>
                  </span>
                 
                  <svg class="right-icon" xmlns="http://www.w3.org/2000/svg" width="60.305" height="122.764" viewBox="0 0 60.305 122.764">
  <path id="Polygon_13" data-name="Polygon 13" d="M56.476,4.82a7,7,0,0,1,9.812,0l44.269,43.492a7,7,0,0,1-4.906,11.993H17.113a7,7,0,0,1-4.906-11.993Z" transform="translate(0 122.764) rotate(-90)" fill="#ff4e00"/>
</svg>
                </a>
                  </li>
                  
                  <?php } ?>
              </ul>
          <?php
      }
  }
