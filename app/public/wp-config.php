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
define('AUTH_KEY',         '5z9AZ2L5hsdSmdtE4nah9uvLReJn2w2SH6Yr5Z1HEHIHESbANvhdY0cpEX3E8hWNIijl9kurJLGZueC3GSr3+w==');
define('SECURE_AUTH_KEY',  'tL8T9yC7Fh+r5APvHiuGYtChhVfA+7dmP7wLg8wAAZdkgCDUq9h43TCgmt+D5CWyyERQUCxGzS4sJ03ZcJbqZw==');
define('LOGGED_IN_KEY',    'TL9mkI/wVDHlWzVSUevdSSUjqt3oIHz/wN/TzpUo1DQSK3j/f8L0OylRawPhXsXeLNBKXGBkXHgM5yK5UD0Org==');
define('NONCE_KEY',        'tYkwGRRY1XkFqeP7WTKFFZyqD/vrROi07NK09eJCeKjTVAPbO0VuTUbrtr3aQIefFKkAnewVFFSwMDP0KSobdw==');
define('AUTH_SALT',        'di1knKlrgbcUNmg0EpI+2xx3G8KrLuAvkQlDATO+CL5mV8jhcSlpE3XwKi0MAMYWiaSasrENMJ+nwNAGbH0SuQ==');
define('SECURE_AUTH_SALT', 'A/vKA9onHTBYyC7zJYPbBIl7HdB4mJn5M4IzmcIrKzOuUd5byOZHSSm/DrMeafmK5mb4co8e6kIgopXnB82VoA==');
define('LOGGED_IN_SALT',   'adKW6PLkpD17wjZO21psCE0fgPDMbN9WY113IAUBcGU4EiwimJdPcM43jMg5NvyUzpJFP3sH2wA2ZHsmtw6ihA==');
define('NONCE_SALT',       'HDnbPg1ch0BSN28ek3SMj0Pnw9C4iztpR0kkaLcCNPDmBFhQHONELJmUZxEMMd9H0qxM8f9RLt0o8JvNZSkmTw==');
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