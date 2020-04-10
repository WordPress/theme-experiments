# Blockbase

Blockbase is a simple base for building block-based themes, using the [experimental guidelines](https://developer.wordpress.org/block-editor/developers/themes/block-based-themes/). 

It includes: 

- Basic block-based HTML page templates, with header and footer template parts. 
- Base styles for the front end, editor, and beta site editor.
- Global Styles support.

## Instructions

First, choose a new name for your theme and perform a find + replace for "blockbase" to change the theme's namespace. From there, you can enable this theme and begin editing files to build your theme. Here are some recommended files to get started with: 

- `experimental-theme.json`: This file contains the basic Global Style variables used throughout the site. These variables are used in the front end and in the beta site editor. It's the best place to start.
- `css/editor/variables.css`: This is the variables file used for the post/page editor. As soon as [wordpress/gutenberg/20530](https://github.com/WordPress/gutenberg/pull/20530) is merged in, this won't be necessary. For now, this needs to mirror all of the variables in `experimental-theme.json`.  
- `css/front-end/style-custom.css`: The home for all of your front-end styles. This will override all other styles defined in the `front-end` folder.
- `css/editor/editor-custom.css`: The home for all of your editor styles. This will override all other styles defined in the `editor` folder.
- The files in `block-templates` and `block-template-parts` can be updated to include more post and page templates, [as described in the reference docs](https://developer.wordpress.org/block-editor/developers/themes/block-based-themes/). 

(The files with the `-custom` suffix are included in case you want to keep the base theme files up to date later on by copying & pasting from this base version of blockbase.)

## Tips: 

- Be sure to enable “Full Site Editing” from the Experiments page of the Gutenberg plugin.
- To use Global Style variables from `experimental-theme.json`, use the format `var(--wp--[variable name])`. You can see many examples in `css/style-base.css`. 
- You can add additional global variables in `experimental-theme.json` as needed. 
- `experimental-theme.json` is not compatible with child-themes yet. 

## Additional Reading:

- [Block Based Themes Documentation](https://developer.wordpress.org/block-editor/developers/themes/block-based-themes/)
- [Full Site Editing Project Board](https://github.com/WordPress/gutenberg/projects/35)
- [Global Styles Project Board](https://github.com/WordPress/gutenberg/projects/40)

## Screenshot

![Blockbase Screenshot](https://cldup.com/pYacH7icja.png)

## Changelog

**1.0 - April 10 2020**
- Initial release

## Credits

* Originally forked from the Gutenberg Starter Theme http://github.com/wordpress/gutenberg-starter-theme, [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* CSS originally built from Underscores http://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
