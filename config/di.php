<?php

declare(strict_types=1);

return [
    \Oleksandrb\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\Oleksandrb\Cms\Router::class),
            \DI\get(\Oleksandrb\Blog\Router::class),
            \DI\get(\Oleksandrb\ContactUs\Router::class),
        ]
    )
];

