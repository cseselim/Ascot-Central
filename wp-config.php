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
define( 'DB_NAME', 'demo-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!aV6KFqma>kdu-Hkx_A.EpOleWD]L~eX.Rv+dn/P6(;N^BjXd,)M20b~;jr}>j<u' );
define( 'SECURE_AUTH_KEY',  'B,V3H{/yl7V._j4CXhTs0cfZ[(f*[lyl;qA#it_WO,g8(I701L%]N5^H.5mzh6&n' );
define( 'LOGGED_IN_KEY',    '}~%.4k#uR-5RZ_Kgv/@r6:dd5/ Ce?DrS%_VS2cQJ3N`8](WUV@f~oc83r![NpP7' );
define( 'NONCE_KEY',        '*527M[Q!TVVHY7h#iHgkI5/yoK#J^jz7waGoSOg#+CYpgiv:KrN[=5,SiJcHIz%x' );
define( 'AUTH_SALT',        'D:+4`3?#4A1l}BiLuV7!9[MGh~3rF8kAD<cJFth&E!E$1n>%=<*$/>MCZ`7)6;A4' );
define( 'SECURE_AUTH_SALT', 'c[kcqSK$,{&k04HbHx<@^3Q-;6bnMDxICok>5`^:h(&A+2e?Sx;rj:($3T]/uQa?' );
define( 'LOGGED_IN_SALT',   'VBh^ZNcSP8+-*C3R0O%Q0?cljJ9f*!K90]LPb*#PN4$8eV`4qfM1q_L}6#+3VwTO' );
define( 'NONCE_SALT',       'Rl.o*dcLL]A|qPQq;<@;zZ8SfU)7U}<oWG>`9>?H`R/YP!f@[@>J_[Qc]I]t< @3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
