<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'wordpress');

/** MySQL���ݿ��û��� */
define('DB_USER', 'root');

/** MySQL���ݿ����� */
define('DB_PASSWORD', '573384562');

/** MySQL���� */
define('DB_HOST', 'localhost');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-)q<vd7wg#{t96<YUXm~aVk!c9yn9eND /4Dkm1-up9#r%m=CqH+7L.CmhK*lnKx');
define('SECURE_AUTH_KEY',  'aj++vyZ-D^1X<,foi<5}ZgG*cVnSfqoo!zY?N3)VGlvW`~O|-H:z:W7|^r!e(W%>');
define('LOGGED_IN_KEY',    '~#mFKz(H))i|wR25ZJ)R+=:XANTgXI|q8o6;_:N@EGs{V0WT~ZS6yeai vr2oYk]');
define('NONCE_KEY',        'p%),Ms>Bh|G.yO.fFe}K9LQC<h~PJW l++[=|IPw7$6&32ltL#p~gkPYjM7cCk1[');
define('AUTH_SALT',        '~W({J.`:E_c<K`jGr9kQY@x?+|{Wsc^C74CKzPFp%HIS,Ksg>z`T%+/0U%/p8Q5L');
define('SECURE_AUTH_SALT', '^l[Jq]:I).HBWwwFg~Dr3bczbhA@xw)|qk:jsxc|O{B69@>&|`lKH+6_cL1Z_7@^');
define('LOGGED_IN_SALT',   '+{fx-cP&UwoGLZ_aD|A@tRrpOvvH68I&Eu.XB!M&cL!-k+kyp4^iO-KRC<4lL!6s');
define('NONCE_SALT',       'W}]?8XXqi%+=*~[-PF+{/|<|5mr^Yl/nogJrv[ej&vKH~7eF: (,.`]`/1+*v1Bg');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN���ػ����ã�����ICP��������ʾ
 *
 * �������á��������޸ġ�
 * ������ã����Ƴ���ע�͵����С�
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');
