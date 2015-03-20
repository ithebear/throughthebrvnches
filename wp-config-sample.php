<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         '/0LqJCZlJk|s}b|eQ2/MxACeu_SsZ1~+y l/.ZGSW9-!^-b1=J+OdT/.eUQmT-Lw');
define('SECURE_AUTH_KEY',  'eoA.aG?iNL$qTN;|+K50%wh+|p-1M=U9MbiPf|6aHCq7D=-nQE}ct WSK!5s@e%e');
define('LOGGED_IN_KEY',    'Z4{F#Us-9A|y1s Y)**Si#8|b5Dm!wLR%Nj:Ha+-A|9Q%FO+r]5RQ<+xhS;f~X/r');
define('NONCE_KEY',        '^Z@A_%1~d/Do ^xoi`Qh`<:=|0d8|97(b !|b>L,59}FB|la@1+o=OI5KU}=h ?R');
define('AUTH_SALT',        'hc$IA|-C?fT@?QQQ2[4_V^M.2>/@G~uACikk?X,6d[Ix{TqkV03]|gvwh+do<YZ9');
define('SECURE_AUTH_SALT', 'w|Snh}_K|)umkC/-zVO}P0,/64J AiI7`zl+8]g0=3@id>Pm^6Up-wmI{H,dcg~{');
define('LOGGED_IN_SALT',   '~K_-4&Y%xs%cPW=iowd|DM2E&.kEbaC;`upkB*uA%IJ6/8t%HnEfgZIx3AqbWDy(');
define('NONCE_SALT',       'GB%si!GI~js||x($5*ApdU+u??WItgz~^&mT0oUyRo3D*TfnZnbo|?c|%f+A;0t$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ec_';

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
