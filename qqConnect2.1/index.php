<?php
require_once 'function.php';
require_once 'API/qqConnectAPI.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['qq_openid'])) {
?>
    <a href="qqlogin.php">
        <button>登录QQ</button>
    </a>
<?php }else{?>
    <a href="qqlogout.php">
        <button>退出QQ</button>
    </a>
<?php

$qc=new QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
$user=$qc->get_user_info();
debug($user);


} ?>
</body>
</html>
