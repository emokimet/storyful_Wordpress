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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY',         '|*Mt6P|s7}Q_6%6@#b^]xAJj/7Jwg{D4Qu%G8TP7s0[7q[alGWU@0oEw20O3[p@;');
	define('SECURE_AUTH_KEY',  '3yUOiwV G>G-P<&Tcb~DU_Kr{EWFh lfs@k5{?4#&Y6<Fp1s](I./UlI&7.Q-OCo');
	define('LOGGED_IN_KEY',    '1FqR*p9|&nC=`W[nh-H^x*[NQ+ FRfxB{ @Vl|he?DDt}+*Pp|o,CZAATQ^]}_5c');
	define('NONCE_KEY',        'w4||xgPr75 !pbQ&;[kYJ-ZA%OdXf+H<P%q]iu1U[+W&;M?JP|MNs^5GrtO<6d,p');
	define('AUTH_SALT',        '@{qlS+PRxxblfWn-!C}>Y9H*3{`?BacWW(jysk|-srh8]*x.I1q|>Pi~(OxhL+4E');
	define('SECURE_AUTH_SALT', 'ay=(UBD+>P^WKSDGNBbbH4ZU-aNYoK,*<pjiJ9q BiqJbW$GbVFWvAjB!kn?z$|e');
	define('LOGGED_IN_SALT',   'mzpb|]3J,M6qRBH|MFrB,AZ[z|eqa&jWH|)Sem0_F*+qNK`ev2;J+-S-tqtY[^1$');
	define('NONCE_SALT',       ',Em+r< U_mlZ?pn|o;nXF*S+i_k#Qe{dGg+uMV*Me3L@0|)`*[DNL<o, L/;z$G-');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
