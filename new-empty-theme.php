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
		$this->theme['slug'] = urlencode($this->theme['name']);
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
			$contents = str_replace( 'emptytheme', $this->theme['slug'], $contents );
			return $contents;
		}
	}
}

new Generate_Theme;
?>