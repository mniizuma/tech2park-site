<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'tech2wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b40a2e125bbc06');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '44ad7f44');

/** MySQL のホスト名 */
define('DB_HOST', 'ap-cdbr-azure-east-b.cloudapp.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qB>kcUln682($6|Aj0e`+(bo)do.9$yQj2]qm~#1@-6d]L5i?BCKlcu(8#^(:#Do');
define('SECURE_AUTH_KEY',  '|z>_e9jp-wF@/1Z4E30wdO+q~Dn[l@!_G6NjmUdH<JT1Qt4gl!n(,}(o}EH Nh8A');
define('LOGGED_IN_KEY',    'DBW}!JmP^Ai*3u,:bjfP>LzF/4Ht)-mN/xJ{TKL};-.*p6%l_l{I<W=7kJEGO?rn');
define('NONCE_KEY',        'fAJY.^r@+k NrS;zQzJ^^j-5Sd<[C|V;FNY96Peq`S);Fdoe,]/rpJ?+5Ew=B%|t');
define('AUTH_SALT',        ')I*+H^[s TJyD*FQf;CW|1U+;:hNtr0=nl]MF8)+pX{H$exUbcL-Mo*u]k%c6#-?');
define('SECURE_AUTH_SALT', '*3:G<2+5gjt#@I_[$Xg++,R*Hyhvk}-g!qluL?4&qtyr`8AR)aMI-(yDIR>Pf2n$');
define('LOGGED_IN_SALT',   '/l*f5tte<=vJ[3DmgL1(%R RcMiCa}SQgbn(y7BH54*X.!q){M~h9}zMRqK#qZ 5');
define('NONCE_SALT',       '6&uYU67..fG1HuTN%}+(6r)|3a25TZ+T^_P#hOrI+An()aLqGn[o6>]T,=ftTx)q');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
