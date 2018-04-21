<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch diese Datei nach "wp-config.php" kopieren, alle fehlenden Werte
 * ergänzen und die Installation anschließend starten.
 *
 * @package WordPress
 */

// ** MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. ** //
/** Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'bem_wp');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'wordpress');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'xCdjVVauLi4Powtg');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', '');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');
define('WP_HOME', 'http://127.0.0.1/bem'); 
define('WP_SITEURL', 'http://127.0.0.1/bem');

define( 'WP_MEMORY_LIMIT', '128M' );
define('WP_POST_REVISIONS', 3);
/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Brn|[jcvL%F]J/kw$A9&0$q{_sI/W!L:zt^nPXQ1&JT7*nE5uc`8FN1JYi4zmU,:');
define('SECURE_AUTH_KEY',  '?8@rf|$G0VV{v;xLA2hVia2O6P6c]x.DYD>A_n[eGNvcL0$[W?D-1nGqG<e,P<}H');
define('LOGGED_IN_KEY',    '>?/6Jy.w:Ul(SlP%Kv.]w}u}{u)c<vH3a:n0%7KX:.^au8r`L4k-}l<t5a~m,]y ');
define('NONCE_KEY',        '=~9~#|a&3o3Q!s$m-8s$Y.JahU^R!ft/0c-MuW4-k(|l5nv`zwoi}$di+lqH[ .N');
define('AUTH_SALT',        'H%EM B<T4sLoE1~C!uo5/N!|<R$:%F888%--nYvMY+oO+{d!F4ap(t}|kU;xDwG ');
define('SECURE_AUTH_SALT', '4m`9M[[)}Jo.w]DMk/@Hc.ziSQtivZ1|TBoU? !Mvfp[F<&Kuni6=Br .:.kKTX.');
define('LOGGED_IN_SALT',   'UMW8rS|{-0Afy{__C]<at;>,sAxw#+9f3Z5T_~z`*{F_oi}#?|V<+:/|.A-|;{TY');
define('NONCE_SALT',       ',_}500+`yL R1b>|s4ck#q4QL!wnR-z| ?d:uN{?g};pZ;{C0S1;0]>]idY=ie,&');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_bem_';

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
