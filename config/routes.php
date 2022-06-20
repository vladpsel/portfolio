<?php

declare(strict_types=1);

return [
//    API CALLS
    'api/v1/posts' => 'post/posts',

//    ROUTES
    '^([a-z]{2}/portfolio)$' => 'portfolio/index',
    '^portfolio$' => 'portfolio/index',

    '^([a-z]{2})$' => 'home/home',
    '^$' => 'home/home',
];