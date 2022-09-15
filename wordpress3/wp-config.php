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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'Xt2V%83,sFC!{j!Mad<maw6*,{G~BmKq!,X6NVJohIx`3iT$LxE!#l)]5_Y~OE;q' );
define( 'SECURE_AUTH_KEY',  'xX=C>A%M|<lTH0#s,xdmb295q:6LR@b2r:SuH>m~,3,}pb%[vQ>[nb*m)Y0.@dMv' );
define( 'LOGGED_IN_KEY',    'hF:r]e?Fj3xacog~gCi+.2DuC`QA4bniNu,BB8<TZC<rUeM.93FY1Q-~eq#ozW`@' );
define( 'NONCE_KEY',        'wq`a-r.}M)/A%Etifpc$[<-.C-;E}MmF,t!Ciz})/FQ&>.on)}#ZxhZr9!wwHsv4' );
define( 'AUTH_SALT',        '0#]Re~,y?`Q_HHSq5Fr[u|B+[<^oYS2MOVOobo/~#qdlqd4`HjwMe-p(lvc x[G0' );
define( 'SECURE_AUTH_SALT', 'OZ,5Pyr{j_z,;LDA{j vcZwb@?FqpyK](TIU70V#G#S1Zg4_hu<<h]qro3 >|4gN' );
define( 'LOGGED_IN_SALT',   'X}b,{i@(JzGaC)O_ls<>:p[xItkX$QV-Og;EG}F_g]4,.YU}<lvpbh9y}z?=(S}s' );
define( 'NONCE_SALT',       'e;cDmW=igBPLC:py4cL7+GG?3v>/8{G/#nFI|,{QE~Ul):uOtsm$`-x2sx?dPS|`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
