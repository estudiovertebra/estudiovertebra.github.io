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
define('DB_NAME', 'bancovertebra');

/** MySQL database username */
define('DB_USER', 'bancovertebra');

/** MySQL database password */
define('DB_PASSWORD', 'zipi1024');

/** MySQL hostname */
define('DB_HOST', 'bancovertebra.mysql.dbaas.com.br');

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
define('AUTH_KEY',         '38vw4wijfmihtifmrvfq8ftquwrxrbhjaliadqay78omvs0sqlyoeu67qnh0ohcq');
define('SECURE_AUTH_KEY',  '4l1hekxihmyny2dtomamgegwkcwt5optrnmwhhjv4zqfwst4sbtnxcp2lg5fnz3r');
define('LOGGED_IN_KEY',    'qpx79qvih9hnwqn8ladyibzrnfgrakb6nmftrshy8pbohpfmp2bmp3qeoajjhea9');
define('NONCE_KEY',        '5qrzsg9q0mkine1qt02whdeorld2zb3tu3ukdjg3ozbupclutctwzksfpyekhgmw');
define('AUTH_SALT',        'ucwtgaixh9ddgmiwhldgtbkgbcimppx7bhc9dp0zreztejuceqgjxnaiwc1owpvv');
define('SECURE_AUTH_SALT', 'pqqblt7abqchj2wpzhvgmrdsppx8tumlp9kwp61ecrrjk4phz0ij4ychpkwloya8');
define('LOGGED_IN_SALT',   'eylnovyjr85ljxnqmikkqqkt3xnxbi1uyp6vbzvoatbmsstvdmludusnbzdql95i');
define('NONCE_SALT',       'pxajlsoptfxey5ctqes4sgsnb4jbq5c8jnv6mnhfmdl4ah8uonlfmllbbolzfwfy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

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
