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
define('AUTH_KEY',         're1BZXwkNbd5afgKiT6yyl8HWxMPYIAQGCzMfJENjyyHiqDQzebMq+bIIo1lQ/xwfOavOmhvKzoLVBSwuoSSIQ==');
define('SECURE_AUTH_KEY',  'sPWeeINer9f58BO12pBaW7Ear2D8ar42yv+xqrWAqy1t+M6Owo8VBIkAn1ieajG5G0OrkZypRI1GhcxObhTGJA==');
define('LOGGED_IN_KEY',    '8Lo8OhcDMu+78QiRZYx78r0lO8jIhCynOJPzS1NikbikDcns1rjRrjdHAszp2a9LQJ+4C3JkCTHSbMt7Ecduzw==');
define('NONCE_KEY',        'uqgauptw2SLHsRdlcHJrCRRlhbYhooZFmYNbwhRZ5PIfvb76P+06Cr79p/SYJypEGOEQ43++VrHbk8nmy/RaTA==');
define('AUTH_SALT',        'StPZF3kQYxNO/OgYfcIwhap5//KtZF0G4wwbbW4p8rkXfBq8RYxjgzNFVe6VmTPeIQM2nktIZNsyQgwL9mJRhQ==');
define('SECURE_AUTH_SALT', 'ctd7QuI0Lp23VLG/TQzL+MYCxQJGT+rUN1uI4vtimiG7WC38cEULp5Fzj30mxrQchWCTowEsZ25cw673RPpptg==');
define('LOGGED_IN_SALT',   'ptxVqVzDecwvMwY7M4Va6oQZOhSar5ru0peVun3OXhShIk6sRf3K4lW7lb4WLXfiy0lkx2LaQLOnYqPSq75dNw==');
define('NONCE_SALT',       '1VWuYdAeCA0mUEAKtxuR4F0kBSza1cpSSjRJ2eAiV+4jdS4YCxodWM4U72CWFt8HIm9RRdRpiYzGLLhJTsXMXQ==');

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
