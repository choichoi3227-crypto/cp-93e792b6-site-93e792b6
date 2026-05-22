<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'x7tvpwrjvqpfwspkwjxap6qkj5yt776to4m7pv17m4vzf9y8rk2y4d9bux9t8bms' );
define( 'SECURE_AUTH_KEY',  'nf08xqp842o353tiszw4x9dcl0rhavmpw5bgdq2v56kw3li3tbr62hkx4xnos92r' );
define( 'LOGGED_IN_KEY',    'cweb7tit07w5itg5gk72yojeoutezaxp2tf1k55h0l2pdlxd0q5hr3y08dd5e4io' );
define( 'NONCE_KEY',        '9xm05jm45lcysevwj1vk043csk2vp0zls6kzl939xn5lid90qcmnistgvzxehvqf' );
define( 'AUTH_SALT',        'l0byillihb1r0ztc1dzmevw5jap1q0ieuh6rwab8lk3tfv2ud0gm2qt5r5r4fl1t' );
define( 'SECURE_AUTH_SALT', '2g67n30cyj2qpyat4lnxaop5khhwvg1vqzic8t6bbgfp7gl8bzae68ay4sdeh1yv' );
define( 'LOGGED_IN_SALT',   '06y3chvnlgq73154vuv6uq3t41jd09lhvojvx00bikdwe5x7toh35peecl7vlyb9' );
define( 'NONCE_SALT',       'ru9sd5j17dp4u4wv6cu0ce1upiodrragtbcbzsqzy4z8wtchqmez5pf8q0sz5b13' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-93e792b6-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-93e792b6-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
