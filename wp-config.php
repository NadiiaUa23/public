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
define( 'AUTH_KEY',          'qU [hrivh:m!dxO$axv,^j7hB<3Q#Fym&oD{LGVH5*e)xB74x==r<0nV2ov2.r}+' );
define( 'SECURE_AUTH_KEY',   'o,,yyQHDEtob06+7SqLR&~.W`X#G^#/roR$xu+9?(f2~$C0E0cR.b&7e~ea-ff?F' );
define( 'LOGGED_IN_KEY',     'TKVQ}>9aOp%nlg$n#<d<aq88#!R1]w9 6%<;!0#DWSH/7W,NfW.?!mrX6[*rnZn7' );
define( 'NONCE_KEY',         '%CK1X1r?0Ez&p5?gak@CI*6Mws{0!&3JOc$@~iveR}BMvm$e@S^QjRtFP~}PEwXu' );
define( 'AUTH_SALT',         'q|bKDS7.83im[3(9^I7JVbn.|K[n`2.4ADvE353ia%BDXN+)*j>.$l1L<vIX@6:)' );
define( 'SECURE_AUTH_SALT',  'xJ$_{+jh+u2ofC 5(x&WaXoV%z?zL^n)g@)%`rfs]5BGkL+j Us|(Pk.g=R0!M# ' );
define( 'LOGGED_IN_SALT',    '>c8LOe=_QeX7!q ptFz7a>qas$I3jeJ9yl#AM9O-z-s6lshFD(MC9ah-lgG9N7O#' );
define( 'NONCE_SALT',        'XL((.b*@e4pf/T7~Kbp;f6EZ?h&g;ggq2$NP.Kt0dq~~;siz|@tF/W?A,--}*p]f' );
define( 'WP_CACHE_KEY_SALT', 'Da(Q.l.@g@Q@nivM}UG.yDGh0waGz:5sR>ZiS3z|9r`~.aYh>!z?4poH8q.=KzlW' );


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
