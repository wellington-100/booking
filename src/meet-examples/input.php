






<?
    // DYNAMIC PAGE
    $temp = $_GET['temp'];

    //estimate
    $estimation = $temp >= 18 ? "Warm" : "Cold";

    //send data
    print($estimation);