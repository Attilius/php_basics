<?php

$uri = $_SERVER['REQUEST_URI'];
$cleand = explode("?", $uri)[0];

route('/php_basics/', 'homeController');
route('/php_basics/about', 'aboutController');
route('/php_basics/image/(?<id>[\d]+)', 'singleImageController');
route('/php_basics/image/(?<id>[\d]+)/edit', 'singleImageEditController', 'POST');
route('/php_basics/image/(?<id>[\d]+)/delete', 'singleImageDeleteController', 'POST');
list($view, $data) = dispatch($cleand, 'notFoundController');
extract($data);
