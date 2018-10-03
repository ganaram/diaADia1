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
define('DB_NAME', 'metalGearStorylinedb');

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
define('AUTH_KEY',         '8+^(-7RVoUK Y#h@-f5>f|?r*~u@&`S9D]3XR!0fY1TQ+o@S+@yITeC6SxvNqQ70');
define('SECURE_AUTH_KEY',  '=}AXAM8lO_*s{[7 A/;X,&_NcqP|pMJbTdYZ^a1Tie-(_IDkhMm#k-0%xjGc6wH4');
define('LOGGED_IN_KEY',    'Rc`|y79@F7}]wB*333K:,C9.m<kwQpx_M_+gtSQ@Dix<l#s37Senl~>8k~p}T:?P');
define('NONCE_KEY',        '|[|5%-IshJ`k-+#_MtAGLb0[|:#PC~k32>:nV.]Cy~ 20O{8.0+0jo)kJWH_j*2I');
define('AUTH_SALT',        ']pgqJtl07:G [)X]*a$qIze?@hOS[?<Vm2FT`y2D4%}M|hJePVIjJ<veN}m=j)ea');
define('SECURE_AUTH_SALT', 'ouU<!)]*5Cy)z(8L|kHX<|^`-_avW!<7-QU0u+@]tf9!p<C*mcx}UQ*=T/PRtd*3');
define('LOGGED_IN_SALT',   'iFX_?ZY!w*=|_a-Enkc[#C sC/E|d3HUCZQNe;MMivkHxW+hfYsNTE3W|(W0?._y');
define('NONCE_SALT',       'j->+:Q&$vKXaZvz0-o*qp+Y1|HpVz&RL~*147piEB2dB}jJm=N6XTv.eAc_L@ry{');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tY07r4_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
