<?php

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {

    define( 'WP_ENV',       'local' );
    define( 'WP_LOCAL_DEV', true );

    include( dirname( __FILE__ ) . '/local-config.php' );

    // Salt keys, generated via https://api.wordpress.org/secret-key/1.1/salt/
    // NOTE these need to be different for each environment otherwise they can cause interference when
    //      logging into prod v staging etc.
    define('AUTH_KEY',         ' H/+(saPhS_wtXRY*}Ylq*XleX!FsF-[@+yN+Y/WMq+cg)vvG=91C{c17<V*Z0u{');
    define('SECURE_AUTH_KEY',  'QrQc!=<C~C(,b}/ $P?zfW1i,-p;fb H4}@oo+o|}ei{l]?lA&U|6.yfS1j;q2x-');
    define('LOGGED_IN_KEY',    'V:W{C*x{[;qP?hrRBi];,-/6WZ(|-i/479R`$mGU|XA .Q:A_uN=b+Wm.C|AabtR');
    define('NONCE_KEY',        't6>><;Rmlhr?uZuGmy#|Z(#!@W`v#;<|`+*,6[Jo.^c44=G:|aK[i(E4U:7_zwth');
    define('AUTH_SALT',        'xrvvj~g@aYv )>Y)%3@87nv!!`U(hp>EqL?e$_LiswUuxf2v3xY7b%IA!- 1]#ka');
    define('SECURE_AUTH_SALT', 'yJi6)G{lZ^f2 |yFt!:BvQh|h@D#-_~5jJ-A$cp1T+;fV1*To55TkD.+LY=I+-pm');
    define('LOGGED_IN_SALT',   'tFqo+5v-&v`5}hw|_?-K&X8^X^*uXph|~R1PT)~p3L,.OQ0%k~!3/;z0uzryC-I|');
    define('NONCE_SALT',       'aoRq*/bl[|(y/5*W<[~{)Jzzs`r(`Ch&|~/]--U<sm6?2|RE/#S+UgM^[WX8Igb0');

} else { // PRODUCTION

}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );

