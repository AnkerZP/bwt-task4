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
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '1EkA[,cs,cl,[nJT5^c3L54PF5WX!&E)G}U:Bm%jR1a#etbSKs-EHji-}YS3&>*Y');
define('SECURE_AUTH_KEY',  'P2qAyPS+8V=6Z}xlw$ZZUr2,lzWlNl(si9C@8n^pLi%^su 3C`K`j!}p3$3JVwJB');
define('LOGGED_IN_KEY',    '.!X*t(*#d]Jk=I,uJ dm9+LwNZ<@1Pk~w!82mwDii=^dz02Ht>kq%zE-le[VbA$=');
define('NONCE_KEY',        '91UYb_D%=ao)VF}4UE,(FD ~d}2&z)6`8VxL`#,nKktj8AU8Iu[|v3{/%h=PD}Ls');
define('AUTH_SALT',        'QgssCz~/l}|LfM;@>$g(m_PWtJa4hiq#<r@}i?#;b!r$l03iL7>m=1!0aA(3+(RT');
define('SECURE_AUTH_SALT', 'VT7U5w%-IK*=?01#Fc[i``2V{s&UlJ(HWU:^L7FXoL&x}*e=VfK&T*vM=)132M-I');
define('LOGGED_IN_SALT',   '+Ck ik75XIz<CxMU?|3i*u:f+bwmJ9D[IzS4NO&R Bn7|z!oEmAJ`?T5$!Y6EiI1');
define('NONCE_SALT',       'Tg,+|`oj_<]!XP{T<$UsQZ?-}p81?2#>GX=jS>xOr Ss>SBSAN+]Z2]53jh syE4');

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
