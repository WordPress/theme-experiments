=== Armando ===
Contributors: poena
Tested up to: 5.8
Requires at least: 5.5
Requires PHP: 7.2
Version: 1.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An experimental full site editing theme for blogs or sports teams.

== Description ==
An experimental full site editing theme for blogs or sports teams.
This theme requires Gutenberg version 10.6 or newer.
Armando includes multiple block styles and block patterns including site headers, site footers and page layouts.

Named after Diego Armando Maradona https://en.wikipedia.org/wiki/Diego_Maradona

== To do ==
Handle the duplicate CSS smarter.

== Changelog ==

* July 3 2021 Version: 1.2.3.
Update the theme for Gutenberg 10.7 - 11.

Updated the right sidebar because the images caused a block validation error.
The image now use a source with a relative URL. The image is intended to be replaced on live sites.

Style.css & styles-shared.css:
Replaced the body margin in style.css with a margin setting in theme.json.
The extra style for adding underline to links is no longer needed and has been removed.
Added an offset to link underlines.
Updated CSS for the header area and menu.
The class is-style-armando-no-top-margin has been removed because it was no longer needed.
Bottom margin for featured images was moved to theme.json.
Minor improvements to the comment area.

The link color block markup in Gutenberg has changed from "style":{"color":{"link":"var:preset|color|white"}
to "style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}} and the markup was updated for:
The site title in the site-header
Links in site footer
Block patterns

Site-headers: Removed custom margin and removed the spacer block below the header.
Moved the bottom margin for template parts to theme.json.

comments.html
The link color set for the comment area was reduntant and has been removed.
The custom CSS class that was used to change the margin for the comment area title
was replaced with a margin setting.
The spacer block below the group was replaced with a margin setting.

Text size adjustments from px to rem.
Added medium text size.
Extra small and huge font size names were adjusted one step.
Extra small is now small and huge is extra large.

Corrected default color for headings.

Removed the notice from index.php since this is handled by WordPress core in 5.8.

* May 12 2021 Version: 1.2.2
Updated the theme.json format.
Updated default button and post navigation styles.
Updated the about page.
Updated footer patterns.
Fixed a missing width of the header template part.
Fixed a problem with the quote block styling.
Replaced the tag- and category blocks with the post term block.
Renamed the pattern template, this was not editable in template editing mode since it did not have
a post or page prefix.
Added one block pattern for the blog (query).

* April 30 2021 Version: 1.2.1
Updated colors and box shadows.
Moved some CSS to a shared file.
Added an about page
Removed some of the custom padding to improve consistency.
Moved the comments area to a template part.

* April 14 2021 Version: 1.2
Updated the theme for Gutenberg 10.4:
Updated experimental-theme.json
Added the updated query pagination
Removed the block style for social links colors
Updated alignments
Replaced some template parts with block patterns
Added new templates with sidebars
Removed add_theme_support( "title-tag" ), which was left over from passing the Theme Check checks.
Removed one palette color
New nlock styles, patterns and screenshot

* January 6 2021 Version: 1.1
Removed the temporary Theme Check files.
Copied the content of the meta template part to the main query because of a bug / missing featured in Gutenberg.
Added editor styles.
Updated the spacing variable since it was not only used for horizontal margins.
Updated responsive footer width and spacing.
Improved block styles and added the styles to more blocks for ease of use.
Lightened the silver grey color. Reduced the opacity of the box shadow style.
Added box shadow to meta and comment area.
Hid the single page comment area on the home page.
Added a post grid template called main-grid.
Added support for custom units.
Fixed default page title width.
Prevented long titles from overflowing.
Fixed typos.
Updated screenshot.

* December 28 2020
Initial release
Temporarily add items needed for WordPress.org

== Copyright ==

Armando WordPress Theme, Copyright Carolina Nymark
Armando is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources used to build this theme ==

* Q WordPress theme, (C) Aristeidis Stathopoulos
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* TT1 Blocks WordPress theme (C) WordPress.org
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Underscores https://underscores.me/, (C) Automattic, Inc.
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Image used in screenshot: https://pxhere.com/en/photo/1376968 public domain.
Placeholder.png created by Carolina Nymark, public domain.
Images of the UI, created by Carolina Nymark, public domain.
