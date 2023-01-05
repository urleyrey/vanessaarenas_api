<?php

$container->set('settings', function(){
    return (Object)[
        'db' => [
        "DB_NAME" => 'v_arenas',
        "DB_PASS" => '',
        "DB_CHAR" => 'utf8',
        "DB_HOST" => 'localhost',
        "DB_USER" => 'root',
        ]
    ];
});