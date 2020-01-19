<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\GeolocationPoint                 newEntity()
 * @method \Amethyst\Schemas\GeolocationPointSchema          getSchema()
 * @method \Amethyst\Repositories\GeolocationPointRepository getRepository()
 * @method \Amethyst\Serializers\GeolocationPointSerializer  getSerializer()
 * @method \Amethyst\Validators\GeolocationPointValidator    getValidator()
 * @method \Amethyst\Authorizers\GeolocationPointAuthorizer  getAuthorizer()
 */
class GeolocationPointManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.geolocation.data.geolocation-point';
}
