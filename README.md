## stm_article_order

_(Original help by Stanislav Müller)_

* * *

With this Textpattern plugin you can manipulate the order of your articles and put them in different sections - by simply using Drag & Drop!

## Installation

You should use at least Textpattern 4.5 for working with this plugin.

After activating the plugin, you will see a new admin tab at "Presentation » Article Order". Using this menu, you can manipulate the navigation of your website with ease!

As a last step of the installation you’ll have to add the following attribute to your txp:article tag:

```
<txp:article sort="position asc" />
```

For "non-blog-sites" we also recommend the [rdt_dynamenus](http://textpattern.org/plugins/206/rdt_dynamenus) plugin. Using this, you should add the following attribute:

```
<txp:rdt_article_menu sortby="position" sortdir="asc" />
```

### Changes by JCR

Changes in v0.3.4

*   Minor parse_str() fix for Textpattern 4.8.5 and PHP 7.4+ / PHP 8.
*   Incorporated textpacks in plugin with menu item fix.

### Changes by SPRINGWORKS

* * *

Changes in v0.3

* Added tab under Extensions to enable selection of sections to be excluded from Article Order tab under Presentations. To support this functionality, an extra column is added to the txp_section table in the database. This is achieved using plugin lifecycle events so the requirement for this version of the plugin has risen to TXP 4.5 or higher.<br>Much of the additional functionality has been created by borrowing large blocks of code from adi_menu and freely adapting it. Many thanks are due to Adi Gilbert for his unknowing assistance in me being able to extend this plugin!


### Changes by ULI

* * *

Changes in v0.2.4

*   Added two links for folding articles as another means of making the list more manageable. As before, you can expand single sections by clicking their title bars.
*   Fixed a CSS-bug with the Vanilla Remora stylesheet, that didn't let you select menu items on the stm_ao page, a flaw I introduced in v0.2.3 by positioning the #wrapper div.

Changes in v0.2.3

*   Added links for toggling image display, above and below the articles list
*   Toggle status is saved to a cookie
*   Articles without images don't show a "missing image" icon any more (Thanks, MattD)
*   Article status is addressable via CSS class "status__n_", where n is a number between 1 and 5
*   Cleaned up the alignment of IDs and titles (Thanks, RedFox)
*   Introduced a Drop Box for parking articles you want to move to a section several screen heights above or below its origin with as little steps as possible

**The Drop Box** is an experiment. It's a section on a fixed position, nothing more and nothing less. I'm not sure how usable it is, especially with hundreds and thousands of articles. I simply don't have that much articles to test with, hence please decide for yourself.

**Preparing the Drop Box:**

1.  Create a section that's exactly named "drop-box". (Remove that section from any navs and lists it might appear in.)
2.  Next, create an indicator for successful dropping with a little note on it, by saving an article of hidden type to your drop-box section. Title it e.g. "Let go when upper bar is shifted up".
3.  Look for the article's ID, and, in the plugin's CSS, replace the two instances of "098" with this ID.

That's it, you can now try out the Drop Box.

**Using the Drop Box:** It's easier dropping articles onto the Drop Box from above, so scroll down as deep as the article involved allows you to and drop the article above the Drop Box. Yes, the best place is above the Drop Box, _not_ immediately thereupon.
Dragging from the last section it sometimes seems impossible to get the dropping indicator to move. If that happens simply let the article go so it lands beside the drop box at the bottom of the list, now labelled with an orange color. It's quite easy to move it over to the Drop Box from there: grab it and hold it, even if you can't see it any more, and, when the Drop Box reacts, let it go.
Now scroll to your destination section and drag the article from the Drop Box over to the section list. I've noticed that moving a parked article into its destination section seems more difficult the deeper you have scrolled on the page, because the deeper you are the wider seems the gap between the article and your pointer while dragging. No idea how to fix this, but it helps to leave some room below the window so your pointer can leave it (try, you'll see what I mean).

There might be some special cases where it seemed a little challenging to work with the Drop Box, but with a little patience I always succeeded. It might depend on my small amount of articles, though.

**Eliminating the Drop Box:** Just delete its section and, in order to move the article list back to the center, remove one declaration in the plugin's CSS:
`left: -12%;` in the `#wrapper` block.

Changes in v0.2.2

*   <span style="text-decoration:line-through">Image</span> JPEG support: Shows the article’s thumbnail. (Image display and multiple images in the article image field are mutually exclusive.)
*   Added image edit link (click the image)
*   Added article edit link (click the ID)
*   Displays section titles instead of section names
*   Sections are now ordered by title

Hint: If you want the ID back where it was in v0.2.1, simply delete the float rule for `em.article_id a`

Changes in v0.2.1

*   Created an extended bottom area to each section (actually to the last article) so articles don’t slip into Nirvana so easily when you drop them slightly below a section’s last article.
*   Now one pull suffices where two steps and good thinking were needed before (if you wanted to move an article to the last position).
*   If you still succeed in dropping an article beside the list (and it is possible), an animation and two advisory notes call your attention and help you get the article onto the desired position. (The first one uses child selector and sibling combinator (IE7+), the text is created by a :before pseudo element that’s known to be unknown to even IE7, but at least color and animation should be visible there.)
*   Made it a one column design in order to avoid bumpy behavior while pulling articles and toggling sections.
*   The predictable longer list got a second Save button at the top of the page.
*   My clients did look for titles not IDs, so I put the ID from the beginning to the end of the line and made it oblique.
*   Left intentionally: Styles for “fake category headings” (look for this phrase in the plugin’s CSS section in order to use those). It’s the darker grey bars in the topmost screenshot of [my announcement post](http://forum.textpattern.com/viewtopic.php?pid=235775#p235775). I made some of these from empty hidden articles. They simply remind to keep together blocks of articles of the same category. Especially expedient when you use if_different.
