# Week 6 Course Notes

## Pagination Examples

When designing, always seek inspiration online to see how other designers have solved the same problem.

1. [https://fireart.studio/blog/pagination-design-examples/](https://fireart.studio/blog/pagination-design-examples/)
2. [https://freefrontend.com/css-pagination/](https://freefrontend.com/css-pagination/)
3. [https://www.frontendplanet.com/css-pagination-examples/#google_vignette](https://www.frontendplanet.com/css-pagination-examples/#google_vignette)


## Responsive Changes

Most of the responsiveness can be achieved by simply making the boxes (div, list, etc) be **at most** 
1024px wide instead of **exactly** 1024px wide. We add "max-" in front of "width".

### Fixed Width Code

    width: 1024px;

### Responsive Code

    max-width: 1024px;

### Responsive & "Proportional to the Text Size" Code

We will also make sure the widths are proportional to the size of the text. We will change the pixel values to REMs.

    max-width: 64rem;



<blockquote>

### Important

1rem is equal to 16px (by default) 

</blockquote>


### More Responsive CSS

        /* MAKE H1 BEHAVE SAME AS ABOVE CONTAINER */

        .page-template-highres h1 {

            width: 90vw;
           /* 90% of the width of the viewport */

            max-width: 64rem;
            /* 1024px / 16px default font size = 64rem */
            /* max-width = box will stretch in width up to 64rem then center */

            margin: 2rem auto;
            /* clockwise: right and left are set to auto for centering */
        }



       /* OUTER CONTAINER WIDTH & CENTERING */
            .page-template-highres .flex-container {
            
            width: 90vw;
           /* 90% of the width of the viewport */

            max-width: 64rem;
            /* 1024px / 16px default font size = 64rem */
            /* max-width = box will stretch in width up to 64rem then center */

            margin: 0rem auto 2rem auto;
            /* clockwise: right and left are set to auto for centering */
            }



        /* PAGINATION DEFAULTS + MOBILE STYLING */
            .page-template-highres .pagination {
                max-width: 64rem;
                margin: 2rem auto;
                padding: 0;

                display: flex;
                /* puts child elements (list items) side by side by default */
                
                flex-direction: column;
                /* force list items to be top to bottom = good on mobile */

                justify-content: space-between;
                /* child elements are flush with top and bottom, space goes between elements */

                border: 1px solid red;
                /* make visible while designing so you can see what is happening */

                list-style-type: none;
                /* remove bullets from list */
        }

        /* LIST ITEMS WITHIN PAGINATION LIST */

                .pagination li {
                    height: 9rem;
                    /* adjust for size of icons as needed */

                    margin: 0;
                    padding: 0;
                    /* remove negative space around list items for perfect alignment */
                    
                    text-align: center;
                    /* center the link text */

                    border: 2px dotted blue;
                    /* make visible while designing so you can see what is happening */
                }

        /* ADJUST MARGINS OF LIST ITEMS INDIVIDUALLY */

        .pagination li.previous-page {
            margin: 0 0 2rem 0;
            /* margin on bottom of top link */
            }
        

        .pagination li.up-to-gallery {
            margin: 2rem 0 2rem 0;
             /* margin above and bottom on middle link */
            }
       

        .pagination li.next-page {
            margin: 2rem 0 0 0;
            /* margin on top for last link */
            }
        


## More CSS Tweaks

            /* CENTER PORTFOLIO IMAGE IN COLUMN */
            .page-template-highres .flex-container #site-content figure img {

                display: block;
                /* force an inline element to act as a block, so it can be centered */

                margin: 0 auto;
                /* top/bottom and left/right: auto left and right margins for centering */
                
                padding: 0;
            }


        #site-content {
            /* overflow: hidden; */
            overflow: visible;
            /* force the div to display the pagination that is too wide. Useful for debugging, leave as "hidden" once done */
        }


        @media screen and (min-width: 64rem) {

            .page-template-highres .pagination {
                flex-direction: row;
                /* switch to horizontal layout on bigger screens */
            }

        } /* close media query */



## Final Stylesheet

See the [completed stylesheet here](./week-6/pagination-css.md)


## Responsive Pagination in Context

So far we have been designing the pagination offline. We will now move it to the production site to see the design in context: with the real titles of the pages inserted into the pagination.

1. Zip theme folder on WP Studio.
2. Move zip file outside of WP Studio (back it up).
3. Go to WP on GWD.
4. Go Appearance > Themes.
5. Delete old child theme (click the theme to expand it, the delete link is at bottom).
6. Upload new child theme.
7. Activate the new child theme.
8. Visit different pages in CA to see spacing and line returns.
9. Tweak the design as necessary (depending on width of page names).


## Hiding text links but not from Screen Readers (optional)

If you want to visually hide the text links (but keep them available to screen readers for those who rely on them because of visual disabilities), add this CSS to your stylesheet (at the very bottom, after the end of the media query):

    .sr-only {
        border: 0 !important;
        clip: rect(1px, 1px, 1px, 1px) !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
        white-space: nowrap !important;
   }

And change this part in functions.php for each link in the pagination:

### Before

    <span class="sr-only" aria-hidden="false">

### After

    <span class="sr-only" aria-hidden="true">


## Absolute positioning of the icons so they aren't affected by the number of lines of text  (optional)

Absolute positioning can be used to make the position of the icons remain stable even if the amount of text in the pagination link changes. Add the following CSS:

    .page-template-highres .pagination li {
        position: relative;
        /* sets the parent of the icons as the starting point for aligning with absolute positioning, if needed */
        }

    .page-template-highres .pagination li img, 
    .page-template-highres .pagination li svg {
        
        position: absolute;
        /* no longer in the text flow */

        bottom: 0.125rem;
        /* place somewhere close to the bottom of the box */

        left: calc(50% - 2rem);
        /* absolutely positioned elements cannot be centered with auto margins, as they are independent of other things on the page. But we can center them by saying "align to the middle, but back up by half the width of the icon (so the middle of the icon is at 50% of the box)" */
        }



## Responsive Pagination Assignment

- **Due Friday morning before 8am, February 28.**
- Send me a MIO with a link to your first CA component page (yourname + graphicandwebdesign.ca/comprehensive-assessment/advertising-material/) to let me know it is ready to be graded.
- Code is supplied here, and is perfectly functional, just no style.
- Your assignment is to give it visual style (look at the examples at the top of the page).
- Icons are optional, text links are not.

### Grading Criteria

| Criteria | Value |
| --------- | ------------ |
| Responsiveness | 20% |
| Layout & Alignment (portrait mode) | 10% |
| Layout & Alignment (landscape mode) | 10% |
| Usability (links are big enough to easily finger tap on a phone) | 10% |
| Aesthetics & Originality | 50% |