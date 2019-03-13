<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class GeolocationPointSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        $config = Config::get('amethyst.geolocation.data.geolocation-point.attributes.localizable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\NumberAttribute::make('latitude')
                ->setRequired(true),
            Attributes\NumberAttribute::make('longitude')
                ->setRequired(true),
            Attributes\EnumAttribute::make('localizable_type', array_keys($config)),
            Attributes\MorphToAttribute::make('localizable_id')
                ->setRelationKey('localizable_type')
                ->setRelationName('localizable')
                ->setRelations($config),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
