<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\GeolocationPointFaker;
use Amethyst\Managers\GeolocationPointManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class GeolocationPointTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = GeolocationPointManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = GeolocationPointFaker::class;
}
