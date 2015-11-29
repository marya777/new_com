<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}|Uor4r4;OZJUvxAy!qh#._`n)A;K%8b:xAdIuA~n.wI3ll,RnvAU3FzF}Fe|=Oe');
define('SECURE_AUTH_KEY',  'e}:sc*c@m[=nK4<Ts#:KC=<b?$3^8k-Y(W{i#*0D5hPwIKlzw-JKXvQZW -Qoz7}');
define('LOGGED_IN_KEY',    '3u&<f/-cc]zaTssMQ#iaWrX{zV-g,VmQ,l2{C+S<a(X,OV$kK=shY_D0LHAThMK,');
define('NONCE_KEY',        'qy]b-_|fE*}hZ`y9Xpv,{B+-7R{ZCVgBBR4}ks:R:3IN07[62zNd`KL6;/aF9kh.');
define('AUTH_SALT',        '40?vU;3UyE_S-N%bU)q+xSo/Y{+6FH>%Ua[JpK6s-^p/hdBv4Kinv0:<rU$uAPjv');
define('SECURE_AUTH_SALT', '^krdM5;201iPnuB8tTcA72/b[x|39[4]oTz.{+Zhlde:oD|Ny) ]Zw4VM1t;NnY6');
define('LOGGED_IN_SALT',   'Esd)l s+[JhgX/`0l +2u}gqW04}ek{SS+@u$Hf`|Xc_9X4|S||KXhkXGjnQ!$N;');
define('NONCE_SALT',       'L3tt.1VIsrOqg44|y4dzl2#0phrAvORfg2Lv:Xs;5[lU9oXkq-],M~R4X16eyX=.');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
