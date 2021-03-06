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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hf9y+9VrsFr9xR1gM9/5P9ajYVWBokdftCpXXieZD2OILUJXE1JHI/pFeZNXPFBxj9/uFmls9z30fkXq6gjoEg==');
define('SECURE_AUTH_KEY',  'daERKVocqcqFsQhpqAXMEUvV8y/yfh19kwdq+iXS0ytHferou72JLcShX7W1D7zmVFPJTvJsxzH1SXxxemRqQw==');
define('LOGGED_IN_KEY',    'mub690ORrO87aOdYYeTDeHQ1emRDBiAUD9qyy5zTHLvVIO3duyx6tQuFiPPY0zeiC07QOKPrnfT+YyusXTnqMA==');
define('NONCE_KEY',        'n0DRu6KMgoETK1Lm2OxBiletDg/qHGbdyocpWbOJCufXXRZygVxiu2SIVuoK6VJREfRbdp9Q4JvzIxrWf3zMiA==');
define('AUTH_SALT',        '1nvztPBAf2raHnaN9qtEW6NOrQwOsYUcoNipi1X3S4zV8Sl2ZcfnFaHcwbIKReGoE33N6pf6D/Glltq8/rDFcA==');
define('SECURE_AUTH_SALT', 'w2IbUDqiJctg+Yu+h0/8T3zKlm/8xqZuuaznPZB9tkExjg3l0P49oUa2lcUF9bgBGwtFFx30xIUIOu7txYV23A==');
define('LOGGED_IN_SALT',   'BGPAbWHPGVckl+0lyfci7zUebqgWsUHA9LmDuRJx/lK2ouMxhol3DPEcIks2IuiSccgnD9B0ax3lS0QCz5I4Pg==');
define('NONCE_SALT',       'SMBiqMwzL9ysmkDA7CbD3kw3Wqfv6G8wQje+XQEV+ntC0JDN2vWy8PGI53cbE2D2IFs5o8vKqxZ09CXpfm1TMA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
