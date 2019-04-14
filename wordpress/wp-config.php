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
define( 'DB_NAME', 'fokaGrow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZxYL^,+bAw2~OG<$FhM?9bgnHh5#x_bUuGy9>WW`6*u[zeC1#}%:$;]Qtq#s*0%*' );
define( 'SECURE_AUTH_KEY',  'n3;v,aWjjF$4xCrfNaQ?5X4sPwO^r^UpKg&Qlkw4s2T[4v3qyF$> mB<~2%:g!rR' );
define( 'LOGGED_IN_KEY',    'a8EUt(y~->*e)jBS|l[j5~rl`}|ihF;Wjs2.`I_1$4ej47E}al_^Gm06z(qTE:rD' );
define( 'NONCE_KEY',        'K%@VzU r>p]1VmH?%5$C2kj}4)dYV8_g5s^1}x&lfDFx=+s$xe;quFIXM!7rS_&`' );
define( 'AUTH_SALT',        'nZCU Y9<Um+Y|`u%GDVNy1Nyur_8DmyvD 3s1)EN7X`W>Py(Y(mk2,TXA{2Mf$(0' );
define( 'SECURE_AUTH_SALT', 'N}gggRG2%^b<bA3t}QNDx{cn; R$iE)+6ncAX=hc.GyJ_oJ_OaTndu6!]|1Sa<U.' );
define( 'LOGGED_IN_SALT',   '+7osw&>s>cidvU//?IKcYvBn0:&N7A&&/I8X,)R>:rQTF2mjIpm  3fo&LYE58~=' );
define( 'NONCE_SALT',       '_2g<A/lM2KrzSyO1~t]X_:0$p~#((CG50F)K*,pNZ?doRT]5kwrW%Hucj06[ M3L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fg_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
