<?php

ob_start();
include 'index.php';
$html = ob_get_clean();

// Remove comments for production related tags
$html = preg_replace(
    '/<!-- production only\s*(.*?)\s*end production only -->/s',
    '$1',
    $html
);

// Basic minification
$html = preg_replace('/\s+/', ' ', $html);
$html = str_replace('> <', '><', $html);

file_put_contents('dist/index.html', $html);
