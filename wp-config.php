<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

ob_start(); 

define('DB_NAME', 'i1261958_wp6');

/** MySQL database username */
define('DB_USER', 'i1261958_wp6');

/** MySQL database password */
define('DB_PASSWORD', 'E@p#I*aVib74.^1');

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
define('AUTH_KEY',         'Kb6Hj9pwIfndZwpffoLX5TwgvGveJo7IorEporhrMvMbMldkEJkxPu4SJgTE9WfE');
define('SECURE_AUTH_KEY',  'apcDjfcGRWXHcEKhQs4PhnN4acdMIsxe16FKKoqbuAhcGKZ41Fjw2qCUcVpMG8cm');
define('LOGGED_IN_KEY',    'poYACaBzbTgULxIgWX1VxYMCZ1k41nHCXL75rbS8BmFqAecivfo35Hn6sUFH8ByA');
define('NONCE_KEY',        'dB0WKrgAR4u2jyvDjOrq06ZPRmCqtFJmfy9eTGjkxwUyICQWnEe3TgOodplGZnsM');
define('AUTH_SALT',        'Td12mupf6goXurdRbbD8yUQgswUOPJcTutwljBhU6ieFMhISNtNJ1LH3KfOy6dLG');
define('SECURE_AUTH_SALT', 'Dj5AQvmpDmspdV6tKgZOYTL4OxCj9kDThkFPoMOaxn2VlbH7MrMFhNPXnuBOeay1');
define('LOGGED_IN_SALT',   'cKjRREBdanmFwWrG8gqzB9WZFUvMqthTfzsQdJfRIpfXqtCkNPbq943v5BJ2WIvf');
define('NONCE_SALT',       'zw5somDwbR4LYCeT0RHh56YuRS5mTdabABJRTOamRD6vlceZw597ydC5pcv6yAd2');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
