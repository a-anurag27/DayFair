<?php
require_once './library/config.php';
require_once './library/functions.php';
checkFDUser();
$content = 'views/dashboard.php';
$pageTitle = 'Trip Planner';
$script = array();
require_once 'include/template.php';
?>