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
define('DB_NAME', 'woubrugge_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'koffieB!K!!');

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
define('AUTH_KEY',         '?[zqU9L9:tTm6^8dZ$8{,#fWJydh1INp*(5GKr=ss,CRs=.(5MEJ+f?i&aPWJZb7');
define('SECURE_AUTH_KEY',  'W9zUA~Nia-f&g,nqKb)_{%S?oA-;@Py]r4:+PnLs$:P[;E!ME>JiekA)X;~+@Bop');
define('LOGGED_IN_KEY',    'GG.UVW~*f2Ei:-UfZB{q`@-r7!J:K=0vut;StxVneyhvvU0XUhOJxu/LTr@jX#]m');
define('NONCE_KEY',        '3?pwJB`BaOm U%mV=29[B@O(+Eb/CY1rD=ObB-MHUhDAcF3hOu?jEBfw2iihJfV<');
define('AUTH_SALT',        'BB)ZUO]:~BNiGFsuhXe9vv`7kq,L26Wtk5`WLszjRwA]>-lNWEprVWr~6qtKD= y');
define('SECURE_AUTH_SALT', 'Cs]z.dLtY;Rm#U`.AMDr2Ry^*RO^-p2Qvs5<}HwqzQv/Il@U=npi#/7!PN)bVCiI');
define('LOGGED_IN_SALT',   '0;T,UFkr5osjF)stWu|#DdK%)q,*$Dc4S`pG8#tB3.VS3BuoJBoLPn-#k>D;<veR');
define('NONCE_SALT',       'Re/A}hV@/HJ/-2;JsPgR%V%VN);#zB=9t4;N9?N>q``dTl/MhCir5nTh5p0O3=0|');

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
