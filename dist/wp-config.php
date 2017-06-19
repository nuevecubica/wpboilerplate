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
define('DB_NAME', 'wpboilerplate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ks~RJWV|OVa3z%H_>2L^erAvR1y^ys:Qm0]F[i=[x?DZMZ-->>BvQG[a#_TE-L4W');
define('SECURE_AUTH_KEY',  '/42@%V@V~<%x}Uzwo=C<v FG_Px@p FV_[d~OP-|(%]Sh^0Np6y.CY,q+@RHB-X~');
define('LOGGED_IN_KEY',    'kF.Vud=10O6A>Ru><PvlQe)|jvPCuYavE$jF.l%%}/?.M+OZ7loJlu$lH=!I`Dyz');
define('NONCE_KEY',        '5SuGVYh@nu!)p/cHA 8#LZPb0l*|Y76%3Xty/ET#Sp*?~WE/5Bh[_9i#T;@ns0K8');
define('AUTH_SALT',        '6q=+nNV9m=6) <o>QcNr3@Dag,C+CKT|zEkPA|*2a[VD3#]k*`Tf7tJs7l6596[7');
define('SECURE_AUTH_SALT', '6~R[(Eg@6$_$`6V{1.*g>FE9MOAQG^*0Nc=[=1s7p>p$&.]#AQ=V3>9rcLYX:N^r');
define('LOGGED_IN_SALT',   'NVG^v>w2lb9M[RMx.j+nV]Rq9B UC+|zyJ,>#ZfnT5>m<jQWklildveFniGyq!y;');
define('NONCE_SALT',       'ogAhJ33dgSsvEHh.J}9GDieF?10^<iezR%kW2b}a0H7g=jqyrZ0 K7dRKF2e9C(R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
