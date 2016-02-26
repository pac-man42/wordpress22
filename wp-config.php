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
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<{6|v>;qOn=PCVdA(_ N}6pFH7/#J[4<}@ow)nE6V+bqD25Wq-TL7cR$AX)S,l?x');
define('SECURE_AUTH_KEY',  'B7hx8;zq]pM5iV-uWP&,B~uSY73j1U_Z985y~-m>O3_N]sJ7xs)-IQdfb2-MTmR#');
define('LOGGED_IN_KEY',    'Odl<kp!t!5=r&g#vC[X-7#1~*e|:kS-&e%ksnO1?Q|F[/+{2o+bx$-74`guERHQJ');
define('NONCE_KEY',        'u9Z)i3K5hwl[N|a:B-pY51/-+~Bu>tR23_n(+A/t3cv{O+h,L8$*/K{-Y%B+/+F-');
define('AUTH_SALT',        'zoYB:dO4}]ywPrB&LSsB5*c2B8*nS9ifmj6Wg0htHjds.q_s.04s5}bv(;$PhWN%');
define('SECURE_AUTH_SALT', 'Cp-3R-|Sqa1>fvI%,=SC2@9UR2`MoNkojj_u3RY8-dzos&,x2h|x=|O>ed%$S$qc');
define('LOGGED_IN_SALT',   '4@A!n0Hg9[VdCW}kW%r*!T-`GJclT1/h3T)K~(+!82X8O-dq;c+Rp_#b9<<>X#w}');
define('NONCE_SALT',       'EaI&|4Zrzhuu-Jkd@)H=dm|!~[a,~n3fn.EI+}Kgxz|ZP_`z|aAo|NY+]Hn+HOEm');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
