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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_mamaeve' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2K5!t%|W]QeN`{SHI|aZH5HbO*702N6yXJ1@-`@!;yN lxFPitKO:rI@h&~tH1%R' );
define( 'SECURE_AUTH_KEY',  'Y4)*bjvD:~p~PfG[U]qL7Q}6H(yHU:#Z!7UlN1De8B/Z#@4501@eI.NNF_<5J;hG' );
define( 'LOGGED_IN_KEY',    'SeB#Ox|p2BQt*5 gZDUxv4&B)}q5u-2|qp)w3R=C(W5^%9-EvfZZ-xh#L6iq4>K~' );
define( 'NONCE_KEY',        '%FRGdcq789[,F#tF/K5t/cr@h{NC*3^/m P3(Gl%*vZ<U3J4u.N%aJ!Hu KqkiU ' );
define( 'AUTH_SALT',        '*tmwobK=0eVKVF&=G^z/!$BEqFL d9*rYHYt9lIe6 gZA@Ud|^pRRjXo=a J%20W' );
define( 'SECURE_AUTH_SALT', 'LwW(>did_Wy6j]mU~h6r-PeY23X<LpOP{.wyZwV{(5>_Q?-@kAbO}5haq(_mn&n;' );
define( 'LOGGED_IN_SALT',   'g pR<bM?z]>e1$_B5l#qq86Q`PmK4=y%w`?9+d,W@i@R|w@nt|0v8{AsZC=_O,yv' );
define( 'NONCE_SALT',       'vD*PP_R?SfuR%6>6(Nu~!m8TI[2ada8%|SG:,L0`)&-6``]u3=uw=&%[QJ7U7I#x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
