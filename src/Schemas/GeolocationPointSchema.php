<?php

namespace Amethyst\Schemas;

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
        return [
            Attributes\IdAttribute::make(),
            Attributes\NumberAttribute::make('latitude')
                ->setRequired(true),
            Attributes\NumberAttribute::make('longitude')
                ->setRequired(true),
            Attributes\EnumAttribute::make('localizable_type', app('amethyst')->getDataNames()),
            Attributes\MorphToAttribute::make('localizable_id')
                ->setRelationKey('localizable_type')
                ->setRelationName('localizable')
                ->setRelations(app('amethyst')->getDataManagers()),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
