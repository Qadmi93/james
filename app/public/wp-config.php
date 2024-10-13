<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'FbQO]nJY`#Vv1@1(&Xud;OZTkn.^+tzKp4(Io9_`8#$QXR/Ch=4yf!fg5{Q8WFKq' );
define( 'SECURE_AUTH_KEY',   'E7ZaRe2;tUtM2. sHXj;-T9^s2gBDL.7K^gDJ_;?V!F9!r X_?9|n@A;^C/gCjg ' );
define( 'LOGGED_IN_KEY',     'iG%Bd{2MRP9sighcB>&P<1=h]{~-%ajSqv}R;^,#z6)n,,|5za~=i*/_]UD0.0v,' );
define( 'NONCE_KEY',         'D9DG/zB?_Kd54z|an{/BY*LgHc|j=WSb&/zXo2<yX_[@dKYJbMUsI4,7DD`-9<k+' );
define( 'AUTH_SALT',         '~*6=zW+AYt1~:1 KrX=YW_D :pT!}+*:*5T4+DE{K1}WwzleD3VJ{taZ*.w-}%i]' );
define( 'SECURE_AUTH_SALT',  '9)sM<.v(]G3o+MV<^g$h%Z{gRe]kj~lk,8)x|K3Z+V%~GO+DuFAx73&4p%X=E9lj' );
define( 'LOGGED_IN_SALT',    '>`]B7#6{m3R2VY}Bj6 ;*rws]KsFUW,BLd}d{KOdZ}P&Gm9=wAB0F9{PLeKzHBQ:' );
define( 'NONCE_SALT',        'h3Y#~Ri?C*^RlU(q8^@gUAtyz{PIQ7d*z/X(1+.g`x?#fc&kPJ9j-7lk1(--;)P-' );
define( 'WP_CACHE_KEY_SALT', '&1;u3 %W]j@Z.x4QXvENNfT+%)p,tD.ghzw8(vSqsfK6Wk*Rwf$^%[.MSaSpycPw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
