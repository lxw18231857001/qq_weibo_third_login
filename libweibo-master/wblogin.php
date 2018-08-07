<?php
require_once 'config.php';
require_once 'libweibo-master/saetv2.ex.class.php';

$obj = new SaeTOAuthV2(WB_KEY, WB_SEC);
$oauthUrl = $obj->getAuthorizeURL(CALLBACK);

header('location:' . $oauthUrl);

