<?php
/*
 * Plugin Name: CDN
 * Description: CDN config plugin
 * Version:     1.1
 * Author:      The Code Company
 * Author URI:  http://thecode.co
 */

namespace TheCodeCompany;

/**
 * CDN plugin driver class.
 * 
 * @author Zachary Scott <zscott@thecode.co>
 */
class CdnController {
	
	// The file extensions to rewrite to CDN
	private $extensions = array( 'ico', 'gif', 'png', 'jpe?g', 'js', 'css' );
	
	// The configurated CDN URL rewrites
	private $paths = array(
//        'from'  => 'to',
	);

	public function __construct() {
		
		if ( (!defined( 'WP_LOCAL_DEV' ) || !WP_LOCAL_DEV) || (defined('WP_ENV') && WP_ENV == 'staging') ) {
			add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
		}
		
	}
	
	public function plugins_loaded() {
		
		if ( !is_admin() || (defined('DOING_AJAX') && DOING_AJAX) ) {
			add_action( 'init', array( $this, 'template_redirect' ) );
			add_filter( 'cdn_content', array( $this, 'filter' ) );
		}
		
	}

	public function filter( $content ) {
		
		foreach ( $this->paths as $from_domain => $to_domain ) {
			
			$content = preg_replace( 
				"#=([\"'])(https?://{$from_domain})?/([^/](?:(?!\\1).)+)\.(" . implode( '|', $this->extensions ) . ")(\?((?:(?!\\1).)+))?\\1#", 
				'=$1https://' . $to_domain . '/$3.$4$5$1', 
				$content
			);
			
		}
		
		return $content;
		
	}

	public function template_redirect() {
		ob_start( array( $this, 'ob' ) );
	}

	public function ob( $contents ) {
		return apply_filters( 'cdn_content', $contents, $this );
	}
}

new CdnController(); // boot it
