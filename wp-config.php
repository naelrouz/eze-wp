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
define('DB_NAME', 'eze-wp');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'bt@s-EK,oM[m16>+%!fc3`(!5)q80,M]KhMO-[kP#=;ts` g~49et(F^_8-.<x7P');
define('SECURE_AUTH_KEY',  'k^+RE<<h,x@$mEAZ=NAUtE&KbL{X[DfonjzPTlL4%-t wTu;])]@2Da+&|y$Hj7F');
define('LOGGED_IN_KEY',    'b.d@06g,.J`}K66|]h-~>1?8P+R)7$1:2V@hFzZl/-L%- G<sjv~w0d||^UXYfD/');
define('NONCE_KEY',        '(mPe_wFc`zOv3=LF{!,Mk,$k+kcP)D 3?K7oW#Y) }|$<@D-{zic%puRCMW89 YA');
define('AUTH_SALT',        '$b}uGSUJk4$(B6%z.gf(MBk =|hkd0|iZg##kNzkk:ee-ZX|`<{UHg XSXC5jjr=');
define('SECURE_AUTH_SALT', '.]MI#gYKY>/!7?kdkc#$y@.9oW&1)ow@L@|ztoLlli}anY|FUYPn!wlLYJc<iGXQ');
define('LOGGED_IN_SALT',   'OAuV(bu-)YE5b|J0{EztM+#ID&Oqlg<Brx0o:M.@g4|~&<%}6ty)3<A.H]SA<6sn');
define('NONCE_SALT',       '(i4Cd!T~St5K]~Y@}w-+Dbrh@kPBLrihJuoAQIayYD*.TYcHVHla3&tgd^:a!b?7');

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
