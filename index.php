<?php
  require __DIR__ . '/vendor/autoload.php';

  $pageUrl = ["home"];

  if(isset($_GET["url"])) {
    $pageUrl = explode("/", $_GET["url"]);
  }

  Redirect($pageUrl);

  function Redirect($url) {
    switch ($url[0]) {
      case 'home':
        require_once("./app/Views/home.php");
        break;

      case 'models':
        switch ($url[1]) {
          case 'gp200':
            require_once("./app/Views/models/gp200.php");
            break;
          case 'elementxp':
            require_once("./app/Views/models/elementxp.php");
            break;
        }
        break;
      
      default:
        require_once("./app/Views/404.php");
        break;
    }
  }
