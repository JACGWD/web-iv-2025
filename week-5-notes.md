# Week 5 Course Notes

This week we will examine our portfolio navigation for responsiveness.

## Responsive iFrame for Testing Responsiveness



- Download [this file](https://github.com/JACGWD/Responsive-iFrames/blob/main/wordpress.php) into the **top level of the Wordpress Studio folder**.
- (You can automatically open the proper folder by clicking "Open in... Finder" on the Wordpress Studio home screen.)

![Wordpress Studio Open in Finder](./week-5/img/ws-open-in-finder.png)

- Open your WordPress Studio Site in your web browser and navigate to the Sample Page (or a comprehensive assessment demo if you have one). For example: http://localhost:8883/sample-page
- Copy the URL of the page
- Open the wordpress.php page in VS Code
- Edit the $url variable to match the actual address in use on your computer

        <?php
            $url = 'http://localhost:8883/sample-page';
        ?>
        <!DOCTYPE html>

- Save the file
- In WP Studio, click "Open Site".
- Add "/wordpress.php" to the end of the URL in the browser's address bar.

## Examining a Layout for Responsiveness

    .page-template-highres .flex-container {
            width: 1024px;  
            /* fixed widths are not responsive */

            margin: 2rem auto; 
            /* a div is a block-level element. Auto left/right margins will center it */
        }

        .page-template-highres h1 {
            width: 1024px;  
            /* fixed widths are not responsive */

            margin: 2rem auto; 
            /* an h1 is a block-level element. Auto left/right margins will center it */
        }

        .page-template-highres .pagination {
            padding:0;

            list-style-type: none;  
            /* remove bullet points */

            width: 1024px;   
            /* fixed widths are not responsive */

            margin: 2rem auto; 
            /* a list is a block-level element. Auto left/right margins will center it */

            display: flex; 
            /* use flexbox to layout list items inside this list tag */

            flex-direction: row; 
            /* display list items horizontally */

            justify-content: space-between;  
            /* flex space goes between list items */
        }

        .pagination svg {
            fill: #888;

            height: 2rem;  
            /* define height of icon */

            width: auto;   
            /* automatically resize other dimension so icons is not distorted */

            display: block;  
            /* force display as block level element */

            margin: 1rem auto;  
            /* svg is forced to act as a block-level element. Auto left/right margins will center it */
        }


        .pagination li {
            margin: 0; 
            padding: 0; 

            width: 30%;  
            /* three buttons: divide available space in 3 */

            text-align: center;  
            /* center text in list item box */
            }

        .page-template-highres main figure img {
            display: block;   
            /* force portfolio picture to display as block level element */

            margin: 1rem auto; 
            /* img is forced to act as a block-level element. Auto left/right margins will center it */
        }