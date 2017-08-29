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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'd5sAMMkng57qFqVwqFXZSRFfLTavU+6tD/N1DidknjkyzSo4FQmGMgn3/WEAdFlxx2rgmRRkaUuztbsnXG0Rug==');
define('SECURE_AUTH_KEY',  '6gJTTTGyvz57bq3+IKNBoafmtqq4yw8WUkCY2usBauY4qSJ5bEgpWBqf+Dar/HaLpgygjuti47mLUYFM+ork0g==');
define('LOGGED_IN_KEY',    'LTbWVdI7DqUUG9Nu6k4mVC3V4U02ctX2B03mGcuWUUUr8MHbFVf31N2EYojfWav8yLMg4jP4AnfXe7edN55J6w==');
define('NONCE_KEY',        'DSgGNkCOKnLQ18Ic4xKDto0ljvm2ibvcLNf1/Dx5mDaj4UR9i+9JFSYfSOIBeXZH54DOpm2glgWe9tir4w6wSA==');
define('AUTH_SALT',        'WXFko5cc0fEk6LQYwI7laKo/qplKva836na2s7Za4ATGl+pidytSD+0+ecvkqm9ovq16vCIUgftUxmcq0bo/kQ==');
define('SECURE_AUTH_SALT', 'Z/1tTL7yOEJXfoIvoduXQEIXvsOIBvH/4lpZ61FAejupWj3tTCRl7tZ30FsnS7D0b5WEWExmxY5XNRLJ3PKz/Q==');
define('LOGGED_IN_SALT',   '3O4L1OMOibWiTqQ0BPmFcu279Kt5T8dvva4nbdK3k8vkHnBdTHfIFujnnYolFirZwNMe+pyiBzhw/loyTpTITQ==');
define('NONCE_SALT',       'qrDJCORS37n9UisvF6EyHWjx5zwdpUbxWFPxf/YHY+SDJAf3gmkI+DQsaqUvEi+npmpCYBjCiRQ+IIxdg/NQmA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
