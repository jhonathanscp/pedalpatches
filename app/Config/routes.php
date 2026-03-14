<?php

return [
    [
        'method' => 'GET',
        'path' => '#^/$#',
        'handler' => 'PagesController@renderHomePage',
        'auth' => false
    ],
    [
        'method' => 'GET',
        'path' => '#^/home$#',
        'handler' => 'PagesController@renderHomePage',
        'auth' => false
    ],
    [
        'method' => 'GET',
        'path' => '#^/pedals/([\w-]+)$#',
        'handler' => 'PedalController@showPedal',
        'auth' => false
    ],
    [
        'method' => 'POST',
        'path' => '#^/pedals/new$#',
        'handler' => 'PedalController@registerNewPedal',
        'auth' => true
    ],
    [
        'method' => 'GET',
        'path' => '#^/upload$#',
        'handler' => 'PatchController@renderUploadPatchPage',
        'auth' => true
    ],
    [
        'method' => 'POST',
        'path' => '#^/upload$#',
        'handler' => 'PatchController@uploadNewPatch',
        'auth' => true
    ],
    [
        'method' => 'GET',
        'path' => '#^/authenticate$#',
        'handler' => 'AuthController@renderAuthPage',
        'auth' => false
    ],
    [
        'method' => 'POST',
        'path' => '#^/authenticate$#',
        'handler' => 'AuthController@register',
        'auth' => true
    ],
    [
        'method' => 'POST',
        'path' => '#^/authenticate$#',
        'handler' => 'AuthController@login',
        'auth' => true
    ]
];
