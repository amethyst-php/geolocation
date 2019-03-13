<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\GeolocationPointFaker;
use Railken\Amethyst\Managers\GeolocationPointManager;
use Railken\Amethyst\Tests\BaseTest;
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
