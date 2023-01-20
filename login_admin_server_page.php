<?php

$login_email = $_GET['login_email'];
$login_pasword = $_GET['login_password'];

if ($login_email == null || $login_password == null) {

    $email_msg = "";
    $password_msg = "";

    if ($login_email == null) {
        $email_msg = "Email Empty";
    }
    if ($login_pasword == null) {
        $password_msg = "Pasword Empty";
    }

    header("Location: index.php?admin_email_msg=$email_msg&admin_password_msg=$password_msg");
} elseif ($login_email != null && $login_pasword != null) {
    $obj = new data();
    $obj->setconnection();
    $obj->adminLogin($login_email, $login_pasword);
}
