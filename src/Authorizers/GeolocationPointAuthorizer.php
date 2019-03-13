<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class GeolocationPointAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'geolocation-point.create',
        Tokens::PERMISSION_UPDATE => 'geolocation-point.update',
        Tokens::PERMISSION_SHOW   => 'geolocation-point.show',
        Tokens::PERMISSION_REMOVE => 'geolocation-point.remove',
    ];
}
