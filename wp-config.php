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
define( 'DB_NAME', 'rasha' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+]lecOCLkxr%)+|>4V?(2Yr-vA;BaV>)>VaHwyCia+iLwds<FZ8q{S]=406oU8* ' );
define( 'SECURE_AUTH_KEY',  '|X0b;1Akbbvt%/1U@O{P&+6oB7H}`-pfJV3s?&:zEVX/jGVLF_C1jDzD=MDF -RG' );
define( 'LOGGED_IN_KEY',    '~c&1L&6NXNlO_NDq{nXR[Ra<f:u@y>dF?rz*hp`vSGo)TNZR06?dOX2ztS[pd%8b' );
define( 'NONCE_KEY',        '>(V}+>QE}2Vs>g |j9#xq5!6<zATxJg~~L`+M];i(*)An/Lw!o(J8ZMu`fN512Wc' );
define( 'AUTH_SALT',        'fZWxzu?(t8<.x3:v ~I4,8ZMp]MOS;tgRSOQ w$$3~80_*5BC8wa+k72)Hv>Zbsg' );
define( 'SECURE_AUTH_SALT', '/!>3aZh^t#Y}Wpfm=fT?6uXf}+iWE.!.d]?zG:]t+H{hEFVCCXZ;2~,Dc{,+YfW2' );
define( 'LOGGED_IN_SALT',   'k1kah|/P e.6;,bccl*:V.3OyU+@Y:hB8FR fcrh4`=K`%Zq?<Wi8[W] 8N2uC9B' );
define( 'NONCE_SALT',       '(Z(/M~HHM7<4ZOcK:{5DW_jB}gskj Z4MTg$wkm+pBrS[eSd`,vgQ?}J1RocV0_o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
