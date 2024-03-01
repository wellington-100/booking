<?php
    // print_r($_POST);
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (trim($name) == ''){
        echo "You have not entered your username";
    } else if (strlen(trim($name)) <=1) {
        echo "That username does not exist";
    } else if (trim($email) == '' || trim($pass) == '' || trim($_POST['message']) == ''){
        echo "Enter all your data";
    } else {
        // $_POST['message'] = md5($pass);
        // // echo "<h1>All data</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";
        // echo "<h1>All data</h1>";
        // foreach($_POST as $key => $value) {
        //     echo "<p>$value</p>";
        header("Location: about.php");
        exit;
    }

