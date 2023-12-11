<?php
$imagesDirectory = './img';

$images = glob($imagesDirectory . '/*.{jpg,jpeg,png}', GLOB_BRACE);
sort($images, SORT_NATURAL | SORT_FLAG_CASE);

if (isset($_POST['copy'])) {
    foreach ($images as $image) {
        $newImage = $imagesDirectory . '/copy_' . basename($image);
        copy($image, $newImage);
    }
    header("Location: /");
    exit;
}