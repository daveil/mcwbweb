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
define('DB_NAME', 'mcwb_wp_17');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6;r}E(.t|@@GH#jF~X(=cml{&&G#Zu?PHGqbmYljSnp9P#0bc`:T]YN9nPd]H]Z(');
define('SECURE_AUTH_KEY',  'H(,UC5|+Q4a`YfznRd{q*Q5msWx|Ie^|yt<{d^I[Qj=Xa#sv-wg-09s`}Yw(@]9,');
define('LOGGED_IN_KEY',    'ocsD8&|.X=yz.)g0wm+`3g VO(mxcV}LWLHaF7WSp]{G4^}IA}U@f&aGUXddEOK(');
define('NONCE_KEY',        'pnF5E34zB@MzSQP6n|`r]KlZe,}KtB8L(8yDGsICkSZn82qDLHTr:z{iv.UX:%h1');
define('AUTH_SALT',        'g-ao0gq*{PNa[vHOVtv_6n/w4a*=pq!@e:%$;Hj5ke0[;hM:8SF;VU46jH<i[FdB');
define('SECURE_AUTH_SALT', 'm[hyga4@iMECAVZ~{3I?=iPVw7H9+^(K[J/UOU)Mi8dvOBQY4Nl^}tXWi-PFs&1L');
define('LOGGED_IN_SALT',   'J ?ncx`vk!`Bd,89-P((Y0FDCwB(R.zQva[@(EmO3(/_LDoJYYf2{qVAzU-a,[j)');
define('NONCE_SALT',       'cJ4S&TnYO7jQ]9|e74|8n rlJvB2IOf*<#=~f4?q]l~[|fp0Y@q*,HK*C`1=>%qf');

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
