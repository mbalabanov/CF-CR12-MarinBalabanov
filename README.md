# Code Review 12
### Delivered by MarinBalabanov

## Description
This is a WordPress theme for a travel agency as an exercise for CodeFactory. The underlying structure is based on the model theme available on https://underscore.me

The design is based on the requirements defined by CodeFactory in Code Review 12. The initial design was created using Bootstrap and can be found here as flat HTML https://github.com/mbalabanov/CF-CR12-MarinBalabanov/tree/main/boostrap-model

<kbd>![Screenshot](screenshot.png)</kbd>

The final theme does not use Bootstrap but adheres to the requirements. The theme's files can be found in the repository. The layout files are adapted and the custom CSS is in _styles-custom.css_.

## Installation
The whole theme is available as a ZIP file here: https://github.com/mbalabanov/CF-CR12-MarinBalabanov/blob/main/CF-CR12-MarinBalabanov.zip

Download the ZIP file and uncompress it into the WordPress themes folder. Then select and activate the theme in the appearance menu.

## Structure
- __front-page.php:__ The custom front page overrides the _index.php_ for home. In its core it has the same grid of blog posts, but it also has a large header and the sidebar aligned horizontally beneath the grid.

__Screenshot of Custom Frontpage (top and bottom sections)__
![Custom Front Page](img/front.png)

- __index.php:__ This is the site's main design. It can be used for the grid of blog posts.
- __archive.php:__ This has the same appearance as _index.php_ but includes the category title above the grid of blog posts.

__Screenshots of Index (left) and Archive Pages (right)__
![Custom Front Page](img/index-category.png)

- __single.php:__ This file defines the appearance and layout of individual blog posts. The main content area for the article is 70% wide, leaving 30% for the sidebar with the widgets. The area beneath the article is occupied by the comments and the form for new comments. It includes _template-parts/content.php_ and _comments.php_

__Screenshot of Single Post (top and bottom sections)__
![Post](img/post.png)

- __page.php:__ This is the template used for pages that are not blog posts. It is adapted from _single.php_.  It includes _template-parts/content-page.php_
- __search.php__ and __404.php:__ These two administrative pages have a similar design to _single.php_. The search page uses includes _template-parts/content-search.php_

__Screenshot of Page (left), Search (center) and 404 (right)__
![Page, search and 404](img/page-search-404.png)

- __/template-parts__, __/inc__ and __/js:__ These directories include the PHP components that are included on other pages. The _/js_ directory provides the functionality for the naviation.
- __/sass:__ This directory contains all the original SASS files from the underscore.me theme. They were compiled into _style.css_. The additional styles in this theme are defined in _styles-custom.css_.
- __UNDERSCORES-README.md:__ This is the original readme file provided by underscore.me.
