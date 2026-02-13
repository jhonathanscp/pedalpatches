<?php

return [
    [
        'method' => 'GET', 
        'path' => '#^/$#', 
        'handler' => 'PagesController@renderHomePage'
        ],
    [
        'method' => 'GET', 
        'path' => '#^/home$#', 
        'handler' => 'PagesController@renderHomePage'
        ],
    [
        'method' => 'GET', 
        'path' => '#^/pedal/([a-zA-Z0-9-])+$#', 
        'handler' => 'PedalController@show'
        ]
];