<?php

//get location details of current user
if (isset($_POST['Address'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $Address = $_POST['Address'];
    $Area = $_POST['Area'];
    $rsor_source = "wb";
    $rsor_campaign = "null";
    $rsor_redirect = "null";
    $rsor_created_at = CURRENT_DATE_TIME;

    $_SESSION['RSOR_LOCATION'] = $_POST['Address'];
} else {
    if (isset($_SESSION['RSOR_LOCATION'])) {
        $Address = IfRequested("POST", "Address", $_SESSION['RSOR_LOCATION'], false);
        $_SESSION['RSOR_LOCATION'] = $Address;
    } else {
        $Address = "Select Location";
    }
}

//enable/disable current user login session
if (isset($_SESSION['RSOR_LOGIN_USER_SESSION_ID'])) {
    define("RSOR_LOGIN_USER_ID", $_SESSION['RSOR_LOGIN_USER_SESSION_ID']);
} else {
    define("RSOR_LOGIN_USER_ID", null);
}
