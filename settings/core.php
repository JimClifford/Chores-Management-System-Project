<?php
session_start();

function check_user_login() {
    if (isset($_SESSION['user_id']) && isset($_SESSION['role_id'])) {
        return true;
    } else {
        return false;
    }
}

if (!check_user_login()) {
    header("Location: login.html");
    die("Sorry, your session has expired.");
}
?>
