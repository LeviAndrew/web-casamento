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
define( 'DB_NAME', 'wedding_tl' );

/** MySQL database username */
define( 'DB_USER', 'wedding_tl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'matheus196@NT' );

/** MySQL hostname */
define( 'DB_HOST', 'wedding_tl.mysql.dbaas.com.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'b_9+ @2p&e|.A;s8N)(;lyM_J7:%])k=($~IF5aFx;ON{hp1l)oQ#{Wf?Qv!MGap' );
define( 'SECURE_AUTH_KEY',   'k1p=8n-JRTA`zKZJ,O/.R22;#UM]Lg>-YNlM/MGyFfdLd{?`y&C=DIN[reEj06R.' );
define( 'LOGGED_IN_KEY',     '8.OIeNElTqRY<U&;GLdtu6bU=BzoFPgEeIY6j1^4Y&Ar(v7nN`5ZQx) Onqx+y4N' );
define( 'NONCE_KEY',         'A[j*cYh7}[doqnjggge_[23!`,1^?OyH`Hbd5Y|%MVOs)rsWS^~u6aPTk3(rfkf,' );
define( 'AUTH_SALT',         ',KK`*`L,zd9}F+/nczu3U7=Ajp4(*^B<&WkR*~#%zL1P&cROhwt>W2eb3G8P9Yx^' );
define( 'SECURE_AUTH_SALT',  'KZdQ5-w!?X:nKf%GPx[tq,H2~/T2K? p<snRZ1G/Xck3U<zC=Ah9!m1W|+@=ps4?' );
define( 'LOGGED_IN_SALT',    '`wh;9d)z5_qkrrb:v2r~y5~D>wooc&P]%b!+bg*vLXHx;30`k?&J6}wdcyA%toTX' );
define( 'NONCE_SALT',        '$0uSYZ.m~C[jeEMM)J=OjP8d}=E6#gt#Aj.QW3el*yDf1s4x~8wjkv`kU^K@$l:u' );
define( 'WP_CACHE_KEY_SALT', 'hr<NP49)[`pY0d[pokXS)oJ/^+SJV4`ZJJ8EawMEW]h%n=$gz,G$/?ig]<7=*%]~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
