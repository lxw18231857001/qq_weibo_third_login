<?php

require_once 'function.php';
require_once 'API/qqConnectAPI.php';
//请求access_token

$oauth=new Oauth();
$accesstoken=$oauth->qq_callback();
$openid=$oauth->get_openid();

setcookie('qq_accesstoken',$accesstoken,time()+86400);
setcookie('qq_openid',$openid,time()+86400);

header('location:index.php');

//debug($openid);
//debug($accesstoken);

