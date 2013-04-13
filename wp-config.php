<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordsesh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ticauBS77');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^G!g6q|FXk5lM8q%5Z+RRX*ozS4+s-MgQ4j[FL9AP]/+$Q5grr{aO~D+z,: Bz=@');
define('SECURE_AUTH_KEY',  'k-hq=?maYKz9FL|Nv2 Koq]$x:DXL5ABy~EU7uIZrNMD{Q%]*EG>xfaR#GCV3 3,');
define('LOGGED_IN_KEY',    '~-eeib#g;R@x|G+vsr+|Y9P]l`-#Yd-:QdS=p6P*(bJ3}PQy|v:<FR,18Vl+*:Y[');
define('NONCE_KEY',        '::6aYi+-0iCYj1.]isln>Tx{xx>ny<dXzADSnqh+$qs+NGm:ikh<~TudR&xDml90');
define('AUTH_SALT',        'ar+q9R4vRH%O??SAgV5e)lN?>#Q[Oz+T9d <+Wer,!*>EuHPD@w>LDjt&,u~GHg3');
define('SECURE_AUTH_SALT', '|X(f|>1+(0!^{=e.CO@N(O:!.07DH|O|&G2z1.}}j.d;4mD^-*ckFO/l|b]LH|z8');
define('LOGGED_IN_SALT',   '>:BH/hdHToXGgY]u|lMaMa5v+oL *bq`-S{aA:!RDIKNov{P^=aR>6}&1-.)>j18');
define('NONCE_SALT',       '6Fye}zC:TW{rcLQ.>-([7tsFb|(FX@?voSv87u*6j2$!~IE+Fe|_;A__pA-Q~X^@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

