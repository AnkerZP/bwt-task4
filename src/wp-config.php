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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H:-h4sj^M2qj%U9E|R#=6oft[W$&AO|ope n(|.O[Kb_/_;9`=*+smft||=}U8%w');
define('SECURE_AUTH_KEY',  '2H;Y1x<-HZizySlc)aaSTts3J*T dPC;k{sS5;&VGKo!34NRDh6=F(O(Xqma;2KK');
define('LOGGED_IN_KEY',    '[?a0Otx@]1f@SYk,alFS+g?,:%c@(Mt|iC#ad<O~yrlWN? Zq?qb0.2A-u/pAdb/');
define('NONCE_KEY',        't**(_mfB>_I1)thy@dYl^_e89IKB(<z88`1;VCHUiba!:c0<C{PD(VvA/hA7%eMs');
define('AUTH_SALT',        'S{u.M&jL1HA OEA<z:a#g6c>3TPxo6:hU7}03XYU#V,%QfWG5Zv4D<5=/{L84C7o');
define('SECURE_AUTH_SALT', 'Pt|Nop8JgWy^TdICm2SeE9w18iQr2|Ddn0Pa^zBmu]{*3#yKj EMuIG0uk%_aH=`');
define('LOGGED_IN_SALT',   '2?k3);Vfi2rg`/bfRS6Q{*9O0@s,hhl1):H$}>Wm ]=Y^Ysn0y;5gQA<oh070<J@');
define('NONCE_SALT',       '_s$h<Da2)1B2+UgJ)tSN/W7Fd3q`eHlzDDl<A]FFi-]6(EeA1H?c8[^$!hL^z#!T');

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
