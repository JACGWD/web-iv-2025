# Week 7 Notes

## Homework

Convert your assigned Montreal Real Estate pages to blocks, not Divi shortcodes.

**Make sure to use proper HTML.**

## Master and Detail Page Relationship

In computer science, as well as in web design, a well established design pattern is "master and detail". You can think of it as "category and product". Visually, it often means "thumbnails overview page" and "highres details page". This is why our CA templates are called "thumbs" and "high res". 

Two examples of master/detail relationship design:

- [https://cms-modals.webflow.io/#](https://cms-modals.webflow.io/#)
- [https://ajax-load-team-members.webflow.io/](https://ajax-load-team-members.webflow.io/)


## Populating the CA Thumbnails page

There are a few steps for automatically populating the CA thumbnails page:

- Download the new [thumbs.php (updated with a custom query)](./week-7/thumbs.php)
- Make sure post number on line 23 is accurate (on your live portfolio site)
- Upload the new thumbs.php


### How to display the page ID in the WordPress backend

Paste this code into the functions.php file of your child theme (on your live portfolio site):

        // =================  START FIND PAGE ID ============================== //

        function add_column( $columns ){
            $columns['page_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
            return $columns;
        }
        add_filter('manage_pages_columns', 'add_column', 5);
        // adds column in position 5

        function column_content( $column, $id ){
            if( $column === 'page_id_clmn')
                echo $id;
        }
        add_action('manage_pages_custom_column', 'column_content', 5, 2);

        // =================  END FIND PAGE ID ============================== //


### Featured Images are Required

The new code in thumbs.php displays the **featured image**, not the image uploaded inside the page content. You will need to assign a featured image for each page of the CA.

![Set Featured Image in WordPress](./week-7/set-featured-image.png)


### Customize Thumbnail Resolution

Once you have customized the grid (ex: number of columns) for the presentation of the thumbnails, you will need to define the size (and therefore the resolution) of the thumbnails added to the page.


        // =================  START CUSTOM THUMBNAIL SIZE ============================== //

        set_post_thumbnail_size( 250, 165);
        // The parameters for set_post_thumbnail_size are in this order: width, height.

        add_image_size( 'thumbs', 250, 165 );
        // Image size for thumbnails displayed by thumbs.php template
        // 'thumbs' here refers to the parameter on line 61 of thumbs.php: echo the_post_thumbnail('thumbs');

        // =================  END CUSTOM THUMBNAIL SIZE ============================== //


