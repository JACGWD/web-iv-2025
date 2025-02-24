        /*
        Theme Name: Twenty Twenty Child 02
        Template: twentytwenty
        Author: Eric Girouard

        */

        /* GET RID OF BEIGE BACKGROUND COLOR */
        body {
        background: #fff;
        }


        /* OUTER CONTAINER WIDTH & CENTERING */
        .page-template-highres .flex-container {

        width: 90vw;
        /* 90% of the width of the viewport */

        max-width: 102.4rem;
        /* 1024px / 10px default font size = 102.4rem */
        /* max-width = box will stretch in width up to 102.4rem then center */

        margin: 0rem auto 2rem auto;
        /* clockwise: right and left are set to auto for centering */
        }




        /* MAKE H1 BEHAVE SAME AS ABOVE CONTAINER */
        .page-template-highres h1 {

        width: 90vw;
        /* 90% of the width of the viewport */

        max-width: 102.4rem;
        /* 1024px / 10px default font size = 102.4rem */
        /* max-width = box will stretch in width up to 102.4rem then center */

        margin: 2rem auto;
        /* clockwise: right and left are set to auto for centering */
        }




        /* CENTER PORTFOLIO IMAGE IN COLUMN */
        .page-template-highres .flex-container #site-content figure  img {

        display: block;
        /* force an inline element to act as a block, so it can be centered */

        margin: 0 auto;
        /* top/bottom and left/right: auto left and right margins for centering */
        
        padding: 0;
        }




        /* PAGINATION DEFAULTS + MOBILE STYLING */
        .page-template-highres .pagination {
        max-width: 102.4rem;
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
        /* adjust for size of icons */

        margin: 0;
        padding: 0;
        /* remove negative space around list items for perfect alignment */
        
        text-align: center;
        /* center the link text */

        border: 2px dotted blue;
        /* make visible while designing so you can see what is happening */

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



        /* ADJUST MARGINS OF LIST ITEMS INDIVIDUALLY */
        .pagination li.previous-page {margin: 0 0 2rem 0;}
        /* margin on bottom */

        .pagination li.up-to-gallery {margin: 2rem 0 2rem 0;}
        /* margin above and bottom on middle link */

        .pagination li.next-page {margin: 2rem 0 0 0;}
        /* margin on top for last link */







        /* IMG OR SVG MARGINS INSIDE PAGINATION LIST ITEM */
        .pagination svg,
        .pagination img {
        margin: 1rem auto;
        /* center the icon, add space on top/bottom */
        }




        /* PAGINATION TEXT COLORS FOR ALL LoVeHA INTERACTIVE STATES, IN ORDER (REQUIRED) */
        .pagination a:link,
        .pagination a:visited,
        .pagination a:hover,
        .pagination a:active {
        text-decoration: none;
        color: #1886b4;
        }


        /* OVERRIDE HOVER STATE */
        .pagination a:hover {
        color: #2b4a56;
        }




        /* TEXT LINK SIZE */
        .pagination li span {
        font-size: 1.5rem;
        /* Because official twentytwenty theme USES 10PX INSTEAD OF 16PX default */

        display: block;
        /* extend clickable area all the way to the edges of the parent box (wider than just the link text) */
        }




        /* FILL COLOR FOR ALL THREE ICONS */
        .pagination svg.left-icon,
        .pagination svg.middle-icon,
        .pagination svg.right-icon {
        fill: #1886b4;
        }


        /* ADJUST ICON SIZES INDIVIDUALLY, TWEAK AS NEEDED */
        .pagination svg.left-icon {height: 5rem; width: auto;}
        .pagination svg.middle-icon {height: 3rem; width: auto;}
        .pagination svg.right-icon  {height: 5rem; width: auto;}








        /* ALWAYS KEEP MEDIA QUERIES AT BOTTOM OF THE STYLESHEET, IN NARROWEST (TOP) > WIDEST (BOTTOM) ORDER */

        /* ADJUST RULES FOR COLUMN > ROW SWITCH */
        @media screen and (min-width: 102.4rem) {

        /* ONLY .pagination RULE THAT NEEDS UPDATING, ALL OTHER INHERITED AS IS */
        .page-template-highres .pagination {
            flex-direction: row;
        }

        /* 3 BUTTONS = APPROX 1/3 OF AVAILABLE HORIZONTAL SPACE, REMAINDER = NEGATIVE SPACE BETWEEN ITEMS */
        .pagination li {
            width: 33%;
        }

        /* RESET LIST ITEM MARGINS TO ZERO TO ALIGN VERTICALLY NOW THAT LAYOUT IS HORIZONTAL  */
        .pagination li.previous-page, 
        .pagination li.up-to-gallery,
        .pagination li.next-page {margin: 0;}

        /* CENTER ICONS HORIZONTALLY */
        .pagination svg.left-icon, 
        .pagination svg.right-icon { 
            margin: 0 auto;
        }

        } /* CLOSE MEDIA QUERY, ALWAYS ADD THIS COMMENT TO NOT FORGET WHY THIS BRACKET IS HERE */



        /* UTILITY CLASSES */

        /* 
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
        } */