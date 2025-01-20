<?php
header('Content-Type: application/json');

$images = glob('@images/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$images = array_map(function($path) {
    return basename($path);
}, $images);

echo json_encode($images); 