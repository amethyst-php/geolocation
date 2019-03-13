<?php

return [
    'table'      => 'amethyst_geolocation_points',
    'comment'    => 'GeolocationPoint',
    'model'      => Railken\Amethyst\Models\GeolocationPoint::class,
    'schema'     => Railken\Amethyst\Schemas\GeolocationPointSchema::class,
    'repository' => Railken\Amethyst\Repositories\GeolocationPointRepository::class,
    'serializer' => Railken\Amethyst\Serializers\GeolocationPointSerializer::class,
    'validator'  => Railken\Amethyst\Validators\GeolocationPointValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\GeolocationPointAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\GeolocationPointFaker::class,
    'manager'    => Railken\Amethyst\Managers\GeolocationPointManager::class,
    'attributes' => [
        'localizable' => [
            'options' => [
                Railken\Amethyst\Models\Foo::class => Railken\Amethyst\Managers\FooManager::class,
            ],
        ],
    ],
];
