<?php

return [
    /*---------site-------*/
    '' => [
        'controller' => 'site',
        'action' => 'index'
    ],
    'error' => [
        'controller' => 'site',
        'action' => 'error'
    ],
    'site/filmsGrid' => [
        'controller' => 'site',
        'action' => 'filmsGrid'
    ],
    'site/filmsList' => [
        'controller' => 'site',
        'action' => 'filmsList'
    ],
    'site/contact' => [
        'controller' => 'site',
        'action' => 'contact'
    ],
    'site/about' => [
        'controller' => 'site',
        'action' => 'about'
    ],
    'site/single_cinema/([0-9]+)' => [
        'controller' => 'site',
        'action' => 'single_cinema'
    ],
    'site/details_film/([0-9]+)' => [
        'controller' => 'site',
        'action' => 'details_film'
    ],
    'site/details_film_cinema/([0-9]+)/([0-9]+)' => [
        'controller' => 'site',
        'action' => 'details_film_cinema'
    ],
    'api/cron' => [
        'controller' => 'site',
        'action' => 'cron'
    ],
    /*---------user---------*/
    'user/signIn' => [
        'controller' => 'user',
        'action' => 'signIn'
    ],
    'user/signUp' => [
        'controller' => 'user',
        'action' => 'signUp'
    ],
    'user/forgot' => [
        'controller' => 'user',
        'action' => 'forgot'
    ],
    'user/profile' => [
        'controller' => 'user',
        'action' => 'profile'
    ],
    'user/delete' => [
        'controller' => 'user',
        'action' => 'delete'
    ],
    'user/recovery' => [
        'controller' => 'user',
        'action' => 'recovery'
    ],
    'logout' => [
        'controller' => 'user',
        'action' => 'logout'
    ]
];