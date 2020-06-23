# Require Gutenberg

While Full-Site Editing is still experimental, themes need a way to require Gutenberg be installed as a plugin, with the Full Site Editing experiment enabled.

The PHP file here will do the following:

* Show an admin notice stating this is an experimental theme
* Check if Gutenberg is installed as a plugin
* If Gutenberg is not installed, allow users to install it with the click of a button.
* Check if Gutenberg is Activated
* Check if Gutenberg has the "Full Site Editing" experiment enabled.
* If Gutenberg is not activated or the experiment is not enabled, allow users to activate them with the click of a button.
* If the user switches to a non-FSE theme, deactivates the experiment.

Everything runs on AJAX so there are no page refreshes.

## Usage

Simply grab the contents of the `require-gutenberg.php` file and paste them in your `functions.php` file. Alternatively you can include it as a separate file.  
Once you copy the code to your theme, replace `textdomain` inside the file with your theme's text-domain.
