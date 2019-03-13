<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\GeolocationPointsController::class,
    'router'     => [
        'as'     => 'geolocation-point.',
        'prefix' => '/geolocation-points',
    ],
];
