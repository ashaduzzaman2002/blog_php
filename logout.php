<?php

session_start();
$_COOKIE = array();
session_destroy();

header('location: index.php')

?>