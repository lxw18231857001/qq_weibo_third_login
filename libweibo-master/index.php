<?php
require_once 'config.php';
require_once 'libweibo-master/saetv2.ex.class.php';
$isLogin = isset($_COOKIE['accesstoken']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微博测试</title>
</head>
<body>
<?php
if (!$isLogin) {
    ?>
    <a href="wblogin.php"><img src="./libweibo-master/weibo_login.png"></a>
    <?php
} else {
    ?>

    <p>你已经成功登录！</p>
    <a href="exit.php">
        <button>退出登录</button>
    </a>

    <?php
    $accesstoken = isset($_COOKIE['accesstoken']) ? $_COOKIE['accesstoken'] : '';
    $obg = new SaeTClientV2(WB_KEY, WB_SEC, $accesstoken);

//    $res = $obg->home_timeline($_COOKIE['accesstoken'], $page = 2, $trim_user = 0);
//    $res = $obg->bilateral_timeline();
//    uid=5549088156
    $res=$obg->show_status('lxw18231857001');
    var_dump($res);
}
?>
    <!--<form action="https://api.weibo.com/2/statuses/share.json" method="post" enctype="multipart/form-data"><br>
        <input style="width: 350px" type="text" name="access_token" value="<?php /*echo $_COOKIE['accesstoken']; */?>"><br>
        <input style="width: 650px" type="text" name="status" value="这是测试案例,分享地址为：https://www.cnblogs.com/lxwphp/p/9292807.html"><br>
        <input style="width: 350px" type="file" name="pic" value=""><br>
        <input type="submit" name="提交表单"><br>
    </form>-->
</body>
</html>


