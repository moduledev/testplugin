<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'plugin_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4EFFB-tDAmM#2p*s,7$iqNbONaL2dp7{OD[p&M}8J`&jyyK`Cm%4]^KX?]mdsR>@' );
define( 'SECURE_AUTH_KEY',  'vkcqvE(4WCw8%_r/6`YD=$.&HEtNXTOMhgjz0Mv~SG?e]I*@aI3)n`9ayp5dKrM3' );
define( 'LOGGED_IN_KEY',    ':*g]e}2B{,t4$?*/_8p/jEeyzD1L59#O}(3`i2K:(q/Pf XA)?s%dJdKdwwB)LT)' );
define( 'NONCE_KEY',        '`PdNh=5<f.@6Yp!H6eq%K1/QjsEul~0xYkvPX0VuR|3.gKP$%z=xm;|a)P3>]w:*' );
define( 'AUTH_SALT',        '-&$a01umNb]my6qRfV0G.HP!v#kX!$V*K}ttvMrHCrpFE*|!,eI.nRFYqtxW,o@-' );
define( 'SECURE_AUTH_SALT', 'T7LW?jYD8atCq:a]WM,]]w%vY8o)&M;tC&, oNEI<6cN3/Aq.p@.z<CAE^#gZ7W`' );
define( 'LOGGED_IN_SALT',   'Iw7/4c@EOY%QycqBP[q,D/w`>b@=!$WEe[+`Sw;Z[_71utd4*M=2.{gkeN#sj^sE' );
define( 'NONCE_SALT',       '9@%N?S<[qLJYk(i$[s~PEXQ_q1fvWwm313l?@u+5rJ#-Q?Td[oB>bJz|$]WD7FDi' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
