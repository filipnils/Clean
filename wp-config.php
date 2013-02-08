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
define('DB_NAME', 'clean');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'x|rI^.$}D6$,O7{rlhV~Yr,%:Iiw@-QHDsij/kVQu(c^Fw=k&:)==P^VjE@I_vp:');
define('SECURE_AUTH_KEY',  'xa&AQr/*|;T~-yKkA$wR_,6Fw}$4m 8CwsS&^:L#mZu|-1>OiyNr@4#6-hK$!fR)');
define('LOGGED_IN_KEY',    '{(s/V@jr{AA>(j9c<H>nT2gD;eA=Q2opS5N6;gjFKv#r_F603,}DMeAO)~b-Mb`T');
define('NONCE_KEY',        'h^4l^G)u0Y-12n$TY?.OyXs}l:S[I36a=S-S$_ V]V2>yd00<oVkslklS-_Zclgy');
define('AUTH_SALT',        'Rlx?|_i7khhGy++ULXD{a0c a$r(hVgvcCdk|K^bwv LEdCo_GMcAo%(d9am?21$');
define('SECURE_AUTH_SALT', 'KWd0!&C-^C1%Z?cl?U^Xpu.?XA@@=zllD%no%oV-S`sJZ2FMB_VjRB$5-.?B+55&');
define('LOGGED_IN_SALT',   'cFY|2&](:*aLCH3s$`.D Fr.|[{bMuGn8+ V7:2~`%d5*IUEkV-pq/*Vy~jueM1Q');
define('NONCE_SALT',       ':5L$2GnP(Hd0p`*eG1%5pUUMhcoq{:m`5cZ5^oh|6D~z4(SboU$UHavj}@%YA]+m');

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
