<?php

return [
    'app_name' => 'Test framework',
    'components' => [
        'router' => [
            'factory' => \Aigletter\Framework\Components\Routing\MyRouterPlant::class,
            'arguments' => [

                '/' => function () {
                    echo 'main page';
                },
                '/static' => [\Aigletter\App\Controllers\RouteController::class, 'static'],
                '/dynamic' => [new (\Aigletter\App\Controllers\RouteController::class), 'dynamic'],
                '/shop/show'=>[new(\Aigletter\App\Controllers\ShopController::class), 'show']

            ]
        ],
        'cache' => [
            'factory' => \Aigletter\Framework\Components\Caching\CacheFactory::class,
            'arguments' => [
                'filename' => __DIR__ . '/../data/cache/cache.json'
            ]
        ],
        'test' => [
            'factory' => \Aigletter\App\Components\Test\TestFactory::class,
        ],
        'logger' => [
            'factory' => \Aigletter\Framework\Components\Logging\LoggerFactory::class,
        ]
    ]
];