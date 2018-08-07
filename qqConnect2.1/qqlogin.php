<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/7
 * Time: 13:08
 */
require_once 'function.php';
require_once 'API/qqConnectAPI.php';


$oauth=new Oauth();
$oauth->qq_login();
