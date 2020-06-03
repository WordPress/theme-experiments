<?php
/**
 * Require Gutenberg
 *
 * @package WPThemes/Require-Gutenberg-FSE
 */

if ( ! class_exists( 'WPThemes_Require_Gutenberg' ) ) {

	/**
	 * Init Gutenberg requirement.
	 *
	 * @since 1.0.0
	 */
	class WPThemes_Require_Gutenberg {

		/**
		 * Add hooks for this class.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function run() {

			// Make sure we have the plugin-checking functions we need.
			if ( ! function_exists( 'is_plugin_active' ) ) {
				include_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			// Add the notice.
			add_action( 'admin_notices', [ $this, 'admin_notice' ] );

			// Print scripts in the footer.
			add_action( 'admin_footer', [ $this, 'the_script' ] );

			// Print styles in the footer.
			add_action( 'admin_footer', [ $this, 'the_styles' ] );

			// Handle activating Gutenberg via AJAX.
			add_action( 'wp_ajax_wpthemes_require_gutenberg_activate_plugin', [ $this, 'activate_plugin' ] );

			// Handle activating a non-FSE theme.
			add_action( 'switch_theme', [ $this, 'switch_theme' ], 10, 3 );
		}

		/**
		 * The admin notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function admin_notice() {

			// Figure out the current step we're on.
			$active_step = false;
			if ( ! $this->is_plugin_installed() ) {
				$active_step = 'install';
			} elseif ( ! $this->is_plugin_active() || ! $this->is_experiment_enabled() ) {
				$active_step = 'activate';
			}

			// Early exit if there's nothing to do.
			if ( ! $active_step ) {
				return;
			}
			?>
			<div class="notice notice-warning require-gutenberg-notice-wrapper notice-alt<?php echo ( $active_step ) ? ' active-step-' . esc_attr( $active_step ) : ''; ?>">
				<p><?php esc_html_e( 'This is an experimental theme and requires the Gutenberg plugin to be installed with the "Full Site Editing" experiment enabled.', 'textdomain' ); ?></p>
				<div class="require-gutenberg require-gutenberg-install">
					<p><?php esc_html_e( 'The Gutenberg plugin is not installed. Click the button below to install it.', 'textdomain' ); ?></p>
					<p><button class="button" onclick="wpThemesRequireGutenberg.installPlugin();" aria-label="<?php esc_attr_e( 'Install Gutenberg', 'textdomain' ); ?>"><?php esc_html_e( 'Install Gutenberg', 'textdomain' ); ?></button></p>
				</div>
				<div class="require-gutenberg require-gutenberg-activate">
					<p><?php esc_html_e( 'The Gutenberg plugin is installed but not activated, or the "Full Site Editing" experiment is not enabled. Click the button below to enable the plugin and experiment.', 'textdomain' ); ?></p>
					<p><button class="button" onclick="wpThemesRequireGutenberg.activatePlugin();"><?php esc_html_e( 'Activate Plugin & Experiment.', 'textdomain' ); ?></button></p>
				</div>
				<div class="require-gutenberg require-gutenberg-success">
					<p><?php esc_html_e( 'Congratulations! All steps required were completed. Enjoy your Full Site Editing experience.', 'textdomain' ); ?></p>
				</div>
			</div>
			<?php
		}

		/**
		 * Print styles for our notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function the_styles() {
			?>
			<style>
				.notice .require-gutenberg { position: relative; display: none; }
				.notice.active-step-install .require-gutenberg-install { display: block; }
				.notice.active-step-activate .require-gutenberg-activate { display: block; }
				.notice.active-step-success .require-gutenberg-success { display: block; }
				.notice .require-gutenberg:after { display: none; }
			</style>
			<?php
		}

		/**
		 * Print script for our notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function the_script() {
			?>
			<script>
			wpThemesRequireGutenberg = {

				/**
				 * Install Gutenberg.
				 */
				installPlugin: function() {

					// Tweak the button.
					jQuery( '.notice .require-gutenberg-install .button' )
						.html( '<?php esc_html_e( 'Installing Gutenberg...', 'textdomain' ); ?>' )
						.addClass( 'updating-message' )
						.attr( 'aria-label', '<?php esc_attr_e( 'Installing Gutenberg...', 'textdomain' ); ?>' );

					// Install the plugin.
					wp.updates.installPlugin( {
						slug: 'gutenberg',
						success: function() {

							// Remove the "install" step.
							jQuery( '.notice .require-gutenberg-install' ).remove();

							// Switch classes and move on to the next step.
							jQuery( '.require-gutenberg-notice-wrapper' )
								.removeClass( 'active-step-install' )
								.addClass( 'active-step-activate' );
						},
						error: function( e ) {

							// Remove previous errors.
							jQuery( '.require-gutenberg-install .error' ).remove();
							jQuery( '.require-gutenberg-install' )
								.append( '<div class="error"><p><?php esc_html_e( 'An error occured:', 'textdomain' ); ?></p><p>' + e.message + '</p><p><?php esc_html_e( 'Please check your browser console for more details', 'textdomain' ); ?></p></div>' );

							console.log( e );
						}
					} );
				},

				/**
				 * Activate the Gutenberg plugin.
				 */
				activatePlugin: function() {

					// AJAX request to activate the plugin.
					jQuery.get( ajaxurl, {
						action: 'wpthemes_require_gutenberg_activate_plugin',
						nonce: '<?php echo esc_html( wp_create_nonce( 'wpthemes_require_gutenberg' ) ); ?>'
					}, function( response ) {
						if ( 'success' === response ) {

							// Remove the activate step.
							jQuery( '.notice .require-gutenberg-activate' ).remove();

							// Continue to next step.
							jQuery( '.require-gutenberg-notice-wrapper' )
								.removeClass( 'active-step-activate' )
								.removeClass( 'notice-warning' )
								.addClass( 'notice-success' )
								.addClass( 'active-step-success' );
						} else {

							// There was an error.
							jQuery( '.require-gutenberg-activate' )
								.append( '<div class="error"><p><?php esc_html_e( 'An error occured', 'textdomain' ); ?>:</p><p><?php esc_html_e( 'Could not activate the plugin. Please go to the plugins page on your dashboard and manually activate the plugin.', 'textdomain' ); ?></p></div>' );
						}
					} );
				},
			}
			</script>
			<?php
		}

		/**
		 * Check if the plugin is installed.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		public function is_plugin_installed() {
			$plugins = get_plugins();
			return isset( $plugins['gutenberg/gutenberg.php'] );
		}

		/**
		 * Check if the plugin is active.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		public function is_plugin_active() {
			return defined( 'GUTENBERG_VERSION' ) || is_plugin_active( 'gutenberg/gutenberg.php' );
		}

		/**
		 * Check if the FSE experiment is enabled.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		public function is_experiment_enabled() {
			$option = (array) get_option( 'gutenberg-experiments', [] );
			return ( isset( $option['gutenberg-full-site-editing'] ) && '1' === $option['gutenberg-full-site-editing'] );
		}

		/**
		 * Activates the Gutenberg plugin.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function activate_plugin() {

			// Early exit if the user doesn't have the capability to activate plugins.
			if ( ! current_user_can( 'activate_plugins' ) ) {
				wp_die();
			}

			// Security check.
			check_ajax_referer( 'wpthemes_require_gutenberg', 'nonce' );

			// Activate plugin.
			$result = activate_plugin( 'gutenberg/gutenberg.php' );

			// Plugin was successfully activated, now activate the experiment.
			if ( ! is_wp_error( $result ) ) {

				// Get option.
				$option = get_option( 'gutenberg-experiments', [] );

				// Sanity check for option.
				if ( ! is_array( $option ) ) {
					$option = [];
				}

				// Enable experiment.
				$option['gutenberg-full-site-editing'] = '1';

				// Update the option.
				update_option( 'gutenberg-experiments', $option );

				// Exit with success message.
				wp_die( 'success' );
			}

			// Something went wrong, exit with error message.
			wp_die( 'error' );
		}

		/**
		 * Handle switching themes.
		 *
		 * Deactivates the FSE experiment if the theme we're switching to does not support it.
		 *
		 * @access public
		 *
		 * @param string   $new_name  Name of the new theme.
		 * @param WP_Theme $new_theme WP_Theme instance of the new theme.
		 * @param WP_Theme $old_theme WP_Theme instance of the old theme.
		 *
		 * @return void
		 */
		public function switch_theme( $new_name, $new_theme, $old_theme ) {
			$new_theme_path = $new_theme->get_template_directory();

			// No need to do anything if the theme we switched to supports Full Site Editing.
			// Check if the block-templates folder exists, and if it does then early exit.
			if ( file_exists( $new_theme_path . '/block-templates' ) || is_dir( $new_theme_path . '/block-templates' ) ) {
				return;
			}

			// Get option.
			$option = get_option( 'gutenberg-experiments', [] );

			// Sanity check for option.
			if ( ! is_array( $option ) ) {
				$option = [];
			}

			// Disable experiment.
			unset( $option['gutenberg-full-site-editing'] );

			// Update the option.
			update_option( 'gutenberg-experiments', $option );
		}
	}
}

if ( ! function_exists( 'wpthemes_require_gutenberg_fse' ) ) {
	/**
	 * Load the Gutenberg requirement.
	 *
	 * @return void
	 */
	function wpthemes_require_gutenberg_fse() {

		// Instantiate the object.
		$init = new WPThemes_Require_Gutenberg();

		// Run our actions.
		$init->run();
	}
}

// Run Gutenberg requirement.
wpthemes_require_gutenberg_fse();
