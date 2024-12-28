<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('kesabr/helpers', [
    'siteMethods' => [
        'testFunction' => function() {
            return 'Hello from testFunction!';
        }
    ]
]);
