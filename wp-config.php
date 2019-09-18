<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jakobottosen_dk' );

/** MySQL database username */
define( 'DB_USER', 'jakobottosen_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', "1ms0rryd4v31c4n'td0th4t" );

/** MySQL hostname */
define( 'DB_HOST', 'jakobottosen.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H:4`(.kau=gNW}[xPu1,i(d{cccXrtGM_bIT*q&-8|$ye[8 ]fF*w*8eG@tTL#j-');
define('SECURE_AUTH_KEY',  'yC-]iN(.V{q;TzJ^M+~3z$Fu&Y!f$)+%als`+)fN%Wi#U6Fzj%=z|HB]NBG0A}eu');
define('LOGGED_IN_KEY',    'tp?/sf<cE<T@-=iwz*-sZ$fPDttZ#Kg#9aGr~4-pnfqV<-1!&?n[_4f-KtI5xM|.');
define('NONCE_KEY',        'L`20_@Y`B0N3f{QzzB.jY9!Z kGTmwhg[!ji-D}1+=-;.+eH14HtsifYj9vd1i]i');
define('AUTH_SALT',        'k|V qQs;CF):riBu,NY11LSUnSb2+;SbR*Vks1$j-Ks-K&HeYm|u?t`$~]/)h({;');
define('SECURE_AUTH_SALT', 'cS+EjRAJG24=oKs`,pf-]!{bw{Djrcew_5^|{bpQu9j6H6uO*F!1jAP%)F/,vX2/');
define('LOGGED_IN_SALT',   '+P8YH&]Y%_63~=6s;|gT-kW<JbyKP9im4F-rpV#^6H/a_^|vbh9&3ua[K[wR-p,c');
define('NONCE_SALT',       '-U=yyM2tY_zs/Nmg(K|-H][onMM};f0ZS&MY|jOV+XA8h+m} JG}JU}TvBt-OZQI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jfo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
