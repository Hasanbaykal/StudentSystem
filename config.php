<?php
    session_start();
    require_once('GoogleAPI/vendor/autoload.php');
    $gClient = new Google_Client();
    $gClient->setClientId("151877840128-6tg1h0iib33g1rrft2mj1fj7vs2e8aki.apps.googleusercontent.com");
    $gClient->setClientSecret("TFR1rf1-HrL8RNMaqi_eixL7");
    $gClient->setApplicationName("CPI Login");
    $gClient->setRedirectUri("http://localhost/StudentSystem/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>