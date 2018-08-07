<?php
session_start();
/* PHP SDK
 * @version 2.0.0
 * @author connect@qq.com
 * @copyright © 2013, Tencent Corporation. All rights reserved.
 */

define("QQ_CONNECT_SDK_ROOT",dirname(__FILE__)."/");
define("QQ_CONNECT_SDK_CLASS_PATH",QQ_CONNECT_SDK_ROOT."class/");
define("QQ_APP_ID",'你的appid');
define("QQ_APP_KEY",'你的appkey');
define("QQ_APP_CALLBACK",'http://qq.open.lixiag.top/callback.php');

require_once(QQ_CONNECT_SDK_CLASS_PATH."QC.class.php");
