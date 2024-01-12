<?php

$inc = $_GET['inc'] ?? 'home';

return match ($inc) {
    'home' => function () {
        var_dump('home');
    },
    'detail' => function () {
        var_dump('detail');
    },
    'contact' => function () {
        var_dump('contact');
    },
    default => function () {
        var_dump('Ops... Not Found');
    }
};
