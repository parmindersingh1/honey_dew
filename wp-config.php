<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'honeydew');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r`[c@k[A.<x4GdMmn}u1v>RP$SPG+@X0k$o9Kmojq`n*o7Z09j}nP>tcp%:{x9,t');
define('SECURE_AUTH_KEY',  'Gnf#o/[G Xx74Q_6}^&A*,~$N> BxTw9YzRjuF*u+cxOOt`?-*R2^l_t+-.g]0|:');
define('LOGGED_IN_KEY',    '>2oNz6@lE]);wN_-}La-B?`I^h1_7b5unTf?6f:7B2 f)- y>#hdGdVxp,_+``KH');
define('NONCE_KEY',        'A.G nTgib1RK$`8v{3@iV={c;3n`tW^^n{,~B/iIzAnIT9<C&Z$HL}$SuO<pdO$J');
define('AUTH_SALT',        'w5T&<j?1; s%R9FQ7jaic*d,!bt[l%pq8=_/^(|+|77~YhZf}vyE&)uT-k6VpH!j');
define('SECURE_AUTH_SALT', '3}9@D(G!8P>h>ZBbYtNcp:}/W3PSu8|)=H5-DX?tv9{RQxw`tGet2/:+|m<TWiYB');
define('LOGGED_IN_SALT',   'u{1[V[>Jtu;bp~?m*6gmlDR4P`>v`<E*UScEub?9E@ m,ujVmu1n3wHMWu$eUKuJ');
define('NONCE_SALT',       'Sg#$;%:;z>V#4iSd80D3p H2=^<+iyFWnJyu4As,ovQE.>}#+<-9#D{UUa/OD|S)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
