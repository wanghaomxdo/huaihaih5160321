<?php 

    session_start();

     if(!isset($_SESSION["openid"]))
     {
        include_once 'weChat/weChatAutho.php';
     }else
     {
        // userinfo
        /*echo 'openid:'.$_SESSION['openid'] . '<br />';
        echo 'headimgurl:'.$_SESSION['img'] . '<br />';
        echo 'nickname:'.$_SESSION['nickname'] . '<br />';*/
     }
?>
<!DOCTYPE html>
<html lang="en">
<!-- <html lang="en" manifest="app.appcache"> -->
<head>
	<meta charset="UTF-8">
	<title>淮海</title>
	<meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=640, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<!-- pagelist-->
<body>
  <div class="swiper-slide p1 ">
    <img class="bg"src="img/bgcn.png">
    <img class="cn" src="img/transparent.png" >
    <img class="en" src="img/transparent.png" >
    <div id="workDemo">
        <a href="#"><img class="e1"src="img/B1.png"></a>
        <a href="#"><img class="e2"src="img/L1&L2.png"></a>
        <a href="#"><img class="e3"src="img/L3.png"></a>
        <a href="#"><img class="e4"src="img/L4.png"></a>
        <a href="#"><img class="e5"src="img/L5.png"></a>
        <a href="#"><img class="map"src="img/map.png"></a>
    </div>
    <input id="trade" type="text" class="in-1 e-1" placeholder="请输入您的行业">
    <input id="brand" type="text" class="in-1 e-2" placeholder="请输入您的品牌">
    <input id="name"  type="text" class="in-1 e-3" placeholder="请输入您的姓名">
    <input id="phone" type="text" class="in-1 e-4" placeholder="请输入您的电话">
    <input id="email" type="text" class="in-1 e-5" placeholder="请输入您的电邮">            
    <img class="button" src="img/transparent.png" >
    <div class="hit"></div>
  </div>

  <div class="swiper-slide p2 hide">
    <img class="bg"src="img/bgen.png">
    <img class="cn" src="img/transparent.png" >
    <img class="en" src="img/transparent.png" >
    <div id="workDemo1">
        <a href="#"><img class="e1"src="img/B1.png"></a>
        <a href="#"><img class="e2"src="img/L1&L2.png"></a>
        <a href="#"><img class="e3"src="img/L3.png"></a>
        <a href="#"><img class="e4"src="img/L4.png"></a>
        <a href="#"><img class="e5"src="img/L5.png"></a>
        <a href="#"><img class="map"src="img/map.png"></a>
    </div>
    <input id="trade1" type="text" class="in-1 e-1" >
    <input id="brand1" type="text" class="in-1 e-2" >
    <input id="name1"  type="text" class="in-1 e-3" >
    <input id="phone1" type="text" class="in-1 e-4" >
    <input id="email1" type="text" class="in-1 e-5" >            
    <img class="button1" src="img/transparent.png" >
    <div class="hit1"></div>
  </div>

<!--Script====================================================== -->
<script src="js/zepto/zepto.min.js"></script>
<script src="js/motion/landscape.min.js"></script>
<script src="js/app.js"></script>
<?php include_once 'weChat/weChatShareJS.php';?>
<script>
    var $OPENID = "<?php echo $_SESSION['openid'] ?>";
</script>
</body>
</html>