# WordPress Theme Experiments

⚠️ These themes are not intended for use on a production site.

## About

This repository is dedicated to exploring how WordPress themes can best leverage Gutenberg blocks. Each sub-directory contains a WordPress theme that explores some aspect of creating themes using blocks or block templates.

## What's Here

| Theme | Updated For |
| --- | --- |
| [Ambitious](https://github.com/WordPress/theme-experiments/tree/master/ambitious) | Gutenberg 7.6 |
| [Empty Theme](https://github.com/WordPress/theme-experiments/tree/master/emptytheme) | Gutenberg 9.5 |
| [Gutenberg Starter Theme Blocks](https://github.com/WordPress/theme-experiments/tree/master/gutenberg-starter-theme-blocks) | Gutenberg 8.6 |
| [Photo Blocks](https://github.com/WordPress/theme-experiments/tree/master/photo-blocks) | Gutenberg 9.5 |
| [Twenty Nineteen Blocks](https://github.com/WordPress/theme-experiments/tree/master/twentynineteen-blocks) | Gutenberg 8.6 |
| [Twenty Twenty Blocks](https://github.com/WordPress/theme-experiments/tree/master/twentytwenty-blocks) | Gutenberg 8.6 |
| [TT1 Blocks](https://github.com/WordPress/theme-experiments/tree/master/tt1-blocks) | Gutenberg 9.4 |
| [Armando](https://github.com/WordPress/theme-experiments/tree/master/armando) | Gutenberg 9.7 |

`require-gutenberg` _is a utility for themes to check whether the Gutenberg plugin is installed._

## Submitting an experiment

We encourage you to submit your experiment to be included! To get started, check out the [contributor's guide](https://github.com/WordPress/theme-experiments/blob/master/CONTRIBUTING.md).

## Instructions

Most of the themes here rely on experimental Gutenberg functionality that must be turned on manually. We recommend testing with WordPress 5.3 or higher, PHP 7.3 or higher, and the latest version of the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/). Here are general instructions for getting started:

1. Clone this repository or upload a zip of the theme into your site’s themes directory.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/).
3. Enable the "Full Site Editing" experiment in the `Gutenberg > Experiments` panel.
4. Activate the new theme from within `Appearance > Themes`.

If the theme includes starter content, you'll want to install on a fresh site, and visit the Customizer after installation. Pressing the "Publish" in there should auto-populate the starter content. 

Tip: WordPress will search for themes inside of subdirectories. If you'd like to test many of the themes experiments, you should be able to clone this entire repository into the `/wp-content/themes/` folder of your test site.  

## Resources and Background

Here are some resources that may be useful context for learning more about block-based themes:

- [Block-based Theme Documentation](https://developer.wordpress.org/block-editor/developers/themes/block-based-themes/)
- [theme.json Documentation](https://github.com/WordPress/gutenberg/blob/master/docs/designers-developers/developers/themes/theme-json.md)
- [Creating a block-based theme (tutorial)](https://developer.wordpress.org/block-editor/tutorials/block-based-themes/)
- [Full site editing development in the Gutenberg repo](https://github.com/WordPress/gutenberg/labels/%5BFeature%5D%20Full%20Site%20Editing)
- [Global styles development in the Gutenberg repo](https://github.com/WordPress/gutenberg/issues?q=is%3Aissue+is%3Aopen+label%3A%22Global+Styles%22)

## Generating your own starter theme  

We have included a script so you can generate a theme based on a starter boilerplate with the minimum necessary to build your own block-based theme. You will need to have php installed to run it using:

`php new-empty-theme.php`

## Questions or Improvements?

If you'd like to propose improvements to this repository, feel free to open an [issue](https://github.com/WordPress/theme-experiments/issues) or [PR](https://github.com/WordPress/theme-experiments/pulls).
