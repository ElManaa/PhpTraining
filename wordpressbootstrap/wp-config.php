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
define('DB_NAME', 'wp_bt');

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
define('AUTH_KEY',         'F0D~xHjTL2JIm9,Fqcr2 AxT8`g8&+{+Yy~iZf-{N_HiZ6sol>V~Fhtd{Yc4@V@d');
define('SECURE_AUTH_KEY',  '4]QMI6nNh(.@U=jn=};npfssrzJn%t]%03LCY`$(eXv6*)S9fLOJn16[%tQw].Yx');
define('LOGGED_IN_KEY',    'C3v.r_<v6#0B#PI1RXA,5:YZ<<=78[ZHrwD1J=@[pf>?$a`0Mq?L3+2lx4-EqpHT');
define('NONCE_KEY',        '<B_h,Uq(z^`$s3kN f4nteAT}P(I/^w1 o:O&#i*5B=n*<1R#v]Fo&Y%$vinK.l#');
define('AUTH_SALT',        '9VnCKxjie6?6vbkK~fE(Xoc|/(&7d9qrK>m LV<OH[0CRl+)}4HB.=78$8R L![?');
define('SECURE_AUTH_SALT', '?B;<(?43WZ@4q7I`_C^w=GK#+)wBpO1 *W5EvU@Q5-AfL?x=D7-e8dr4sU([xNK$');
define('LOGGED_IN_SALT',   'sq0 (nFl=HL~gIee4:(xUyHT&6c5QH|;/JPLV.,y.lox2g&vUjaey< <5XF#NzE}');
define('NONCE_SALT',       'DkhT?wc!S{z(R:jMV0EWy8j^!rBG.TuI{Aw}M:MN]]6#,4`3=+^UdZAAD2r{2AM$');

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
