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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'webazex_dsb02' );
//define( 'DB_NAME', 'education' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'webazex_dsb02' );
//define( 'DB_USER', 'education' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Education*001' );
//define( 'DB_PASSWORD', 'education' );

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
define( 'AUTH_KEY',         'J9PzAk@3=<!UE<7&%eVAuEdq6;2{ZDV< pDyizMf<wU@iE)1*JzUE=pdC|5v5MW[' );
define( 'SECURE_AUTH_KEY',  'HxrusqE6A)%=q+rlwRrKL*kJHA}.3_[`OBfmWZhuJ_Mf8KtF]D@(/pC~_CI:y$>3' );
define( 'LOGGED_IN_KEY',    'jee8G3!ZZD#_Z1>6:ySA2j0$Rz!q+^6)87oB]y3BkAF]u6{ubiiC^Zk1Q)X=o@1t' );
define( 'NONCE_KEY',        'pPs_.iONF}W$E3=zHWD{`uSA.a1/A$IcqzZ7J6H^v8_7oHhipg`|4K)V>=qcf#^F' );
define( 'AUTH_SALT',        '%H]|d)F=1(/Tn.,hJkAEn4h D$;?yhw+rj$75{`DF3/ s)j!]K/|XNTLf9c-Ab$V' );
define( 'SECURE_AUTH_SALT', 'ud9az%)]rlD c&KHar1<-D`e(DD}38|AwPK|,VLy*ae`>&OlI-Wj!<fDD^sD:slI' );
define( 'LOGGED_IN_SALT',   'oa2kB~Vz}8DY9vgx:[&9[)V;PPp+dVq]`Nu)u55S=[QOQf(7X~y3>&7=F5NB]R,Z' );
define( 'NONCE_SALT',       'Jf-*tOlvI|MS`$Li%UF^-*0Nu1o/QVKZY7w>buy&y|f{R]6pNkqLkz_T|yk$=%9W' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'aced_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
