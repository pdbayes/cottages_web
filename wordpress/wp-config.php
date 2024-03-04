<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tregrill_wo2244');

/** MySQL database username */
define('DB_USER', 'tregrill_wo2244');

/** MySQL database password */
define('DB_PASSWORD', 'g10A4vniXqiD');

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
define('AUTH_KEY', '^xJ*Lj)(RaG[hUavTr*-pZ|H[v(hJ_E=BLPt*&&v?rGiN;HiFUJbki{fkj]ng*U+dUa@h^_WypwGS${*=t{ikatOHiizbg!ksAyU!o{!J@Yl%DrnZD&tHl<Zz)bd<(o)');
define('SECURE_AUTH_KEY', 'NRGB-S;V!-wt;?cWn%}pDBbS_EX/@+s@%p=hhKGxeqhSPSyVLTeuv|yABW<wHlf>c{)L!Q>rI||b;*AMkiwkVOqeLhjYMk)dMQtge^]z?UWZsL=yc%xO=gIn@M^^U%Yr');
define('LOGGED_IN_KEY', 'zemCPw*ZIDn({c=U){XVsKzfwB!g{CK;RU;)<AX+<D^*CBg@?p*%&foKNj%}/pU^?^?l^IV&;JXxIV|lHjJwJPmlIOjwsPTpv*VENGb?GRSGTbkh]BXeFKFp&Zx}aDl]');
define('NONCE_KEY', ']VH-wYfPfV{t;tadXOM;Mh!{(V*N[NBIrijkC&vg)iohIh%P}^WOIhLiyN*XsoL/<>pc$FME_f?w=-?]RxNn^BzSE<mEsSE&oGdH}hNs}?jOik?/s*GXo=CDn%Y=Oq[u');
define('AUTH_SALT', 'YozWg(]haV<NbEXhj-*{qDTi{wW%b{|uo|nPX_ic=p]xO_uZ<vvbn*Bb?*eP;c+&mhqQiu-V|)RdiKygLVI<O)u/@VTYaX|K?A$G<(noe{}}(kGT;A>MUb(hc}MczT/Q');
define('SECURE_AUTH_SALT', 'b()Bi!DJf_YEEZYu*t@tY%jR+;^&eC+D-(b>lBnkBxGb{XmB-;|/@bBtxoJaE]z/<iquQXh_-dXLgM^p%y|Cq-mVSf)}d_%V>ajkAg+<I@n]Ivu+(D(hv^?!=l[Irm&*');
define('LOGGED_IN_SALT', 'zscrOmQ]=zJ@WyK+RI@OF+^-oW[=]inZyq|lj!pvM^sH-&*]{/DuB?tP{SWMWF<%XD&/GDh+Q>Swhcp@STVlexnV&et_<zdOpW@*XD;SNEqIc$A%|Ac>;&!&A/@MYV;X');
define('NONCE_SALT', 'qa]*odG&L]aLqGNXq/>UatGPpPRyn{KGl@lI!GoSVyJU[M(P%aVHvqeHWdO|vVKG))sRL@cLtAd]iA/brT=H|qoz-WxES}(-pyv_aqR(/kbOUTn}z}!saVU?|FTQ=evq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_alxj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
