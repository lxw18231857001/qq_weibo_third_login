<?php
setcookie('qq_accesstoken',null);
setcookie('qq_openid',null);
echo '退出成功';
header('location:index.php');