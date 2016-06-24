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
define('DB_NAME', 'wp-cemsys');

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
define('AUTH_KEY',         'gYCTuc;M`I0Jm*rxdqQ,GHS3i_6R}|CZh$ka~hAVzvp-QvZ4j>v[a2mNs#/.?|&$');
define('SECURE_AUTH_KEY',  '4f$_8!Sy+I/];=w<~$s<C}yUp},rO!V/.4vR}d+-iv9}gboL%1%Bewf=g/;o0>J)');
define('LOGGED_IN_KEY',    'Jgm%Tm4xnk]o$Reqm{Z1;QA*M6%,yj/+yd+,]k4X2>jIXeAU/.o,`B9hgTeg(|P+');
define('NONCE_KEY',        '5#gG)PK1r!;6#{UNx&ZS&%6ha!!](lY<-=&>6BaHfa3`7+9+)DnYzKKbDiv@J8gn');
define('AUTH_SALT',        'Kuwa4VgR8D!C6Y_]`,i/2xVA_i+5nnd()>9=z-^B;Z5 )n&*um1wR~[:~ESitva7');
define('SECURE_AUTH_SALT', 'YD(JN)_1qMfEcRv#Hdn?iz2lhLud0M^Qn=dBL4>wSNq5pc3Hm}VfP0S9@fYd~|6g');
define('LOGGED_IN_SALT',   'C(,Zf5hnL Uz`goT/;P=:Yx&;T8dOC8>+h-,kMK-)Nyu[94ZQ[b]hGjt,Wn?8YS<');
define('NONCE_SALT',       'F@eK#.|upLT{wC9a0=.K1v-6> 6-D&:2nAPc%|S:v~WWJ;&-vXev+x,52mYUvP|2');

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
