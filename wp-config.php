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
define('DB_NAME', 'xello_wp');

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
define('AUTH_KEY',         '#A4y7rZZ?~T$s?J!a~Oj691chmi#iCPZY,B2;8AjL^8Uwxg%m,XIW6qr&^4suqSs');
define('SECURE_AUTH_KEY',  'N58A-ov;Mvy/D+fmae;5>u.#buh7[waj:s;n!el#/(huFG :TaPmVN[5P0y38Y&B');
define('LOGGED_IN_KEY',    '(T;Pf$cg.BmZ[UE*rRR{D$Cp<4Z{?M_vbo8;.krufEU|8Oz+5b+:&-4g{+X*^i$q');
define('NONCE_KEY',        'T5}s?}8s3|W`)v8lE([5:Gf_DAa0DLLdqK{wfmQCz?Q2nRAP*RM?)l7ZXtQ8}H<2');
define('AUTH_SALT',        'GSZYs8LZx-sophcL||%$Q^i+SmQ<DN}49fU-A9?O8=iJK#{O4wja%&+tU=DMlUkx');
define('SECURE_AUTH_SALT', '4wU __<!@w;,+f%}*7`I-h,#jK#bIE[HZd/E K+X}F/{{sB6z+nEXI}xkukMRcZC');
define('LOGGED_IN_SALT',   ':T]DL,MJ@2!EaIIj4;:t-257[0yOd[cwCm2mR0B1;WG!xgOJPc;,OifCbe[DT>x2');
define('NONCE_SALT',       'c&e~A7A>pB)#`gCyxUb{b;rz,`~Ae2w+smr^5)69pykSWJ+E$Nr#jM^[>d5x_Fd<');

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
