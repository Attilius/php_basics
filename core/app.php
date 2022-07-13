<?php

ob_start();
$uri = $_SERVER['REQUEST_URI'];
$cleand = explode("?", $uri)[0];
route('/php_basics/', 'homeController');
route('/php_basics/about', 'aboutController');
route('/php_basics/image/(?<id>[\d]+)', 'singleImageController');
route('/php_basics/image/(?<id>[\d]+)/edit', 'singleImageEditController', 'POST');
route('/php_basics/image/(?<id>[\d]+)/delete', 'singleImageDeleteController', 'POST');
route('/php_basics/login', 'loginFormController');
route('/php_basics/logout', 'logoutSubmitController');
route('/php_basics/login', 'loginSubmitController','POST');

list($view, $data) = dispatch($cleand, 'notFoundController');

if (preg_match("%^redirect\:%",$view)){
    $redirectTarget = substr($view, 9);
    header("Location:". $redirectTarget);
    die;
}
extract($data);
$user = createUser();
ob_clean();
require_once "templates/layout.php";