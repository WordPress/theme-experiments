<?php
/**
 * Generates a theme based on the empty theme.
 * Simplified version of https://github.com/Automattic/underscores.me/blob/master/plugins/underscoresme-generator/underscoresme-generator.php
 */

class Generate_Theme {

	protected $theme;

	function __construct() {
		echo "What is the name of your theme?: ";
		$handle = fopen ("php://stdin","r");

		$this->theme['name'] = trim(fgets($handle));
		$this->theme['slug'] = $this->sanitize_title_with_dashes($this->theme['name']);
		$this->theme['functions_slug'] = str_replace( '-', '_', $this->theme['slug'] );
		$this->create_zip();
	}

	function create_zip() {

		if($this->theme['name'] === ''){
			echo "ABORTING!\n";
			exit;
		}

		$zip = new ZipArchive;
		$zip_filename = sprintf( '%s.zip', md5( print_r( $this->theme['name'], true ) ) );
		$res = $zip->open( $zip_filename, ZipArchive::CREATE && ZipArchive::OVERWRITE );

		$prototype_dir = 'emptytheme/';

		$exclude_files = array( '.travis.yml', 'codesniffer.ruleset.xml', '.jscsrc', '.jshintignore', 'CONTRIBUTING.md', '.git', '.svn', '.DS_Store', '.gitignore', '.', '..' );
		$exclude_directories = array( '.git', '.svn', '.github', '.', '..' );

		$iterator = new RecursiveDirectoryIterator( $prototype_dir );
		foreach ( new RecursiveIteratorIterator( $iterator ) as $filename ) {

			if ( in_array( basename( $filename ), $exclude_files ) )
				continue;

			foreach ( $exclude_directories as $directory )
				if ( strstr( $filename, "/{$directory}/" ) )
					continue 2; // continue the parent foreach loop

			$local_filename = str_replace( $prototype_dir, '', $filename );

			$contents = file_get_contents( $filename );

			$zip->addFromString( $this->theme['slug'] . '/' . $local_filename, $this->replace_theme_name($contents, $local_filename) );
		}
		$zip->close();

		echo "\n";
		echo "Your ZIP file is ready!\n";
	}

	function replace_theme_name($contents, $filename) {
		// Replace only text files, skip png's and other stuff.
		$valid_extensions = array( 'php', 'css', 'scss', 'js', 'txt' );
		$valid_extensions_regex = implode( '|', $valid_extensions );
		if ( ! preg_match( "/\.({$valid_extensions_regex})$/", $filename ) )
			return $contents;
		
		// Special treatment for style.css
		if ( 'style.css' === $filename ) {
			$theme_headers = array(
				'Theme Name'  => $this->theme['name'],
				'Text Domain' => $this->theme['slug'],
			);

			foreach ( $theme_headers as $key => $value ) {
				$contents = preg_replace( '/(' . preg_quote( $key ) . ':)\s?(.+)/', '\\1 ' . $value, $contents );
			}

			$contents = preg_replace( '/\b_s\b/', $this->theme['name'], $contents );
			return $contents;
		}

		// Special treatment for functions.php
		if ( 'functions.php' === $filename ) {
			$contents = str_replace( 'emptytheme', $this->theme['functions_slug'], $contents );
			return $contents;
		}
	}

	function sanitize_title_with_dashes( $title, $raw_title = '', $context = 'display' ) {
		$title = strip_tags( $title );
		// Preserve escaped octets.
		$title = preg_replace( '|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title );
		// Remove percent signs that are not part of an octet.
		$title = str_replace( '%', '', $title );
		// Restore octets.
		$title = preg_replace( '|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title );
	 
		$title = strtolower( $title );
	 
		if ( 'save' === $context ) {
			// Convert &nbsp, &ndash, and &mdash to hyphens.
			$title = str_replace( array( '%c2%a0', '%e2%80%93', '%e2%80%94' ), '-', $title );
			// Convert &nbsp, &ndash, and &mdash HTML entities to hyphens.
			$title = str_replace( array( '&nbsp;', '&#160;', '&ndash;', '&#8211;', '&mdash;', '&#8212;' ), '-', $title );
			// Convert forward slash to hyphen.
			$title = str_replace( '/', '-', $title );
	 
			// Strip these characters entirely.
			$title = str_replace(
				array(
					// Soft hyphens.
					'%c2%ad',
					// &iexcl and &iquest.
					'%c2%a1',
					'%c2%bf',
					// Angle quotes.
					'%c2%ab',
					'%c2%bb',
					'%e2%80%b9',
					'%e2%80%ba',
					// Curly quotes.
					'%e2%80%98',
					'%e2%80%99',
					'%e2%80%9c',
					'%e2%80%9d',
					'%e2%80%9a',
					'%e2%80%9b',
					'%e2%80%9e',
					'%e2%80%9f',
					// Bullet.
					'%e2%80%a2',
					// &copy, &reg, &deg, &hellip, and &trade.
					'%c2%a9',
					'%c2%ae',
					'%c2%b0',
					'%e2%80%a6',
					'%e2%84%a2',
					// Acute accents.
					'%c2%b4',
					'%cb%8a',
					'%cc%81',
					'%cd%81',
					// Grave accent, macron, caron.
					'%cc%80',
					'%cc%84',
					'%cc%8c',
				),
				'',
				$title
			);
	 
			// Convert &times to 'x'.
			$title = str_replace( '%c3%97', 'x', $title );
		}
	 
		// Kill entities.
		$title = preg_replace( '/&.+?;/', '', $title );
		$title = str_replace( '.', '-', $title );
	 
		$title = preg_replace( '/[^%a-z0-9 _-]/', '', $title );
		$title = preg_replace( '/\s+/', '-', $title );
		$title = preg_replace( '|-+|', '-', $title );
		$title = trim( $title, '-' );
	 
		return $title;
	}
}

new Generate_Theme;
?>