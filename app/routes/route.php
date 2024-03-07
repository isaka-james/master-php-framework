<?php

/*********************    Define routes    *********************|
  Example,                                                      |
    '/' => 'indexPage'                                          | 
    .. means the controller name is indexPage.php,              |
    .. in '/app/controllers/homePage.php'                       |
\***************************************************************/

$routes = [
  '/' => 'indexController',

    // .. add routes

];





















// Don't delete this require_once -> This is route helper
require_once __DIR__.'/../Helpers/logic-route.php';