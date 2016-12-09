<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/19/16
 * Time: 3:32 PM
 */

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("Location: login.php");