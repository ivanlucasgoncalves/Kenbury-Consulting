<?php
/*
 * Plugin Name: Fragment Cache
 * Description: Fragment cache class provider plugin
 * Version:     1.0
 * Author:      The Code Company
 * Author URI:  http://thecode.co
 */

namespace TheCodeCompany;

/**
 * Simple fragment cache using WP transients.  Based off:
 * https://gist.github.com/markjaquith/2653957
 *
 * @author Zachary Scott <zscott@thecode.co>
 */
class FragmentCache {

	const GROUP = 'cache-fragments';
	private $key;
	private $ttl;

	public function __construct( $key, $ttl ) {
		$this->key = $key;
		$this->ttl = $ttl;
	}

	public function output() {

		$output = get_transient( $this->key() );
		if ( ! empty( $output ) ) { // It was in the cache


            echo "<!-- frag {$this->key} - cached -->\n";
            echo $output;
            echo "<!-- /frag {$this->key} -->\n";

			return true;

		} else {

            echo "<!-- frag {$this->key} - building -->\n";
			ob_start();

			return false;

		}

	}

	public function store() {

        $output = ob_get_flush(); // Also flushes the buffers
		set_transient( $this->key(), $output, $this->ttl );

        echo "<!-- /frag {$this->key} -->\n";

	}

	// Returns the cache key
	private function key() {

		$key = $this->key;

		// Whether we are on a secure connection
		$is_https = (
            isset( $_SERVER['HTTPS'] ) &&
            ! empty( $_SERVER['HTTPS'] ) &&
            $_SERVER['HTTPS'] !== 'off'
        ) || (
            isset( $_SERVER['SERVER_PORT'] ) &&
            $_SERVER['SERVER_PORT'] == 443
        );

		// Make unique if is HTTPS v HTTP
		if ( $is_https ) {
			$key = $key . '_https';
		}

		// Has to an acceptable length
		return 'frag_' . md5( $key . self::GROUP );

	}

}
