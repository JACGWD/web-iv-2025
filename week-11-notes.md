# Week 11 Class Notes

Please see the [updated course schedule](./course-schedule.md).

## Typographic Spacing Exercise

### Links

#### CSS Test Layout

This page loads any page you like in a series of iframes so you can see the responsiveness all on one page. Save the file as **layout-test.php** inside the main WordPress folder (click "Finder" in WordPress Studio to open the correct folder).

[https://raw.githubusercontent.com/JACGWD/Responsive-iFrames/refs/heads/main/index.php](https://raw.githubusercontent.com/JACGWD/Responsive-iFrames/refs/heads/main/index.php)

Once you have added the **demo resume** as a post (see below), copy its URL and paste it as the $url at the top of the layout-test.php file.

        $url = 'http://localhost:8883/?p=6746';

#### Google Font Pairings (Figma)

[https://www.figma.com/google-fonts/](https://www.figma.com/google-fonts/)

#### 100 Best Font Combinations (Figma)

Create a free Firma account to be able to access this content. Use your @johnabbottcollege.net address to sign up, as the College has an educational account and can provide you with access to features usually found only on paid accounts. 

[https://www.figma.com/community/file/1175367212993436279](https://www.figma.com/community/file/1175367212993436279)

#### Demo Resume

1. Create a new post in WordPress
2. Use this as the title: "Cote Saint-Luc has Always Been Great Opportunity For First Time Home Buyers" (This is the longest page title in our site so we want to make sure it fits well in our design).
3. Add a "Custom HTML" block to the page
4. Insert the HTML from the link below
5. Publish and open the page.
6. Copy the URL
7. Paste the URL as the value of the $url variable at the top of layout-test.php
8. Open WordPress by clicking "Open Site" in WordPress Studio
9. Add "layout-test.php" at the end of the URL in the browser address bar: http://localhost:88**/layout-test.php

[https://github.com/JACGWD/web-design-demo-content/blob/main/html-demo/resume.html](https://github.com/JACGWD/web-design-demo-content/blob/main/html-demo/resume.html)

#### Demo Content for WordPress

Import the following XML file in WordPress

1. Tools > Import > WordPress
2. (Install if necessary)
3. Run Importer
4. Assign to your own user account (likely admin)
5. There are no images to import
6. This will create a "Sample HTML for CSS Rule Design" post

[https://github.com/JACGWD/web-design-demo-content/blob/main/WordPress-Demo-Content-v02.xml](https://github.com/JACGWD/web-design-demo-content/blob/main/WordPress-Demo-Content-v02.xml)


### Code Seen in Class Today

1. Add Google fonts \<head> code just before the closing \<head> tag in header.php. (I moved the comment like this:)

        <?php wp_head(); ?>

        <?php // add font code here ?>
        </head>


        <?php wp_head(); ?>

        <?php // add font code here ?>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        </head> 


2. Add the Google fonts code to your CSS stylesheet. Pay attention to replacing the class with the tags you want to use the font for.

        /* BEFORE */

        --titles-font: "helvetica neue", helvetica, arial, sans-serif;
        --bodytext-font: "helvetica neue", helvetica, arial, sans-serif;


        /* AFTER */

        --titles-font: "Josefin Sans", sans-serif;
        --bodytext-font: "Cardo", serif;


        /* THE FOLLOWING PART GOES **AFTER THE CSS VARIABLES** SECTION

        h1,h2,h3,h4,h5,h6,label,legend {
           font-optical-sizing: auto;
           font-weight: 600;  /* must be a number between 100-700 */
           font-style: normal;
        }

        body {
           font-weight: 400;
            font-style: normal; 
        }


        /*   CODE FROM GOOGLE FONTS COPIED IN THE PROPER PLACES ABOVE

            .josefin-sans-<uniquifier> {
            font-family: "Josefin Sans", sans-serif; /* family name goes in the variable */
            font-optical-sizing: auto;  /* other parameters go with the tags, as they can tweaked individually later */
            font-weight: <weight>;
            font-style: normal;
            }

            .cardo-regular {
            font-family: "Cardo", serif;
            font-weight: 400;
            font-style: normal;
            }
        */

3. Start by looking at the resume, and adjust the **margin-top** and **margin-bottom** values for every basic font tag. In CSS shorthand, the values are: top, right, bottom, left. **So you must change the first and third values.**

Adjust as you see fit. 

<blockquote>

### Rule of Thumb: Typographic Spacing

There should be more space (ex: 2x) above a title than below it (ex: 1x). A title/subtitle should always be closer to its content, than to other elements on the page.

</blockquote>

        body {
            line-height: 1.5;
        }

        h1 {
            margin: 2em 0 2em 0;
            line-height:1.2;
            }

        h2 {margin: 2em 0 2em 0}

        h3 {margin: 2em 0 2em 0}

        h4 {margin: 2em 0 2em 0}

        h5 {margin: 2em 0 2em 0}

        h6 {margin: 2em 0 2em 0}

        p {margin: 0 0 1em 0}


4. Spacing for Exceptions

Once you have completed the basic typographic spacing by tag, open the "Sample HTML for CSS Rule Design" post in your browser.

This file has examples of different tags (ex: H2 and table) that may (or may not) look good with the default spacing rules you just created. You can adjust these pairs by using the **next sibling** selector.

See: [https://www.w3schools.com/Css/css_combinators.asp](https://www.w3schools.com/Css/css_combinators.asp)


Note that each subtitle on the "Sample HTML for CSS Rule Design" actually contains the CSS selector needed to adjust the spacing properly.

#### Example of CSS Next Sibling selectors

Next Sibling selector rules are applied to the **second tag**. For example, in the first rule below, the \<ol> tag is the one that gets its margins adjusted.

        h2 + ol {
            margin: 2rem 0 0 2rem 0;
            }

        h2 + table {
            margin: 0.5rem 0 0 2rem 0;
        } 

        h2 + h3 {
            margin: 0.25rem 0 0 2rem 0;
        }       


#### CSS Has Rule to Select the First Tag in the Pair

        h2:has(+ p) {
            font-size: 2.498em;
            margin: 0;
        }