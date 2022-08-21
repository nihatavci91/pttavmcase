<?php

use Nihatavci\PttavmCase\Controller\ProductFeedController;

include 'router.php';

require "./vendor/autoload.php";

// Add base route (startpage)
Route::add('/', function () {
    echo 'PttAvm feed system';
});

// Post route example
Route::add('/feed', function () {
    $url = ProductFeedController::feed($_POST);
    echo json_encode(['fileUrl' => $url]);
}, 'post');

Route::run();
