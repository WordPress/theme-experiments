# WordPress Theme Experiments

⚠️ These themes are not intended for use on a production site.

## About
This repository is dedicated to exploring how WordPress themes can best leverage Gutenberg blocks. Each sub-directory contains a WordPress theme that explores some aspect of creating themes using blocks or block templates.

## Submitting an experiment
We encourage you to submit your experiment to be included! To get started, check out the [contributor's guide](https://github.com/WordPress/theme-experiments/blob/master/CONTRIBUTING.md).

## Instructions

Most of the themes here rely on experimental Gutenberg functionality that must be turned on manually. Here are general instructions for getting started:

1. Clone this repository or upload a zip of the theme into your site’s themes directory.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/).
3. Enable the "Full Site Editing" experiment in the `Gutenberg > Experiments` panel.
4. Activate the new theme from within `Appearance > Themes`.

If the theme includes starter content, you'll want to install on a fresh site, and visit the Customizer after installation. Pressing the "Publish" in there should auto-populate the starter content. 

Tip: WordPress will search for themes inside of subdirectories. If you'd like to test many of the themes experiments, you should be able to clone this entire repository into the `/wp-content/themes/` folder of your test site.  

## Resources and Background
Here are some resources that may be useful context for learning more about block-based themes:

- [Block-based Theme Documentation (Experimental)](https://developer.wordpress.org/block-editor/developers/themes/block-based-themes/)
- [Full site editing developing in the Gutenberg repo](https://github.com/WordPress/gutenberg/labels/%5BFeature%5D%20Full%20Site%20Editing)
- [Defining Content-Block Areas](https://make.wordpress.org/core/2019/09/05/defining-content-block-areas/)

Questions or Improvements?

If you'd like to propose improvements to this reopsitory, feel free to open an [issue](https://github.com/WordPress/theme-experiments/issues) or [PR](https://github.com/WordPress/theme-experiments/pulls).
