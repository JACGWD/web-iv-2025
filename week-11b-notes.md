# Week 11b Class Notes

## Continuation of CSS Typographic Spacing

### Firefox Fonts Inspector

Use the Fonts Inspector in Mozilla Firefox to visually adjust your font parameters. Line height is normally expressed as either the keyword "normal" or a number, ex: line-height: 1.5; (meaning "line-height = a number of lines"). 

However, [line-height supports values expressed in px, pt, cm, %, etc](https://www.w3schools.com/cssref/pr_dim_line-height.php).

![Firefox Fonts Inspector](./week-11/firefox-fonts-panel.png)

### Major Rules to Define per Tag

|CSS Property|Viewport|Comment|
|---|---|---|
|line-height {}|Both|aka leading||
|margin {}|Mobile|two important values: **top and bottom**|
|margin {}|Desktop|four values: top, right, bottom and left<br>Mostly top and bottom|

<blockquote>
    
### EMs vs REMs

An **EM** is a value equal to the height of a lowercase letter m *in the chosen font face*.

An em can have different values if you are looking at the letter m in a paragraph, an H1 tag or an h4 tag. An em is ***context-sensitive***.

A REM is a "Root EM". It is a value equal to the height of a lowercase letter m in the chosen font ***of the root element***. **The value of a REM never changes.**
    
</blockquote>


    figcaption {
        font-size: .8584em;
        text-align: right;
        font-style: italic;
        margin-top: 0;

        position: relative; /* when margins are zero, you can still tweak */
        top: -0.3rem;
    }


## Pair Spacing

Once the basic HTML tags (h1-h6, p, li, etc) have been given their default spacing, you want to take a look at how these blocks of text look when paired with other elements on the page, such as images, tables, lists or inline frames ("iframes" such as Google Maps, or YouTube embeds).

**Pair Spacing** is the art of tweaking the space between Element A (ex: h3) and Element B (ex: table or iframe), when the default spacing isn't good enough. 

### Two Selectors for Two Tags

|CSS Selector|Selector Type|Selected Item within the Pair|Target Tag|Links|
|---|---|---|---|---|
|h2:has(+ ol)|"Has" Pseudo-Class|First|\<h2>|[https://www.w3schools.com/cssref/sel_has.php](https://www.w3schools.com/cssref/sel_has.php)|
|h2 + ol {}|Next Sibling|Second|\<ol>|[http://www.w3schools.com/CSSref/sel_element_pluss.php](http://www.w3schools.com/CSSref/sel_element_pluss.php)|


### CSS :Has() Rule to Select the First Tag of the Pair: the H2

        h2:has(+ p) {
            margin: 0 0 0.347em;
        }   

        h2:has(+ img) {
             margin: 0 0 0.667em; /* pictures look better with more space above */
        } 



### CSS "Next Sibling" Selectors to Select the Second Tag of the Pair

Next Sibling selector rules are applied to the **second tag**. For example, in the first rule below, the \<ol> tag is the one that gets its margins adjusted.

        h2 + ol {
            margin: 2rem 0 0 2rem 0;  /* margins for the ol */
            }

        h2 + table {
            margin: 0.5rem 0 0 2rem 0;   /* margins for the table */
        } 

        h2 + h3 {
            margin: 0.25rem 0 0 2rem 0;  /* margins for the h3 */
        }       



## Redefine Font Sizes for Desktop

Once you leave the small mobile device screen sizes behind, you can redefine the font scale to accommodate larger font sizes. This will give your scale more contrast, enhance the overall legibility, and UX for the end user.

    /* TYPESCALE for MOBILE 
        https://spencermortensen.com/articles/typographic-scale/  */


    h1 { font-size: 2.5em; }
    h2 { font-size: 2.1459em; }
    h3 { font-size: 1.842em; }
    h4 { font-size: 1.5811em; }
    h5 { font-size: 1.3572em; }
    h6 { font-size: 1.165em; }
    p { font-size: 1em; }
    small { font-size: .8584em; }
    
    legend {font-size: 1.842em; }  /* h3 */
    label {font-size: 1.5811em;}  /* h4 */
    figcaption { font-size: .8584em;}  /* small */



    @media screen and (min-width: 60rem) {

    /* TYPESCALE for DESKTOP: ADD CONTRAST   */

    h1 { font-size: 3.558em; }
    h2 { font-size: 2.8796em; }
    h3 { font-size: 2.3306em; }
    h4 { font-size: 1.8863em; }
    h5 { font-size: 1.5266em; }
    h6 { font-size: 1.2356em; }
    small { font-size: .8093em; }

    legend {font-size: 2.3306em; } /* h3 */
    label {font-size: 1.8863em;}   /* h4 */
    figcaption { font-size: .8093em;}  /* small */

    } /* always add a comment next to the closing media query bracket 
         so you don't delete it accidentally */



## Ponderation for this milestone

### Due Friday, at 8am

<table>
<tr><th>Criteria</th><th colspan="3">Grade</th><th>Total</th></tr>
<tr><td>Google font properly added in &lt;head&gt;</td><td>&nbsp;</td><td>Fail</td><td>Pass</td><td>5%</td></tr>
<tr><td>Google font for H1-H6 Headers</td><td>&nbsp;</td><td>Fail</td><td>Pass</td><td>5%</td></tr>
<tr><td>Google font for Body</td><td>&nbsp;</td><td>Fail</td><td>Pass</td><td>5%</td></tr>
<tr><td>Default Spacing for Tags</td><td>Fail</td><td>Pass</td><td>Pro</td><td>10%</td></tr>
<tr><td>Pair Spacing for First Tag</td><td>Fail</td><td>Pass</td><td>Pro</td><td>10%</td></tr>
<tr><td>Pair Spacing for Next Sibling Tag</td><td>Fail</td><td>Pass</td><td>Pro</td><td>10%</td></tr>
<tr><td>Overall Typographic Aesthetics</td><td>Fail</td><td>Pass</td><td>Pro</td><td>55%</td></tr>
</table>