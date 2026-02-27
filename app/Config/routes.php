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
        'path' => '#^/pedals/([\w-]+)$#',
        'handler' => 'PedalController@showPedal'
    ],
    [
        'method' => 'POST',
        'path' => '#^/pedals/new$#',
        'handler' => 'PedalController@registerNewPedal'
    ]
];