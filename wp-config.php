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
define('DB_NAME', 'u324953620_aruba');

/** MySQL database username */
define('DB_USER', 'u324953620_yqavy');

/** MySQL database password */
define('DB_PASSWORD', 'uWyHepaXaD');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'SxvVjdJThnrFOLLgPHTWdXSpV1uFLRJcCNURp5Ee7XVSDIySsKaBpZrR3sXI61VJ');
define('SECURE_AUTH_KEY',  '21E2F9wB0G2iQPI3BLLWDtcmw5dj1h7aYQmgIQSF77NWKmVthObR5JPTtvcHTTbA');
define('LOGGED_IN_KEY',    'AL2tn4KmGK0qLQyQiLsOA8LfP578aWNBganPoaKPZmWXkZ94Ok9khgzLBle1KP3q');
define('NONCE_KEY',        '1veS9DZzgtV0WjRnxSR6w32hCX2GgHfiwq0dsOX6Vcq2TluqEsJGH4o7tru7z6EN');
define('AUTH_SALT',        'qDcpTmRLrwELiRQD7AFFYTXSG6sC612LCV5dEAiYeesyK6676PQY8q1qJcJBVAPq');
define('SECURE_AUTH_SALT', '8Z9EKwVCKb5vNYSXOYxgOMBwOIbJTHk7Fb9iMx1kUHunZgWFuaJAgc0x7jfrDhUA');
define('LOGGED_IN_SALT',   'WzP2ZJWl6hIUWB6lQDgrsqUo94CRxgY3dvX52g3jmxdU339eCubbFxropw3VPqLD');
define('NONCE_SALT',       'zIhlP1T7b6SnW9Di90xZQ12bZHjZ7Ybnv0cftr5b5o5Dpc7Qhudl7JvBxUwGzIRI');

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
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'q08v_';

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
