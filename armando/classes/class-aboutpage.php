<?php
/**
 * Armando Admin class
 *
 * Adds a theme about page to the WordPress admin area
 *
 * @package Armando
 * @since 1.2.1
 */

namespace Armando;

/**
 * Admin Theme about page
 *
 * @since 1.2.1
 */
class AboutPage {

	/**
	 * Constructor.
	 *
	 * @since 1.2.1
	 * @access public
	 * @return void
	 */
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'action_admin_page_menu' ] );
	}

	/**
	 * Adds the menu item for the theme information page.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	public function action_admin_page_menu() {
		add_theme_page( __( 'Armando Setup Help', 'armando' ), __( 'Armando Setup Help', 'armando' ), 'edit_theme_options', 'armando_theme', [ $this, 'docs' ] );
	}

	/**
	 * Create the documentation page.
	 *
	 * @since 1.2.1
	 * @access public
	 * @return void
	 */
	public function docs() {
		?>
		<div class="wrap">
			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h1><?php esc_html_e( 'Armando Setup Help', 'armando' ); ?></h1><br>
					<?php esc_html_e( 'Armando is an experimental full site editing theme.', 'armando' ); ?><br>
					<?php esc_html_e( 'Templates, block patterns and block styles may change in future versions.', 'armando' ); ?><br><br>
				</div>
			</div>
			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2><?php esc_html_e( 'Required Plugin', 'armando' ); ?></h2>
					<br><?php esc_html_e( 'Please install and activate Gutenberg version 10.6 or newer.', 'armando' ); ?>
					<br><a class="button button-primary button-hero load-customize" href="<?php echo esc_url( 'https://wordpress.org/plugins/gutenberg/' ); ?>"><?php esc_html_e( 'Gutenberg', 'armando' ); ?></a>
					<br><br>
				</div>
			</div>

			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2><?php esc_html_e( 'How to change header and footers', 'armando' ); ?></h2>
					<br><?php esc_html_e( 'These instructions were written for Gutenberg 10.6. if you are using a different version, the UI might look different.', 'armando' ); ?>
					<br>
					<?php esc_html_e( 'The header and footer can be edited in either the site editor or the block editor.', 'armando' ); ?>
					<br><b><?php esc_html_e( '-If you are not already familiar with the site editor, then the second option may be easier.', 'armando' ); ?></b>
					<br><br>
					<ol>
						<li>
							<b><?php esc_html_e( 'First, open the editor that you prefer:', 'armando' ); ?></b><br>
							<?php esc_html_e( 'The site editor menu is located in the WordPress admin area:', 'armando' ); ?>
							<br><br>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/site-editor-menu.png' ); ?>" alt="<?php esc_attr_e( 'The site editor menu is above the Appearance menu in the WordPress admin.', 'armando' ); ?>">
							<br><br>
							<?php esc_html_e( 'In the block editor, the template edit link is found in the post/page settings sidebar under Status and Visibility:', 'armando' ); ?>
							<br><br>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/template-editor-link.png' ); ?>" alt="<?php esc_attr_e( 'The name of the template that the current page or post uses is shown under Status and Visiblity.', 'armando' ); ?>">
							<br><br>
						</li>
						<li>
							<b><?php esc_html_e( 'Next, open the list view feature.', 'armando' ); ?></b><br>
							<?php esc_html_e( 'The list view can be opened from the top toolbar. It looks a little bit different depending on which editor you selected.', 'armando' ); ?><br>
							<?php esc_html_e( 'It is a list of all the blocks on the page. If you want to change the header, click on the item in the list that says "Header":', 'armando' ); ?><br><br>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/list-view.png' ); ?>" alt="<?php esc_attr_e( 'A list of all blocks that are added to the page.', 'armando' ); ?>"><br><br>
							<?php esc_html_e( 'You can see all the blocks used to create the header, for example, the first column has a site title. The second column has a navigation, and the third column has a search form. ', 'armando' ); ?><br>
							<?php esc_html_e( 'To change the blue background, you can select the column, and change the color in the block settings sidebar.', 'armando' ); ?><br>
							<?php esc_html_e( 'This is only one example of changes that you can make. Remember to save your changes.', 'armando' ); ?><br><br>
							<?php esc_html_e( 'The theme comes with several different headers and footers that you can choose from.', 'armando' ); ?><br>
							<?php esc_html_e( 'You can find them where you preview block patterns: In the top toolbar, click on the plus icon and select the patterns tab.', 'armando' ); ?><br>
							<?php esc_html_e( 'You can place block patterns anywhere on a page, but some of the patterns are designed to be header and footer areas.', 'armando' ); ?><br><br>	
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/patterns.png' ); ?>" alt="<?php esc_attr_e( 'A list of available block patterns.', 'armando' ); ?>"><br>
						</li>
					</ol>
				</div>
			</div>

			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2><?php esc_html_e( 'How to change content of the sidebars', 'armando' ); ?></h2>
					<br><?php esc_html_e( 'These instructions were written for Gutenberg 10.6. if you are using a different version, the UI might look different.', 'armando' ); ?>
					<br>
					<ol>
						<li>
							<b><?php esc_html_e( 'First, open the editor that you prefer.', 'armando' ); ?></b><br>
						</li>
						<li>
							<b><?php esc_html_e( 'Next, from the Add block menu, select Template Part.', 'armando' ); ?></b><br>
							<?php esc_html_e( 'Choose existing, and select Left-sidebar or Right-sidebar from the list.', 'armando' ); ?><br>
							<?php esc_html_e( 'Edit, remove and add any blocks that you want.', 'armando' ); ?><br>
							<?php esc_html_e( 'When you save, make sure that the template part is selected. Once the sidebar has been saved, the changes will be reflected across the website and you can delete the template part from the page you were working on.', 'armando' ); ?><br><br>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/template-part-sidebar.png' ); ?>" alt="<?php esc_attr_e( 'The template part checkbox in the save panel is checked.', 'armando' ); ?>"><br>
							<br>
						</li>
					</ol>
				</div>
			</div>

			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2><?php esc_html_e( 'How to use a block pattern as a page layout', 'armando' ); ?></h2>
					<br><?php esc_html_e( 'These instructions were written for Gutenberg 10.6. if you are using a different version, the UI might look different.', 'armando' ); ?>
					<ol>
						<li>
							<b><?php esc_html_e( 'First, open the block editor.', 'armando' ); ?></b><br>
							<?php esc_html_e( 'Select the page template called "template-patterns".', 'armando' ); ?>
						</li>
						<li>
							<b><?php esc_html_e( 'Next, open the list of block patterns by clicking the plus icon in the top toolbar.', 'armando' ); ?></b><br>
							<?php esc_html_e( 'Select the category called "Page layouts" and insert a pattern that you like.', 'armando' ); ?><br>
							<?php esc_html_e( 'Replace the sample texts and the placeholder images.', 'armando' ); ?><br>
							<?php esc_html_e( 'You can also mix block patterns.', 'armando' ); ?><br>
						</li>
					</ol>
				</div>
			</div>

			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2><?php esc_html_e( 'Tips for creating an accessible website', 'armando' ); ?></h2>
					<ul>
						<li><?php esc_html_e( 'Add alt texts to images. You can do this in the media library or by selecting the image in the edtior.', 'armando' ); ?></li>
						<li><?php esc_html_e( 'Add text alternatives for videos and sound.', 'armando' ); ?></li>
						<li><?php esc_html_e( 'When adding headings, do not skip heading levels. H2 should be followed by H3 and so on.', 'armando' ); ?></li>
						<li><?php esc_html_e( 'Keep your text simple. Paragraphs with more than four lines are more difficult to read. Use lists and spacing in your content.', 'armando' ); ?></li>
						<li><?php esc_html_e( 'Adding images to posts and pages makes your content easier to remember.', 'armando' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
		<?php
	}
}

new AboutPage();
