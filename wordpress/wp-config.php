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
define('DB_NAME', 'dickinsons');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2@>.Vo+YW!1]:Mcn#6y2]b?t;F<ejzhHx}3o.Z&O=1P{2?tHkcEKr^l<g@BI3~D,');
define('SECURE_AUTH_KEY',  'lcN=2r;nEDE~3-DTgyd/6L&>3#n|.^o}JiC,;E<X0(KV2pBXx~`LoB/63Y~$,pKU');
define('LOGGED_IN_KEY',    'CAU@`iiGlqOEHK{|0!Mu5A=plb6e` y1h[~E7Vq3im9A16e>/C~`d,PD-K^;@dU>');
define('NONCE_KEY',        '$u1f90/x<),`0dCSH0i:Yf#Xw,[>/p::izrd`SpO2dmwk%0&ekK:]ne$[b^ 5QXl');
define('AUTH_SALT',        'H57hjC7CM4lXBL4<!s40uSHR$q_BmMtT,;}5GIJ8Gow||]Zx4ny/^C&6EajzLwj ');
define('SECURE_AUTH_SALT', 'ro+:QtxCVNi:G0.Z_D3@%?/IacU.^kTq<qN)3L,0Fcybq?n.z^tAQ0b5]Vhz:a%i');
define('LOGGED_IN_SALT',   '[O{#6;6=T;c1Q!dxUEMq#M>*2+SuGUw>=8B#]]C<Y@.i.CJhCpjO9^@nP[~-hZ,4');
define('NONCE_SALT',       '+`d~9N9gn,VFp^uHX8fA[6N>W8S+T>b.+:a!sqb>|>$Mh?}.c}:I/N<241Z*]*6q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dks_';

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
