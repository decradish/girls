<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

define('DEFAULT_TB', 'girls');
define('COOKIE_DOMAIN', 'ezone.cn');
define('SECRET_KEY', ':)Ezone^3^');
define('OW_URL', 'http://kn.ezone.cn/');
define('DOMAIN', 'http://'.$_SERVER['HTTP_HOST']);
define('SMSURL', 'http://yunpian.com/v1/sms/send.json');
define('SMS_M_URL', 'http://yunpian.com/v1/sms/tpl_send.json');
define('SMSKEY', '0590349a7f3a0aef94d32ce170b934aa');
define('NEWS_TYPE', '["新闻","公告","活动","游戏资料","游戏攻略"]');
define('GAMES', '["烈焰屠龙","世界小姐"]');

define('CITIS', '["北京市 北京市","天津市 天津市","上海市 上海市","安徽省 安庆市","安徽省 蚌埠市","安徽省 亳州市","安徽省 巢湖市","安徽省 池州市","安徽省 滁州市","安徽省 阜阳市","安徽省 合肥市","安徽省 淮北市","安徽省 淮南市","安徽省 黄山市","安徽省 六安市","安徽省 马鞍山市","安徽省 宿州市","安徽省 铜陵市","安徽省 芜湖市","安徽省 宣城市","福建省 福州市","福建省 龙岩市","福建省 南平市","福建省 宁德市","福建省 莆田市","福建省 泉州市","福建省 三明市","福建省 厦门市","福建省 漳州市","甘肃省 白银市","甘肃省 定西市","甘肃省 甘南藏族自治州","甘肃省 嘉峪关市","甘肃省 金昌市","甘肃省 酒泉市","甘肃省 兰州市","甘肃省 临夏回族自治州","甘肃省 陇南市","甘肃省 平凉市","甘肃省 庆阳市","甘肃省 天水市","甘肃省 武威市","甘肃省 张掖市","广东省 潮州市","广东省 东莞市","广东省 佛山市","广东省 广州市","广东省 河源市","广东省 惠州市","广东省 江门市","广东省 揭阳市","广东省 茂名市","广东省 梅州市","广东省 清远市","广东省 汕头市","广东省 汕尾市","广东省 韶关市","广东省 深圳市","广东省 阳江市","广东省 云浮市","广东省 湛江市","广东省 肇庆市","广东省 中山市","广东省 珠海市","广西壮族自治区 百色市","广西壮族自治区 北海市","广西壮族自治区 崇左市","广西壮族自治区 防城港市","广西壮族自治区 贵港市","广西壮族自治区 桂林市","广西壮族自治区 河池市","广西壮族自治区 贺州市","广西壮族自治区 来宾市","广西壮族自治区 柳州市","广西壮族自治区 南宁市","广西壮族自治区 钦州市","广西壮族自治区 梧州市","广西壮族自治区 玉林市","贵州省 安顺市","贵州省 毕节地区","贵州省 贵阳市","贵州省 六盘水市","贵州省 黔东南苗族侗族自治州","贵州省 黔南布依族苗族自治州","贵州省 黔西南布依族苗族自治州","贵州省 铜仁地区","贵州省 遵义市","海南省 海口市","海南省 三亚市","海南省 省直辖县级行政区划","河北省 保定市","河北省 沧州市","河北省 承德市","河北省 邯郸市","河北省 衡水市","河北省 廊坊市","河北省 秦皇岛市","河北省 石家庄市","河北省 唐山市","河北省 邢台市","河北省 张家口市","河南省 安阳市","河南省 鹤壁市","河南省 焦作市","河南省 开封市","河南省 洛阳市","河南省 漯河市","河南省 南阳市","河南省 平顶山市","河南省 濮阳市","河南省 三门峡市","河南省 商丘市","河南省 新乡市","河南省 信阳市","河南省 许昌市","河南省 郑州市","河南省 周口市","河南省 驻马店市","黑龙江省 大庆市","黑龙江省 大兴安岭地区","黑龙江省 哈尔滨市","黑龙江省 鹤岗市","黑龙江省 黑河市","黑龙江省 鸡西市","黑龙江省 佳木斯市","黑龙江省 牡丹江市","黑龙江省 七台河市","黑龙江省 齐齐哈尔市","黑龙江省 双鸭山市","黑龙江省 绥化市","黑龙江省 伊春市","湖北省 鄂州市","湖北省 恩施土家族苗族自治州","湖北省 黄冈市","湖北省 黄石市","湖北省 荆门市","湖北省 荆州市","湖北省 十堰市","湖北省 随州市","湖北省 武汉市","湖北省 咸宁市","湖北省 襄樊市","湖北省 孝感市","湖北省 宜昌市","湖南省 长沙市","湖南省 常德市","湖南省 郴州市","湖南省 衡阳市","湖南省 怀化市","湖南省 娄底市","湖南省 邵阳市","湖南省 湘潭市","湖南省 湘西土家族苗族自治州","湖南省 益阳市","湖南省 永州市","湖南省 岳阳市","湖南省 张家界市","湖南省 株洲市","吉林省 白城市","吉林省 白山市","吉林省 长春市","吉林省 吉林市","吉林省 辽源市","吉林省 四平市","吉林省 松原市","吉林省 通化市","吉林省 延边朝鲜族自治州","江苏省 常州市","江苏省 淮安市","江苏省 连云港市","江苏省 南京市","江苏省 南通市","江苏省 苏州市","江苏省 宿迁市","江苏省 泰州市","江苏省 无锡市","江苏省 徐州市","江苏省 盐城市","江苏省 扬州市","江苏省 镇江市","江西省 抚州市","江西省 赣州市","江西省 吉安市","江西省 景德镇市","江西省 九江市","江西省 南昌市","江西省 萍乡市","江西省 上饶市","江西省 新余市","江西省 宜春市","江西省 鹰潭市","辽宁省 鞍山市","辽宁省 本溪市","辽宁省 朝阳市","辽宁省 大连市","辽宁省 丹东市","辽宁省 抚顺市","辽宁省 阜新市","辽宁省 葫芦岛市","辽宁省 锦州市","辽宁省 辽阳市","辽宁省 盘锦市","辽宁省 沈阳市","辽宁省 铁岭市","辽宁省 营口市","内蒙古自治区 阿拉善盟","内蒙古自治区 巴彦淖尔市","内蒙古自治区 包头市","内蒙古自治区 赤峰市","内蒙古自治区 鄂尔多斯市","内蒙古自治区 呼和浩特市","内蒙古自治区 呼伦贝尔市","内蒙古自治区 通辽市","内蒙古自治区 乌海市","内蒙古自治区 乌兰察布市","内蒙古自治区 锡林郭勒盟","内蒙古自治区 兴安盟","宁夏回族自治区 固原市","宁夏回族自治区 石嘴山市","宁夏回族自治区 吴忠市","宁夏回族自治区 银川市","宁夏回族自治区 中卫市","青海省 果洛藏族自治州","青海省 海北藏族自治州","青海省 海东地区","青海省 海南藏族自治州","青海省 海西蒙古族藏族自治州","青海省 黄南藏族自治州","青海省 西宁市","青海省 玉树藏族自治州","山东省 滨州市","山东省 德州市","山东省 东营市","山东省 菏泽市","山东省 济南市","山东省 济宁市","山东省 莱芜市","山东省 聊城市","山东省 临沂市","山东省 青岛市","山东省 日照市","山东省 泰安市","山东省 威海市","山东省 潍坊市","山东省 烟台市","山东省 枣庄市","山东省 淄博市","山西省 长治市","山西省 大同市","山西省 晋城市","山西省 晋中市","山西省 临汾市","山西省 吕梁市","山西省 朔州市","山西省 太原市","山西省 忻州市","山西省 阳泉市","山西省 运城市","陕西省 安康市","陕西省 宝鸡市","陕西省 汉中市","陕西省 商洛市","陕西省 铜川市","陕西省 渭南市","陕西省 西安市","陕西省 咸阳市","陕西省 延安市","陕西省 榆林市","四川省 阿坝藏族羌族自治州","四川省 巴中市","四川省 成都市","四川省 达州市","四川省 德阳市","四川省 甘孜藏族自治州","四川省 广安市","四川省 广元市","四川省 乐山市","四川省 凉山彝族自治州","四川省 泸州市","四川省 眉山市","四川省 绵阳市","四川省 内江市","四川省 南充市","四川省 攀枝花市","四川省 遂宁市","四川省 雅安市","四川省 宜宾市","四川省 资阳市","四川省 自贡市","西藏自治区 阿里地区","西藏自治区 昌都地区","西藏自治区 拉萨市","西藏自治区 林芝地区","西藏自治区 那曲地区","西藏自治区 日喀则地区","西藏自治区 山南地区","新疆维吾尔自治区 阿克苏地区","新疆维吾尔自治区 阿勒泰地区","新疆维吾尔自治区 巴音郭楞蒙古自治州","新疆维吾尔自治区 博尔塔拉蒙古自治州","新疆维吾尔自治区 昌吉回族自治州","新疆维吾尔自治区 哈密地区","新疆维吾尔自治区 和田地区","新疆维吾尔自治区 喀什地区","新疆维吾尔自治区 克拉玛依市","新疆维吾尔自治区 克孜勒苏柯尔克孜自治州","新疆维吾尔自治区 塔城地区","新疆维吾尔自治区 吐鲁番地区","新疆维吾尔自治区 乌鲁木齐市","新疆维吾尔自治区 伊犁哈萨克自治州","新疆维吾尔自治区 自治区直辖县级行政区划","云南省 保山市","云南省 楚雄彝族自治州","云南省 大理白族自治州","云南省 德宏傣族景颇族自治州","云南省 迪庆藏族自治州","云南省 红河哈尼族彝族自治州","云南省 昆明市","云南省 丽江市","云南省 临沧市","云南省 怒江僳僳族自治州","云南省 普洱市","云南省 曲靖市","云南省 文山壮族苗族自治州","云南省 西双版纳傣族自治州","云南省 玉溪市","云南省 昭通市","浙江省 杭州市","浙江省 湖州市","浙江省 嘉兴市","浙江省 金华市","浙江省 丽水市","浙江省 宁波市","浙江省 衢州市","浙江省 绍兴市","浙江省 台州市","浙江省 温州市","浙江省 舟山市","重庆市 市辖区","重庆市 县","香港特别行政区 其它","澳门特别行政区 其它","台湾省 其它"]');
define('HOBBY', '["美食","唱歌","跳舞","电影","音乐","喜剧","聊天","模型","电脑","上网","游戏","绘画","书法","雕塑","时尚","金融","阅读","旅行","运动","购物","宠物","摄影","烹饪","钓鱼","文学","汽车","收藏","星座","动漫","棋牌"]');
define('SKILL', '[["演唱",["通俗","美声","戏曲","其他演唱"]],["舞蹈",["现代","民族","古典","芭蕾","街舞","其他舞蹈"]],["表演",["主持","小品","相声","电影","电视","哑剧","其他表演"]],["乐器",["钢琴","吉他","笛类","提琴","鼓类","号类","萨克斯","口琴","琵琶","柳琴","古筝","扬琴","二胡","唢呐","马头琴","手风琴","其他乐器"]],["艺术",["T台","书法","绘画","插花","服装设计","化妆造型","手工艺","其他艺术"]]]');
define('GODDESS', '["魅力女神","才艺女神","人气女神","活力女神","时尚女神","古典女神","优雅女神","健美女神","才智女神","阳光女神"]');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= DOMAIN;

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
// $config['index_page'] = 'index.php';
$config['index_page'] = '';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'AUTO' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
*/

$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = FALSE;


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';


/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify with a regular expression which characters are permitted
| within your URLs.  When someone tries to submit a URL with disallowed
| characters they will get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ folder. Use a full server path with trailing slash.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/cache/ folder.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Session class you
| MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = '';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_cookie_name'		= the name you want for the cookie
| 'sess_expiration'			= the number of SECONDS you want the session to last.
|   by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'sess_expire_on_close'	= Whether to cause the session to expire automatically
|   when the browser window is closed
| 'sess_encrypt_cookie'		= Whether to encrypt the cookie
| 'sess_use_database'		= Whether to save the session data to a database
| 'sess_table_name'			= The name of the session database table
| 'sess_match_ip'			= Whether to match the user's IP address when reading the session data
| 'sess_match_useragent'	= Whether to match the User Agent when reading the session data
| 'sess_time_to_update'		= how many seconds between CI refreshing Session Information
|
*/
$config['sess_cookie_name']		= 'ci_session';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= FALSE;
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'ci_sessions';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or 'gmt'.  This pref tells the system whether to use
| your server's local time as the master 'now' reference, or convert it to
| GMT.  See the 'date helper' page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference'] = 'local';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = FALSE;


/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';


/* End of file config.php */
/* Location: ./application/config/config.php */