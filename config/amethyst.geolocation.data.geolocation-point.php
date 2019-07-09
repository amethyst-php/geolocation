<?php

return [
    'table'      => 'amethyst_geolocation_points',
    'comment'    => 'GeolocationPoint',
    'model'      => Amethyst\Models\GeolocationPoint::class,
    'schema'     => Amethyst\Schemas\GeolocationPointSchema::class,
    'repository' => Amethyst\Repositories\GeolocationPointRepository::class,
    'serializer' => Amethyst\Serializers\GeolocationPointSerializer::class,
    'validator'  => Amethyst\Validators\GeolocationPointValidator::class,
    'authorizer' => Amethyst\Authorizers\GeolocationPointAuthorizer::class,
    'faker'      => Amethyst\Fakers\GeolocationPointFaker::class,
    'manager'    => Amethyst\Managers\GeolocationPointManager::class,
    'attributes' => [
        'localizable' => [
            'options' => [],
        ],
    ],
];
