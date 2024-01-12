<?php

function load(): void
{
    $inc = $_GET['inc'] ?? 'home';
    $patch = BASE . '/app/views/' . $inc . '.php';
    if (!file_exists($patch)) {
        throw new Exception("View {$inc} does not exist");
    }
    require $patch;
};
