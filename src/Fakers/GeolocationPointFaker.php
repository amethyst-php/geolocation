<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class GeolocationPointFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('latitude', $faker->latitude);
        $bag->set('longitude', $faker->longitude);
        $bag->set('localizable_type', 'foo');
        $bag->set('localizable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
