<?php
    session_start();
    $title = "HOME";
    // $user_name = "Alex";
    // setcookie("user_name", $user_name, time() + 180);     or time() - ...
    require_once "blocks/header.php" // include => whithout same file  // include_once, require, require_once
?>
<h1>HOME</h1>
<?php
    // print_r($_COOKIE);
    echo $_COOKIE['user_name'];

    require_once "blocks/footer.php";
?>