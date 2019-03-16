<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

# Change only if you experience an issue: http://php.net/manual/en/function.setlocale.php
setlocale(LC_ALL, "C");

# disable for production
define('WP_DEBUG', true);

# make DB changes for your environment
$table_prefix = 'wp_';
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '654123');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

# to get fresh keys: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY', 'Inm.L/Y%X%ppO#vU8RZuxP|;X,B:.#eakkf8!;E  Y(Tg^-(U$&i|TXgxfJ7[0[|');
define('SECURE_AUTH_KEY', ')U%ul#F9Z3rbuActly-o<y<_I`luf9QrilJS/F#G![^(eEU%foo[=r8_Re_/&4Fa');
define('LOGGED_IN_KEY', 'MT_t~#G<!Zb~adg%2+7%g%UW)HhmCM30&|suk7&|J5aXHu&~T.DA{b:^jn&;5m>n');
define('NONCE_KEY', '^vkx(_!elBo>e+!K#@7N8_ynY]%}8^`Q&^R3m)b=0sVHR1@rl$*e$2B@Mp6*#G-R');
define('AUTH_SALT', '2~LYpJ-k<!g#)L#wAqSE#xY`J}dQ%Pj~7a.RXc|rZ9(Vv( UCiv.6NV3z,Ltd+%@');
define('SECURE_AUTH_SALT', '*MNL-@4X=n`cuMk`QXdqj|%*t~POEz}]^CS(!%oIQFG`$kzY_1B%y]r>r=2H}Ffs');
define('LOGGED_IN_SALT', ',S9zD[hzW-y/f~#aX$1P-;`b2O_n=>[x!f3$M&lMal8v-LlsUJf%L4 UtoJ,`i;W');
define('NONCE_SALT', '#xc+DyO`32W>1*$UpB%`^3|i,&~(,:]%|-9yn7aJ UzR,aovoOBR4+(fK J-z--I');

# some common setups, make changes if needed
define('AUTOSAVE_INTERVAL', '300');
define('WP_POST_REVISIONS', 3);
define('DISALLOW_FILE_EDIT', true);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '1024M');
define('COMPRESS_CSS', false);
define('COMPRESS_SCRIPTS', false);
define('CONCATENATE_SCRIPTS', false);

# don't make any change below
$dir = dirname(__FILE__);
define('CURRENT_SITE_DOMAIN', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']);
define('WP_CONTENT_DIR', $dir.'/app');
define('WP_CONTENT_URL', CURRENT_SITE_DOMAIN.'/app');

define('ABSPATH', $dir . '/wordpress');
require_once(ABSPATH . 'wp-settings.php');
