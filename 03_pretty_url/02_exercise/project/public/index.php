<?php
if($_SERVER['REQUEST_URI'] == '/')
    $_SERVER['REQUEST_URI'] = '/home';

$parts = explode('/', $_SERVER['REQUEST_URI']);
$view = "/" . $parts[1];
if($parts[1] == 'user') {
    $id = $parts[2];
    if ($id < 1 or $id > 3) {
        $view = "/404";
    }
}
include "../views/layout.php";
