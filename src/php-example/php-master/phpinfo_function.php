<?php

phpinfo();           // all php info
echo "<pre>";        // info about server
print_r($_SERVER);
echo "<pre>";

echo $_SERVER['HTTPS'];  // check protocol
echo $_SERVER['HTTP_HOST'];  // check protocol
echo $_SERVER['HTTP_HOST']. ' - '.$_SERVER['REQUEST_URI'];  //check url-adress
echo $_SERVER['HTTP_USER_AGENT'];  // check OS and browser
if ($_GET['source'] != "") {
    $link = explode("?source=", $_SERVER["REQUEST_URI"]);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: '.$redirect);
    exit();
}