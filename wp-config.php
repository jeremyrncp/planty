<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rd)+Uvx+z0ksV[u;#tA?Q7h~Z}4J[JI{n*ZcT5L%B(Og7d8 klr)fkKY#e4n|F{@' );
define( 'SECURE_AUTH_KEY',   '%Fdv/bPu{3n.u}>Qy12ifGCkN.VqyVd&.,hoH`hM#*onFz91l(A`+=4e@Ng@E3p9' );
define( 'LOGGED_IN_KEY',     'Z=.vT?AM#S%Ze8ZOSBxnGsJ+ouDj8KHFNx{VTQ?kWjrN(K&fYQXJ@dHr`CXAW(3i' );
define( 'NONCE_KEY',         '~(BbFkApTSRpX0B6PAq9QfMnhO> _6Wb}Mc>wirrv-5fD2|YH^.Tgnp&B/|2_G|F' );
define( 'AUTH_SALT',         '[Mfh0D/h{P}o]r0#<Vxo}92Nr)oLUNj32Lo$1C_Im|VOIu&tmyS +.c{r`HjlT/f' );
define( 'SECURE_AUTH_SALT',  ' MIKI6a:}g|$K(SMv!]>H`~if>>fH,fYj[{o1cW[Hwr,93i#&AEM{iK-ImN?B8Jo' );
define( 'LOGGED_IN_SALT',    '0xDd=)8@{uaBQn ?)>DmWbe]$%h*YPg@Ag~AHd(bJv^Q.P6_As05-~UJNO(-OYh<' );
define( 'NONCE_SALT',        ':BO<>CfBv+OkYXF_;YH0@c.j((:1Q[#N#eP,e50I?lHc~=-&q)` VW0 Lr/&d@Cc' );
define( 'WP_CACHE_KEY_SALT', 'b%nS_@4+}>+#@0-0x4%fAma9&J5 ztzBs[#/2##.k+KlS{A|u=@>JYC]b<1HR~0n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
