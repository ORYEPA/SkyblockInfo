<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_page_index', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\PageController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\PageController::register'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\PageController::home'], null, null, null, false, false, null]],
        '/userSettings' => [[['_route' => 'app_page_userinfo', '_controller' => 'App\\Controller\\PageController::userinfo'], null, null, null, false, false, null]],
        '/checkLogin' => [[['_route' => 'app_page_checklogin', '_controller' => 'App\\Controller\\PageController::checkLogin'], null, null, null, false, false, null]],
        '/checkregister' => [[['_route' => 'app_page_checkregister', '_controller' => 'App\\Controller\\PageController::checkregister'], null, null, null, false, false, null]],
        '/checkfavorite' => [[['_route' => 'app_page_checkfavorite', '_controller' => 'App\\Controller\\PageController::checkfavorite'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/favorites/([^/]++)(*:61)'
                .'|/movie/([^/]++)(*:83)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'app_page_userbookmark', '_controller' => 'App\\Controller\\PageController::userbookmark'], ['movieId'], null, null, false, true, null]],
        83 => [
            [['_route' => 'app_page_movieinfo', '_controller' => 'App\\Controller\\PageController::movieInfo'], ['movieId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
