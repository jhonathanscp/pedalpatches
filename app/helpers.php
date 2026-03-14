<?php

function renderComponent(String $fileName, array $params = [])
{
    $viewsPath = __DIR__ . '/Views';
    extract($params);
    include $viewsPath . "/components/" . $fileName . ".php";
}

function redirect($url)
{
    header("Location: {$url}");
    exit();
}
