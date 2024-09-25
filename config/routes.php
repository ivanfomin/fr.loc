<?php

/** @var \PHPFramework\Application $app */

$app->router->get('/',
    function () {
        return 'Main page';
    }
);

$app->router->get('/about',
    function () {
        return 'About page';
    }
);

$app->router->get('/contacts',
    function () {
        return 'Contact form page';
    }
);

$app->router->post('/contacts ',
    function () {
        return 'Contact form POST page';
    }
);