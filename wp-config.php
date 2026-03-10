<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_40074322_wp634' );

/** Database username */
define( 'DB_USER', '40074322_2' );

/** Database password */
define( 'DB_PASSWORD', 'S4lHpu8]7(' );

/** Database hostname */
define( 'DB_HOST', 'sql211.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wieenjvoz1j7hfj1s1nvwbimcwdcj9di1bbdj7jvvu5yndppstbhv1imutkulcud' );
define( 'SECURE_AUTH_KEY',  'vej2rzwo8drvmwwcadrdj57pshuelyh26gvzxdxwzefwcmpkk0otjxuwczorjgg3' );
define( 'LOGGED_IN_KEY',    'gcpsucqbitel0xca99b4tk4upmsfxfnmg3ci3rpanisrbhujym2oieopfoeijvz6' );
define( 'NONCE_KEY',        '5jjdhf7mxtuxynrrs9oj9zxsqiwbowlcbyx42cnvslvrnurjyqvzkvwsflnkozw0' );
define( 'AUTH_SALT',        'td8k9o2adytydvimow3qzw3xzxiw1lrsj1qnyzf0j8huwjjhbbakulljc352kkia' );
define( 'SECURE_AUTH_SALT', 'bscvp3fzsznkq9vshdtds8hyiahyo3txx1mioujfr49n7ken9pffva8qktze8qfe' );
define( 'LOGGED_IN_SALT',   'nuhlumfgpgqzk9hprm5eom8gx8nvgxwnn835icpek9a5lup8ssayvmpauamsmhap' );
define( 'NONCE_SALT',       'pulkwq2nvsaizctkw0bq7evnquhlqag0a8nwlaeyipy89zwkzzxnssc3fqw2mcyr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpr0_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
